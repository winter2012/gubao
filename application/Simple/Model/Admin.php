<?php
namespace app\Simple\Model;
use think\Model;
use think\Request;

class Admin extends Model{
	public function GetOne(){
		$user=Session('is_admin');
		$pass=$this->where(array('user'=>$user))->find();
		if(!$pass){
			session('is_admin',null);
			return false;
		}else{
			return true;
		}
	}
	
	public function login(){
		$data=Request::instance()->post();
		if($data && $data['user']!="" && $data['pass']!=""){
		$pass=$this->where(array('user'=>$data['user']))->value("password");
		if($pass==md5($data['pass'])){
			Session("is_admin",$data['user']);
			return true;
		}else{
			return false;
		}
		}
	}
	
}