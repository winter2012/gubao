<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Withdraw extends Model{
	public function ccont($n,$type){
		$list=$this->where(['type'=>$type])->whereTime('addtime','d')->count('id');
		switch($type){
			case 1:
			  $s=$n['tinum']-$list;
			break;
			case 2:
			  $s=$n['yjnum']-$list;
			break;
		}
		
		return $s;
	}
}