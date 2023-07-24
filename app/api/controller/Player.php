<?php
// +----------------------------------------------------------------------
// | OneKeyAdmin [ Believe that you can do better ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020-2023 http://onekeyadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: MUKE <513038996@qq.com>
// +----------------------------------------------------------------------
namespace app\api\controller;

use app\api\BaseController;
use app\api\model\CurrencyAll;
use app\api\model\User as UserModel;
use app\api\model\UserToken;
use app\api\model\v2\GameList;
use app\api\model\Gamelog as GamelogModel;
use app\common\lib\Redis;
use think\facade\Db;

class Player  extends BaseController
{
    /**
     * 用户鉴权
     */
    // protected $middleware = [\app\api\middleware\AuthCheck::class];
    protected $noNeedLogin = ['*'];


     function notFound()
    {

        return json(["data" => null, "status" => ["code"=>"1002","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
    }




    function checkDateTime($date) {
        //$date=$this->request->param()['account'];
        $datetime = new \DateTime();
            $arr=explode("-", $date);

            if($arr[3]){
                $arr=explode(":", $arr[3]);
                //var_dump($arr);die();
                if(count($arr)>1){
                    if(strlen($arr[0])!=2||strlen($arr[1])!=2){
                      return false;
                    }
                }else return false;
            }else return false;

            if($datetime::createFromFormat('Y-m-d\TH:i:sP', $date) === FALSE){

                if ($datetime::createFromFormat('Y-m-d\TH:i:s.uP', $date) === FALSE) {
                    $arr = explode(".", $date);
                    $arr=explode("-", $arr[1]);

                    $len=strlen($arr[0]);
                    if ($len<=9) {
                         return true;
                    }else return false;
                } else {
                        return true;
                }
            }else {
                return true;
            }

    }



    private function checkToken(){
        $wtoken=$this->request->header('Wtoken');
        if (empty($wtoken)) {
            //return json(["data" => false, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
            return false;
        }else{
            $w = UserToken::where("token", $wtoken)->where("id",1)->find();
            if($w){
                return true;
            }else return false;
        }

    }
    private function getCurrencyById($id){
        $result = CurrencyAll::where(['id'=>$id])->find();

        return $result['name'];
    }



     public function check(){
         $flag=$this->checkToken();
         //var_dump($this->request->param()['account']);die();

         if($flag){
             $account= $this->request->param()['account'];
             $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$account)->where("is_deleted",0)->find();
             //var_dump($userInfo);die();

             if ($userInfo) {
                 return json(["data" => true, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
             }else return json(["data" => false, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
         }else return json(["data" => false, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);

     }


    public function balance(){
        $flag=$this->checkToken();
        if ($flag) {
            $account= $this->request->param()['account'];
            $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$account)->where("is_deleted",0)->find();

            if($userInfo){
                // 用户余额
                $data['balance']=floatval($userInfo->balance);
                $currency=$this->getCurrencyById($userInfo->currency);
                $data['currency']=$currency;

                return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
            }else return json(["data" => null, "status" => ["code"=>"1006","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
        }else return json(["data" => false, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);


    }
//type 1下注 2派彩 3轉出『部分』金额至遊戲 4轉出『全部』金额至遊戲 5轉回額度至玩家錢包 6針對『已完成』的訂單做扣款 7針對『已完成』的訂單做加款 8活動獎勵派發給玩家 9退款(bet/rollout/takeall)
    public function bet(){
        $flag=$this->checkToken();
        if ($flag) {

            if(!input('post.account')||!input('post.eventTime')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.amount')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $input = input('post.');
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if(!$this->checkDateTime($input['eventTime'])){
                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The evenTime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            //var_dump($this->checkDateTime($input['eventTime']));
            //die();

            $game = GameList::where("gamecode", $input['gamecode'])->find();
            if($game->gametype=='slot'||$game->gametype=='arcade'){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();
                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();
                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>1]);
                    if($id){
                        $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");
                        $balance=bcsub($balance,$input['amount'],4);

                        if($balance<0){

                            Db::rollback();
                            return json(["data" => null, "status" => ["code"=>"1005","message"=>"Insufficient Balance","datetime"=>date('Y-m-d H:i:s')]]);
                        }
                        UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                        GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        Db::commit();
                        $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['balance']=floatval($userInfo->balance);
                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                }else{
                    $data['balance']=floatval($mtcode['balance']);
                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }

            }


        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function endround(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.account')||!input('post.data')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.createTime')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $input = input('post.');

            if(!$this->checkDateTime($input['createTime'])){
                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The createTime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $postData=json_decode(stripslashes($input['data'])  ,true);


            //var_dump($input['data']);
            //var_dump($postData['mtcode']);die();
            $game = GameList::where("gamecode", $input['gamecode'])->find();
            if($game->gametype=='slot'||$game->gametype=='arcade'){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                Db::startTrans();
                foreach ($postData as $k=>$v){
                    if($v['amount']<0){
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                    if(!$this->checkDateTime($v['eventtime'])){
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                    $mtcode = GamelogModel::where('mtcode',$v['mtcode'])->find();

                    if($userInfo->balance>=0&&empty($mtcode)){

                        $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$v['amount'],'add_time'=>time(),'mtcode'=>$v['mtcode'],'type'=>2]);
                        if($id){
                            $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                            $balance=bcadd($balance,$v['amount'],4);


                            UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                            GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        }else{
                            Db::rollback();
                            return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                        }


                    }else{
                        Db::rollback();
                        $data['balance']=floatval($mtcode['balance']);
                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                }
                Db::commit();
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                $data['balance']=floatval($userInfo->balance);
                $data['currency']=$currency;
                return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
            }

        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function rollout(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.account')||!input('post.amount')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.eventTime')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }

            $input = input('post.');
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if(!$this->checkDateTime($input['eventTime'])){

                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $game = GameList::where("gamecode", $input['gamecode'])->find();
            if($game->gametype=='table'||$game->gametype=='arcade'||$game->gametype=='fish'||$game->gametype=='live'){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();
                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();
                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>3]);
                    if($id){
                        $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                        //$balance=$balance-$input['amount'];
                        $balance=bcsub($balance,$input['amount'],4);
                        if($balance<0){
                            Db::rollback();
                            return json(["data" => null, "status" => ["code"=>"1005","message"=>"Insufficient Balance","datetime"=>date('Y-m-d H:i:s')]]);
                        }
                        UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                        GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        Db::commit();
                        $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['balance']=floatval($userInfo->balance);

                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                }else{
                    $data['balance']=floatval($mtcode['balance']);

                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }

            }


        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function takeall(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.account')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.eventTime')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $input = input('post.');
            if(!$this->checkDateTime($input['eventTime'])){

                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }

            $game = GameList::where("gamecode", $input['gamecode'])->find();
            if($game->gametype=='table'||$game->gametype=='arcade'||$game->gametype=='fish'){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();
                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();
                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$userInfo->balance,'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>4]);
                    if($id){

                        UserModel::where('id',$userInfo->id)->update(['balance'=>0]);
                        GamelogModel::where('id',$id)->update(['balance'=>0]);
                        Db::commit();
                        //$userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['amount']=floatval($userInfo->balance);
                        $data['balance']=0.00;

                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                }else{
                    $data['amount']=floatval($mtcode['amount']);
                    $data['balance']=floatval($mtcode['balance']);

                    $data['currency']=$currency;

                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }

            }


        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function rollin(){
        $flag=$this->checkToken();
        if ($flag) {
            $rake=input('post.rake');
            $bet=input('post.bet');
            $win=input('post.win');
            $amount=input('post.amount');
            if(!input('post.account')||!isset($amount)||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.eventTime')||!input('post.mtcode')
                ||!isset($bet)||!isset($win)||!input('post.createTime')||!input('post.gametype')||!isset($rake)){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }


            $input = input('post.');
            if(!$this->checkDateTime($input['eventTime'])){

                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if(!$this->checkDateTime($input['createTime'])){

                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The createTime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }

            $game = GameList::where("gamecode", $input['gamecode'])->find();
            if($game->gametype=='table'||$game->gametype=='arcade'||$game->gametype=='fish'||$game->gametype=='live'){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();

                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();

                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>5]);
                    if($id){
                        $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                        $balance=bcadd($balance,$amount,4);

                        UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                        GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        Db::commit();
                        $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['balance']=floatval($userInfo->balance);

                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }


                }else{
                    $data['balance']=floatval($mtcode['balance']);

                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }


            }

        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }



    public function debit(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.account')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.amount')||!input('post.eventTime')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $input = input('post.');
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if(!$this->checkDateTime($input['eventTime'])){
                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();
                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();
                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>6]);
                    if($id){
                        $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                        $balance=bcsub($balance,$input['amount'],4);
                        if($balance<0){
                            Db::rollback();
                            return json(["data" => null, "status" => ["code"=>"1005","message"=>"Insufficient Balance","datetime"=>date('Y-m-d H:i:s')]]);
                        }


                        UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                        GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        Db::commit();
                        $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['balance']=floatval($userInfo->balance);

                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }
                }else{
                    $data['balance']=floatval($mtcode['balance']);

                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }




        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }

    public function credit(){
        $flag=$this->checkToken();
        if ($flag) {

            if(!input('post.account')||!input('post.gamehall')||!input('post.gamecode')||!input('post.roundid')||!input('post.amount')||!input('post.eventTime')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }


            $input = input('post.');
            if(!$this->checkDateTime($input['eventTime'])){
                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }

                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                if(empty($userInfo)){
                    return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
                }
                $currency=$this->getCurrencyById($userInfo->currency);
                $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();

                if($userInfo->balance>=0&&empty($mtcode)){
                    Db::startTrans();
                    $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$input['gamecode'],'amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>7]);
                    if($id){
                        $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");


                        $balance=bcadd($balance,$input['amount'],4);

                        UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                        GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                        Db::commit();
                        $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                        $data['balance']=floatval($userInfo->balance);

                        $data['currency']=$currency;
                        return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                    }else{
                        Db::rollback();
                        return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                    }


                }else{
                    $data['balance']=floatval($mtcode['balance']);

                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }




        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }



    public function payoff(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.account')||!input('post.amount')||!input('post.eventTime')||!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }

            $input = input('post.');
            if($input['amount']<0){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"The “amount” parameter is negative","datetime"=>date('Y-m-d H:i:s')]]);
            }
            if(!$this->checkDateTime($input['eventTime'])){
                return json(["data" => null, "status" => ["code"=>"1004","message"=>"The eventtime parameter has wrong time foramat","datetime"=>date('Y-m-d H:i:s')]]);
            }

            $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
            if(empty($userInfo)){
                return json(["data" => null, "status" => ["code"=>"1006","message"=>"player not found","datetime"=>date('Y-m-d H:i:s')]]);
            }
            $currency=$this->getCurrencyById($userInfo->currency);
            $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();

            if($userInfo->balance>=0&&empty($mtcode)){
                Db::startTrans();
                $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>'','amount'=>$input['amount'],'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>8]);
                if($id){
                    $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                    $balance=bcadd($balance,$input['amount'],4);

                    UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                    GamelogModel::where('id',$id)->update(['balance'=>$balance]);
                    Db::commit();
                    $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email',$input['account'])->where("is_deleted",0)->find();
                    $data['balance']=floatval($userInfo->balance);

                    $data['currency']=$currency;
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }else{
                    Db::rollback();
                    return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                }


            }else{
                $data['balance']=floatval($mtcode['balance']);

                $data['currency']=$currency;
                return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
            }

        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function refund(){
        $flag=$this->checkToken();
        if ($flag) {
            if(!input('post.mtcode')){
                return json(["data" => null, "status" => ["code"=>"1003","message"=>"Bad parameters.","datetime"=>date('Y-m-d H:i:s')]]);
            }


            $input = input('post.');

            $redis = (new Redis())->getRedis();

            $mtcode = GamelogModel::where('mtcode',$input['mtcode'])->find();

            if(!empty($mtcode)){
                $userInfo = UserModel::with(['group'])->append(['url'])->where('id',$mtcode->uid)->where("is_deleted",0)->find();
                $currency=$this->getCurrencyById($userInfo->currency);

                $key = "refund_game_{$input['mtcode']}";
                $refund=$redis->get($key);
                if($refund){
                    $data['balance']=floatval($userInfo->balance);

                    $data['currency']=$currency;

                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }

                Db::startTrans();
                $id=GamelogModel::insertGetId(['uid'=>$userInfo->id,'gid'=>$mtcode->gid,'amount'=>$mtcode->amount,'add_time'=>time(),'mtcode'=>$input['mtcode'],'type'=>9]);
                if($id){
                    $balance  = UserModel::lock(true)->where('id',$userInfo->id)->value("balance");

                    $balance=bcadd($balance,$mtcode->amount,4);

                    UserModel::where('id',$userInfo->id)->update(['balance'=>$balance]);
                    Db::commit();
                    $userInfo = UserModel::with(['group'])->append(['url'])->where('id',$mtcode->uid)->where("is_deleted",0)->find();
                    $data['balance']=floatval($userInfo->balance);

                    $data['currency']=$currency;

                    $redis->set($key,$input['mtcode']);
                    return json(["data" => $data, "status" => ["code"=>"0","message"=>"Success","datetime"=>date('Y-m-d H:i:s')]]);
                }else{
                    Db::rollback();
                    return json(["data" => null, "status" => ["code"=>"100","message"=>"Something wrong.","datetime"=>date('Y-m-d H:i:s')]]);
                }


            }else{
                return json(["data" => null, "status" => ["code"=>"1014","message"=>"refund data not found.","datetime"=>date('Y-m-d H:i:s')]]);
            }


        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }


    public function bets()
    {
        $flag = $this->checkToken();
        if ($flag) {

            $input = input('post.');
            $postData = json_decode($input['data'], true);


            $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email', $input['account'])->where("is_deleted", 0)->find();
            Db::startTrans();
            foreach ($postData as $k=>$v){
                $mtcode = GamelogModel::where('mtcode', $v['mtcode'])->find();
                if (empty($mtcode)) {

                    $id = GamelogModel::insertGetId(['uid' => $userInfo->id, 'gid' => $input['gamecode'], 'amount' => $v['amount'], 'add_time' => time(), 'mtcode' => $v['mtcode']]);
                    if ($id) {
                        $balance = UserModel::lock(true)->where('id', $userInfo->id)->value("balance");
                        $balance = $balance - $v['amount'];
                        UserModel::where('id', $userInfo->id)->update(['balance' => $balance]);

                    } else {
                        Db::rollback();
                        return json(["data" => null, "status" => ["code" => "100", "message" => "Something wrong.", "datetime" => date('Y-m-d H:i:s')]]);
                    }
                } else {
                    Db::rollback();
                    return json(["data" => null, "status" => ["code" => "9", "message" => "MTCode duplicate.", "datetime" => date('Y-m-d H:i:s')]]);
                }
            }

            Db::commit();
            $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email', $input['account'])->where("is_deleted", 0)->find();
            $data['balance'] = floatval($userInfo->balance);
            $currency=$this->getCurrencyById($userInfo->currency);
            $data['currency']=$currency;
            return json(["data" => $data, "status" => ["code" => "0", "message" => "Success", "datetime" => date('Y-m-d H:i:s')]]);

        } else return json(["data" => null, "status" => ["code" => "2", "message" => "Player not found", "datetime" => date('Y-m-d H:i:s')]]);


    }



    public function refunds(){
        $flag=$this->checkToken();
        if ($flag) {
            $input = input('post.');
            $redis = (new Redis())->getRedis();
            $postData = json_decode($input['mtcode'], true);
            foreach ($postData as $k => $v) {
                $key = "refund_game_{$v}";
                $refund = $redis->get($key);
                if ($refund) {
                    return json(["data" => null, "status" => ["code" => "100", "message" => "Something wrong.", "datetime" => date('Y-m-d H:i:s')]]);
                }
            }
            Db::startTrans();
            $uid='';
            foreach ($postData as $k=>$v){
                $mtcode = GamelogModel::where('mtcode', $v)->find();
                $uid=$mtcode->uid;
                $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email', $mtcode->uid)->where("is_deleted", 0)->find();

                if ($userInfo->balance >= 0 && !empty($mtcode)) {

                    $id = GamelogModel::insertGetId(['uid' => $userInfo->id, 'gid' => $mtcode->gid, 'amount' => $mtcode->amount, 'add_time' => time(), 'mtcode' => $v]);
                    if ($id) {
                        $balance = UserModel::lock(true)->where('id', $userInfo->id)->value("balance");
                        $balance = $balance + $mtcode->amount;
                        UserModel::where('id', $userInfo->id)->update(['balance' => $balance]);
                        $key = "refund_game_{$v}";
                        $redis->set($key, $v);
                    } else {
                        Db::rollback();
                        return json(["data" => null, "status" => ["code" => "100", "message" => "Something wrong.", "datetime" => date('Y-m-d H:i:s')]]);
                    }

                } else {
                    Db::rollback();
                    return json(["data" => null, "status" => ["code" => "8", "message" => "Data not found.", "datetime" => date('Y-m-d H:i:s')]]);
                }
            }
            Db::commit();
            $userInfo = UserModel::with(['group'])->append(['url'])->where('mobile|email', $uid)->where("is_deleted", 0)->find();
            $data['balance'] = floatval($userInfo->balance);
            $currency=$this->getCurrencyById($userInfo->currency);
            $data['currency']=$currency;
            return json(["data" => $data, "status" => ["code" => "0", "message" => "Success", "datetime" => date('Y-m-d H:i:s')]]);
        }else return json(["data" => null, "status" => ["code"=>"2","message"=>"Player not found","datetime"=>date('Y-m-d H:i:s')]]);
    }






}
