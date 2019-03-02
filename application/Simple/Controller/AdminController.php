<?php
namespace app\Simple\Controller;
use think\Controller;
use app\Simple\Model\Admin;

class AdminController extends Controller{

	public function login(){
		$ad=new Admin;
		$login=$ad->login();
		if($login){
			header("Location:/simple/systemy/init");
			exit;
		}else{
			$this->error("登陆信息错误");
		}
	}

}
	?>