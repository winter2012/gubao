<?php
namespace app\Simple\Model;
use think\Model;

class Withdraw extends Model{
	public function Getall($type){
		if(empty($type)){
			$type=99;
		}
		switch($type){
			case 1:
			 $map['status']=0;
			 break;
			case 2:
			 $map['status']=1;
			 break;
			case 3:
			 $map['status']=2;
			break;
			default:
			 $map="1=1";
		}
		$ok=$this->where($map)->order("id desc")->paginate(20,true,['query'=>['status'=> $type]]);
		return $ok;
	}
	public function deldx($id){
		$o=$this->where(array('id'=>$id))->delete();
		return $o;
	}
	protected function getTypeAttr($value){
		$arr=['1'=>"余额提现",'2'=>"佣金提现"];
    	return $arr[$value];
    }
	protected function getStatusAttr($value){
		$arr=['<button type="button" style="background-color: #dd514c;pointer-events: none;" class="am-btn am-btn-danger am-btn-xs">付款失败</buttom>','<button type="button" style="background-color: #5eb95e;pointer-events: none;" class="am-btn am-btn-success am-btn-xs">支付成功</button>','<button type="button" style="background-color: #F60;pointer-events: none;" class="am-btn am-btn-success am-btn-xs">退回申请</button>'];
    	return $arr[$value];
    }
	public function addwi($da,$t){
		if(!empty($da)){
			$data=array('status'=>$t);
			$ok=$this->save($data,array('id'=>$da));
			if($ok){
			$msg=array('code'=>1,'msg'=>"修改成功");
		}else{
			$msg=array('code'=>0,'msg'=>"未知错误");
		}
		}else{
			$msg=array('code'=>0,'msg'=>"ID错误");
				}
		
		return $msg;
	}
}