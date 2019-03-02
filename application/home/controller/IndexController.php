<?php
namespace app\Home\controller;
use think\Controller;
use think\Request;
use app\Home\Model\Order;
use app\Home\Model\User;
use app\Home\Model\Yjjl;
use app\Home\Model\Paihang;

class IndexController extends WebController {
    public function index(){
       return $this->fetch("/index/index");
    }
	
	public function tzjl(){
		$this->assign("jl",(new Order)->order());
		$this->assign("empty","<li>您暂时还没有相关数据</li>");
		return $this->fetch("/index/order");
	}
	public function yjjl(){
		$this->assign("ret",(new User)->xiaji(session("userid")));
		$this->assign("syj",(new User)->where(['id'=>session("userid")])->value("yj"));
		$this->assign("yj",(new Yjjl)->order());
		$this->assign("empty","<li>您暂时还没有相关数据</li>");
		return $this->fetch("/index/access");
	}
	public function help(){
		return $this->fetch("/index/wanfa");
	}
	public function daili(){
		return $this->fetch("/index/daili");
	}
	public function paihang(){
		$th=(new Paihang)->ph();
		$this->assign("p",unserialize($th));
		return $this->fetch("/index/paihang");
	}
	
	public function dlewm(){
		return $this->fetch("/index/dlewm");
	}
	public function kefu(){
		return $this->fetch("/index/kefu");
	}
}