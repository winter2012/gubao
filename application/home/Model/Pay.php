<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Pay extends Model{
	public function dingdan($arr){
		$list=$this->save(['order'=>$arr['order'],'type'=>$arr['class'],'uid'=>session("userid"),'addtime'=>date("Y-m-d H:i:s"),'status'=>0,'money'=>$arr['price']]);
		return $list;
	}
}