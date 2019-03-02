<?php
namespace app\Simple\Controller;
use think\Controller;
use app\Simple\Model\Admin;
use app\Simple\Model\Config;

class CheckloginController extends Controller{

		public function __construct(){
		  parent::__construct();
		  $ad=new Admin;
		  $ok=$ad->Getone();
		  if (!$ok){
			  session('is_admin',null);
			  $this->error('非法访问!',U('index/login'));
			  exit;
		  }
		  $col=(new Config)->where(['id'=>1])->value('txopen');
		  $this->assign("txop",$col);
     }
    
	
}
?>