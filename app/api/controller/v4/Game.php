<?php


namespace app\api\controller\v4;


use app\api\BaseController;
use app\api\model\v2\GameList;
use app\common\game\ApiGame;
use app\common\lib\Redis;

class Game extends BaseController
{
    protected $noNeedLogin = ['*'];

    public function playGame()
    {
        $id = input("param.id");
        $account = input("param.account");
        //$gamecode = input("param.gamecode");
        $gameData = GameList::where("id",$id)->find();
        $lang=$this->gamelang;
        if($gameData && $gameData['type'] == 1){
            $this->success(lang('game.run_game'),["gamename"=>$gameData->gameName,"game_url"=>$gameData['trygameurl']]);
        }
        if(!$gameData){
            return $this->error(lang('game.error_game'));
        }
        $game = new ApiGame();

        $res=json_decode($game->gamelink($account,$gameData->gamehall,$gameData->gamecode,$gameData->gameplat,$lang),true);
        if($res['data']){
            $this->success(lang('game.run_game'),["gamename"=>$gameData->gamename,"game_url"=>$res['data']['url']]);
        }else{
            $this->error(lang('game.error_game'));
        }

       // var_dump($res['data']);die();

    }


    public function searchGame(){
        $gamename = input("param.gamename");

        if($gamename){
            $gameData = GameList::where("gamename",'like','%'.$gamename.'%')->select();
            return $this->success('查询成功',$gameData);
        }
    }



}