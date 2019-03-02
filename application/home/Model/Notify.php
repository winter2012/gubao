<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Notify extends Model{
	Protected $autoCheckFields = false;
	private $pid;
	private $da;
	public function index(){		
		$res=Request::instance()->post();
		if(is_array($res) && count($res)>0){
			$this->da=$res;
			$reg=$this->mysign();
			return array('msg'=>$reg['msg']);
			exit;
		}else{
			return array('code'=>"err109",'msg'=>"数据类型错误");
		    exit;
		}
	}
	public function mysign(){
		$s=$this->da;
		$user=new User;
		$u=$user->GetOne($s['user'],"id");
		$key=$u->getData("key");
		$str="order=".$s['order']."&money=".$s['money']."&time=".$s['time']."&user=".$s['user']."&type=".$s['type']."&key=".$key;
		if($s['sign']==md5($str)){
			return $this->caoz();
			exit;
		}else{
			return array('msg'=>"sign验证错误");
			exit;
		}
	}
	public function caoz(){
		$d=$this->da;
		$order=new Pay_order;
		$ok=$order->succ($d['type'],$d['money'],$d['order']);
		if($ok){
			return array('msg'=>"订单已处理");
		}else{
			$ok=$this->chul();
			if($ok['code']!=0){
				return array('msg'=>$ok['msg']);
				exit;
			}else{
			  return array('msg'=>'success');
			  exit;
			}
		}
	}
	public function chul(){
		$d=$this->da;
		$order=new Pay_order;
		$list=$order->fanhui($d['user'],$d['type'],$d['money']);
		if($list){
			$order->up($list['out_trade_no'],array('status'=>1,'ysk_jiaoyi'=>$d['order']));			
			if($d['user']==1003){
			   $uid=$list['name'];
			}else{
				$uid=$list['uid'];
			}
				$user=new User;
				$user->Inc($uid,"money",$d['money']-$list['fl']);
				if($list['notify']!=""){
					$member=$user->GetOne($uid,"id");
					$arr=array(
					'status'=>1,
					'partner'=>$uid,
					'order'=>$list['order'],
					'price'=>$list['money'],
					'money'=>$list['ysk_order'],
					'platform'=>$list['out_trade_no']
					);
					$ukey=$member->getData('key');
					$sign=md5Verify($arr,"",$ukey);
					$arr['sign']=$sign;
					$msg=vpost($list['notify'], $arr);
					$order->up($list['out_trade_no'],array('count'=>$msg));
					return array('code'=>0,'msg'=>"成功");
				}else{
					return array('code'=>0,'msg'=>"成功");
				}
			
		}else{
			return array('code'=>100,'msg'=>"订单不存在");
			exit;
		}
	}
}