<?php
namespace app\Simple\Model;
use think\Model;

class User extends Model{
	public function getm(){
		$li=$this->order("money desc")->limit(10)->select();
		foreach($li as $k=>$v){
			$li[$k]['x']=$this->xiaji($v['id']);
			
		}
		return $li;
	}
	public function xiaji($id){
		$ret[0]=$this->where(['ss0'=>$id])->count('id');
		$ret[1]=$this->where(['ss1'=>$id])->count('id');
		$ret[2]=$this->where(['ss2'=>$id])->count('id');
		$ret[3]=$this->where(['ss3'=>$id])->count('id');
		$ret[4]=$this->where(['ss4'=>$id])->count('id');
		return $ret;
	}
	public function userlist($id){
		return $this->where(['status'=>$id])->paginate(15,false,['query'=>request()->param()]);
	}
}