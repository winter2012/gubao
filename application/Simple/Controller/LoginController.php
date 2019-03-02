<?php
namespace app\Simple\Controller;
use think\Controller;

class LoginController extends Controller{
	
	public function out_login(){
		Session('is_admin',null);
		$this->success('退出成功','/index.php/home/index');
	}
}













?>