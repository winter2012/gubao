<?php
namespace app\Simple\Controller;
use think\Request;
use app\Simple\Model\User;
use app\Simple\Model\Withdraw;
use app\Simple\Model\Order;
use app\Simple\Model\Pay;
use app\Simple\Model\Config;


class SystemyController extends CheckloginController {

	public function init(){
		$user=new User;
		$w=new Withdraw;
		$u['count']=$user->whereTime("addtime","d")->count('id');
		$u['onenum']=(new Pay)->where(['status'=>1])->whereTime("addtime","d")->sum("price");
		$u['dfl']=$w->where(['type'=>1,'status'=>1])->whereTime("addtime","d")->sum("money");
		$u['dxs']=$w->where(['type'=>2,'status'=>1])->whereTime("addtime","d")->sum("money");
		$u['Mnum']=$user->count('id');
		$u['money']=(new Pay)->where(['status'=>1])->sum("price");
		$userlist=$user->getm();
		$this->assign('us',$this->appdata());
		$this->assign('u',$u);
		$this->assign("lk",[]);
		$this->assign("m",$userlist);
		return $this->fetch("/index");
	}
	public function peilv(){
		$this->assign("hk",(new Config)->pl());
		$this->assign("c",(new Config)->where(['id'=>1])->find());
		return $this->fetch("/peilv");
	}

	public function imglist(){
		$id=Request::instance()->get('status');
		$d=new Dxtpl;
		$this->assign("u",$d->Getall($id));
		$this->assign('t',$id);
		return $this->fetch("/imglist");
	}
	public function fontlist(){
		$id=Request::instance()->get('id');
		if(empty($id)){
			$id=1;
		}
		$user=new User;
		$list=$user->userlist($id);
		$this->assign("u",$list);
		$this->assign('t',$id);
		return $this->fetch("/fontlist");
	}
	public function amazeui(){
		$this->assign("c",(new Config)->where(['id'=>1])->find());
		return $this->fetch("/amazeui");
	}
	
	public function withdraw(){
		$id=Request::instance()->get('id');
		$w=new Withdraw;
		$list=$w->Getall($id);
		$this->assign("u",$list);
		$this->assign('t',$id);
		return $this->fetch("/withdraw");
	}
	
	public function orderlist(){
		$ty=Request::instance()->get('type');
		if(empty($ty)){
			$ty=-1;
		}
		$py=new Pay;
		$li=$py->Glist();
		$this->assign('t',$ty);
		$this->assign('g',$li);
		return $this->fetch("/orderlist");
	}
	public function paylist(){
		$ty=Request::instance()->get('type');
		if(empty($ty)){
			$ty=-1;
		}
		$py=new Order;
		$li=$py->Getall($ty);
		$this->assign('t',$ty);
		$this->assign('g',$li);
		return $this->fetch("/paylist");
	}
	
	
	public function appdata(){
		$tim="";
		$us="";
		$kvip="";
		$dx="";
		for($i=0;$i<7;$i++){
			$us['tim'][]=date('n月j',strtotime('-'.$i.' days'));
			$us['us'][]=(new Order)->appda(date("Y-m-d",strtotime("-".$i." days")));
			$us['kvip'][]=(new Order)->succ(date("Y-m-d",strtotime("-".$i." days")));
			$us['dx'][]=(new Order)->sunn(date("Y-m-d",strtotime("-".$i." days")));
		}
		$us['tim']=array_reverse($us['tim']);
		$us['us']=array_reverse($us['us']);
		$us['kvip']=array_reverse($us['kvip']);
		$us['dx']=array_reverse($us['dx']);
		return $us; 

	}
	
}











?>