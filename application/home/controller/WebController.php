<?php
namespace app\Home\Controller;
use think\Controller;
use app\Home\Model\Config;
use app\Home\Model\User;

class WebController extends Controller{
	public $cn;
	
	public function __construct(){
        parent::__construct();
		$co=(new Config)->where(['id'=>1])->find();
		$this->cn=$co;
		$this->assign("config",$co);
		//session("userid",2);
		$this->chek();
		if($co['kaiguan']==0){
			$this->close("站点维护中，请稍后访问");
		}
    }
	public function chek(){
		$uid=session("userid");
		if(!empty($uid)){
			$rt=(new User)->where(['id'=>$uid])->find();
			if(!$rt){
				$this->error("用户不存在",$this->cn['dlurl']);
			}
		}else{
			$this->error("请登陆",$this->cn['dlurl']);
			}
	}
}