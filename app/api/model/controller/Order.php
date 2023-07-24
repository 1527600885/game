<?php
declare (strict_types = 1);

namespace app\api\controller;
use app\api\BaseController;
use think\facade\Db;
use think\Request;
class Order extends BaseController
{
	protected $noNeedLogin = ['notify'];
	public function initialize(){
		parent::initialize();
		$this->PaymentModel = new \app\api\model\Payment;//支付设置模型
		$this->OrderModel = new \app\api\model\Order;//订单模型
		$this->UserModel = new \app\api\model\User;//订单模型
		$this->pay = new \app\common\pay\PayService;//在线支付的接口
		$this->CurrencyAllModel = new \app\api\model\CurrencyAll;//货币设置相关
	}
	//订单分类
	public function classification(){
		$data=input('post.');
		$userInfo=$this->request->userInfo;
		if(!$data['id']){
			$this->error(lang('system.id'));
		}
		if(!$data['money']){
			$this->error(lang('system.id'));
		}
		$paymentinfo=$this->PaymentModel->where(['id'=>$data['id'],'is_show'=>1])->find();
		$lang=$this->lang;
		if($paymentinfo->type==2 || $paymentinfo->type==3){
			if(!$data['currencyvalue']){
				$this->error(lang('order.currencyvalue'));
			}
			if(strpos($paymentinfo->currency_name,$data['currencyvalue']) === false){ 
				$this->error(lang('order.currencyerror'));
			}
			$mobile=$this->UserModel->where('id',$userInfo['id'])->value('mobile');
			if($mobile){
				$this->online($paymentinfo,$data);
			}else{
				$this->error(lang('order.mobileEmpty'),'',404);
			}
		}else{
			$paymentinfo->rate=json_decode($paymentinfo->rate,true)[$lang];
			$rate=(float)number_format($data['money']/$paymentinfo->rate,7);
			if($rate<=0.0000000){
				$this->error(lang('order.toolittle'));
			}
			$data=[
				'money'=>$data['money'],
				'paymentinfo'=>$paymentinfo
			];
			$this->success(lang('system.success'),$data,301);
			// $this->currency();
		}
	}
	//数字货币支付
	public function currency(){
		$postdata=input('post.');
		$userInfo=$this->request->userInfo;
		if(!$postdata['id']){
			$this->error(lang('system.id'));
		}
		if(!$postdata['money']){
			$this->error(lang('system.id'));
		}
		$paymentinfo=$this->PaymentModel->where('id',$postdata['id'])->find();
		$orderinfo=$this->OrderModel->where('uid',$userInfo['id'])->order('id desc')->find();
		if(time()-$orderinfo->time<=10){
			$this->error(lang('order.toofast'));
		}
		$rate=$this->CurrencyAllModel->where('pid',$postdata['id'])->value('rate');
		$ratemoney=round($postdata['money']*$rate,7);
		$data=[
			'uid'=>$userInfo['id'],
			'mer_order_no'=>'order'.$userInfo['game_account'].time(),
			'pid'=>$postdata['id'],
			'money'=>$postdata['money'],
			'money2'=>$ratemoney,
			'type'=>1,
			'time'=>time(),
			'imgurl'=>$postdata['imgurl'],
			'pname'=>$userInfo['nickname'],
			'pemail'=>$userInfo['email']
		];
		$Id=$this->OrderModel->insertGetId($data);
		if($Id){
			$this->success(lang('order.ordersuccess'));
		}else{
			$this->error(lang('order.ordererror'));
		}
	}
	//在线支付
	public function online($paymentinfo,$data){
		if($paymentinfo->rate){
			$rate=json_decode($paymentinfo->rate,true);
		}else{
			$rate[$this->lang]=1;
		}
		$rate=$this->CurrencyAllModel->where('name',$data['currencyvalue'])->value('rate');
		$ratemoney=round($data['money']*$rate,2);
		$userInfo=$this->request->userInfo;
		$email=$this->UserModel->where('id',$userInfo['id'])->value('email');
		$mobile=$this->UserModel->where('id',$userInfo['id'])->value('mobile');
		$channel=json_decode($paymentinfo->channel,true); 
		$placedata=[
			'merchantNo'=>$paymentinfo->pay_memberid,
			'merchantOrderId'=>'order'.$userInfo['game_account'].time(),
			'channelCode'=>$channel[$data['currencyvalue']],
			'amount'=>(int)($ratemoney*100),
			'currency'=>$data['currencyvalue'],
			'email'=>$email,
			'userName'=>$userInfo->nickname,
			'mobileNo'=>$mobile,
			'notifyUrl'=>'https://game.unicgm.com/api/order/notify',
			'expireTime'=>60
		];
		$arr=$this->pay->place($paymentinfo,$placedata);
		if($arr['code']==000){
			$data=[
				'uid'=>$userInfo['id'],
				'mer_order_no'=>$placedata['merchantOrderId'],
				'pid'=>$paymentinfo->id,
				'money'=>$data['money'],
				'type'=>2,
				'time'=>time(),
				'pname'=>$userInfo['nickname'],
				'pemail'=>$email,
				// 'sign'=>$arr['data']['sign'],
				'order_no'=>$arr['data']['sysOrderId'],
				'fee'=>$arr['data']['fee'],
				'realAmount'=>$arr['data']['realAmount'],
			];
			$Id=$this->OrderModel->insertGetId($data);
			if($Id){
				$this->success(lang('order.placesuccess'),$arr['data']['checkStand']);
			}else{
				$this->error(lang('order.placeerror'));
			}
		}else{
			$this->error(lang('order.placeerror'));
		}
	}
	//回调集合
	public function notify(){
		$params = $this->request->param();
		$txt = json_encode($params);
		file_put_contents('newfile.log', "\r\n".date('Y-m-d,H:i:s').'-----1.postdata:'.$txt,FILE_APPEND);
		$data=$this->pay->notify($params);
	}
}