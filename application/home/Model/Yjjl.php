<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Yjjl extends Model{
	public function order(){
		$list=$this->where(['user'=>session("userid")])->order("id desc")->limit(20)->select();
		return $list;
	}
	public function jl($uid,$money,$str){
		$this->save(['user'=>$uid,'money'=>$money,'addtime'=>date("Y-m-d H:i:s"),'account'=>$str]);
	}
}