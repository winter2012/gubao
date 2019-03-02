<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class User extends Model{
	public function xiaji($id){
		$ret[0]=$this->where(['ss0'=>$id])->count('id');
		$ret[1]=$this->where(['ss1'=>$id])->count('id');
		$ret[2]=$this->where(['ss2'=>$id])->count('id');
		$ret[3]=$this->where(['ss3'=>$id])->count('id');
		$ret[4]=$this->where(['ss4'=>$id])->count('id');
		return $ret;
	}
	public function jiner($t){
		$f=$this->where(['id'=>session("userid")])->find();
		switch($t){
			case 1:
			 $money=$f['money'];
			break;
			case 2:
			 $money=$f['yj'];
			break;
		}
		$price=explode(".",$money);
		return $price[0];
	}
	public function yjff($uid,$money){
		$fl=(new Config)->where(['id'=>1])->find();
		$u=$this->where(['id'=>$uid])->find();
		$yj=new Yjjl;
		for($i=0;$i<5;$i++){
			 $price=$money*$fl['ss'.$i]/100;
			 $u1=$this->where(['id'=>$u['ss'.$i]])->find();
			 if($u1){
			  $this->where(['id'=>$u['ss'.$i]])->setInc("yj",$price);
			  $yj->jl($u['ss'.$i],$price,($i+1)."级返佣".$price);
			 }
		}
		
	}
}