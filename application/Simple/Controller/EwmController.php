<?php
namespace app\Simple\Controller;
use think\Controller;
use think\Request;
use app\Simple\Model\Userpay;

class EwmController extends CheckloginController{	
    public function index(){
		$g=new Userpay;
		$p=$g->slist();
		$this->assign('p',$p);
	 return $this->fetch("/erweima");
	}
	public function imgup(){
		$da=Request::instance()->get();
		if(!isset($da['ty'])){
			$da['ty']="";
		}
		$g=new Userpay;
		$this->assign("up",$g->one($da['id']));
		$this->assign("g",$da);
		return $this->fetch("/imgup");
	}
	public function imglt(){
		$da=Request::instance()->get();
		if(!isset($da['ty'])){
			$da['ty']="";
			$list=$this->imgdir(1003,$da['id']);
		}else{
		    $list=$this->imgdir(1003,$da['id'],$da['ty']);
		}
		print_r($da);
		$g=new Userpay;
		$this->assign("up",$g->one($da['id']));
		$this->assign("g",$da);
		$this->assign('t',$list);
		return $this->fetch("/imglt");
	}
	public function imgdir($uid,$id,$ty=null){
		if($ty){
			$dir=ROOT_PATH.'/public/ziyuan/'.$uid.'/'.$id.'/'.$ty.'/';
		}else{
		  $dir=ROOT_PATH.'/public/ziyuan/'.$uid.'/'.$id.'/';
		}
		return scanD($dir);
	}
}
