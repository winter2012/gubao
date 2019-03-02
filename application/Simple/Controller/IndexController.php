<?php
namespace app\Simple\Controller;
use think\Controller;
use app\Simple\Model\Admin;

class IndexController extends Controller{	
    public function login(){
		$ad=new Admin;
		$ok=$ad->Getone();
		if($ok){
			  header("Location:/simple/systemy/init");
			  exit;
			}else{
				return $this->fetch("/login");
			}
	}
}
