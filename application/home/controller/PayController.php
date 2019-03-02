<?php
namespace app\Home\controller;
use think\Controller;
use think\Request;
use app\Home\Model\User;
use app\Home\Model\Opend;
use app\Home\Model\Order;
use app\Home\Model\Pay;
use app\Home\Model\Withdraw;
use app\Home\Model\Config;

class PayController extends WebController{
   public function init(){
	    $data=Request::instance()->post();
		$msg=$this->pay($data);
		return json($msg);
   }
   private function pay($da){
	   $user=new User;
	   $money=$user->where(['id'=>session("userid")])->value("money");
	   $msg=['ret'=>3,"error"=>"系统错误"];
	   if($da['number']<=$money){
		   $user->where(['id'=>session("userid")])->setDec("money",$da['number']);
		   $arr['user']=session("userid");
		   $arr['account']=$da['type'];
		   $arr['state']=0;
		   $arr['money']=$da['number'];
		   $arr['addtime']=date("Y-m-d H:i:s");
		   $arr['term']=(new Opend)->term();
		   $arr['ip']= $_SERVER["REMOTE_ADDR"];
		   $arr['order']="P".date("YmdHis");
		   $ok=(new Order)->save($arr);
		   $con=(new Config)->where(['id'=>1])->value("yjtype");
		   if($con==1){
				$user->yjff(session("userid"),$da['number']);
			}
		   if($ok){
			   $msg=['ret'=>0,'amount'=>$money-$da['number'],"error"=>""];
		   }else{
			   $msg=['ret'=>1,"error"=>""];
		   }
	   }else{
		   $msg=['ret'=>2,"error"=>""];
	   }
	   return $msg;
   }
   
   public function withdrawCash(){
	    $data=Request::instance()->post();
		$con=(new Config)->where(['id'=>1])->value("txopen");
		if($con==1){
		$money=(new User)->jiner($data['playType']);
		$txid=(new User)->where(['id'=>session('userid')])->value("txid");
			if($money>=2){
				$arr['type']=$data['playType'];
				$arr['order']=pay_order("T");
				$arr['uid']=session("userid");
				$arr['addtime']=date("Y-m-d H:i:s");
				$arr['status']=0;
				$arr['money']=$money>200?200:$money;
				(new Withdraw)->save($arr);
				$arr['txid']=$txid;
				$msg=$this->send($arr);
				if($msg['code']==0){
					(new User)->where(['id'=>session("userid")])->setDec($data['playType']==1?"money":"yj",$arr['money']);
					(new Withdraw)->where(['order'=>$arr['order']])->setField("status",1);
				}
				return json($msg);
			}else{
				return json(['code'=>1,'msg'=>'最低提现2块']);
			}
		}else{
			return json(['code'=>1,'msg'=>'提现功能维护中']);
		}
   }
   public function openid(){
	   $id=Request::instance()->get('openid');
	   $ok=(new User)->where(['id'=>session('userid')])->setField("txid",$id);
	   if($ok){
		   $this->success("数据初始化完成",U('index/index'));
	   }else{
		   $this->error("数据初始化失败",U('index/index'));
	   }
   }

   public function pay_getTransferCount(){
	   $data=Request::instance()->post();
	   $num=(new Withdraw)->ccont($this->cn,$data['playType']);
	   return json(['code'=>$num]);
   }
   private function send($arr){
	   $url="http://www.1ytaob.com/home/api/tixian.html";
	   $map['uid']=$this->cn['partner'];
	   $map['money']=$arr['money'];
	   $map['order']=$arr['order'];
	   $map['wid']=1;
	   $map['txid']=$arr['txid'];
	   $str="txid=".$arr['txid']."&uid=".$map['uid']."&money=".$map['money']."&order=".$map['order']."&key=".$this->cn['kkey'];
	   $map['sign']=md5($str);
	   $html=vpost($url, $map);
	   return json_decode($html,true);
   }
   public function recharge(){
	   $data=Request::instance()->post();
	   if($data['type']==3){
		   $arr['class']="wxpay";
	   }else{
		    $arr['class']="alipay";
	   }
	   $url="http://www.1ytaob.com/home/api/pay.html";
	   $arr['hallway']="visa";
	   $arr['partner']=$this->cn['partner'];
	   $arr['order']="R".date("YmdHis");
	   $arr['price']=$data['price'];
	   $arr['notify']='http://'.$_SERVER['HTTP_HOST'].'/home/api/notify';
	   $arr['return']='http://'.$_SERVER['HTTP_HOST'];
	   $arr['name']=mt_rand(1000,9999);
	   $sign=md5Verify($arr,"",$this->cn['kkey']);
	   $arr['sign']=$sign;
	   (new Pay)->dingdan($arr);
	   $html=blsend($arr,"post","正在传递支付数据...",$url);
	   echo $html;
	   exit;
   }
   public function ajax_mydownlistx(){
	   $list=(new User)->xiaji(session("userid"));
	   $arr=["ret"=>0,"data"=>["down1_cnt"=>$list[0],"down2_cnt"=>$list[1],"down3_cnt"=>$list[2],"down4_cnt"=>$list[3],"down5_cnt"=>$list[4]]];
	   return json($arr);
   }
}