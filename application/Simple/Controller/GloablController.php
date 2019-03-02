<?php
namespace app\Simple\Controller;
use think\Request;
use app\Simple\Model\User;
use app\Simple\Model\Dxtpl;
use app\Simple\Model\Order;
use app\Simple\Model\Withdraw;
use app\Simple\Model\Pay;
use app\Simple\Model\Config;

class GloablController extends CheckloginController{

	public function upload(){
		$data=Request::instance()->post();
		$file = request()->file('image');
		if($file){
			$info = $file->validate(['size'=>2097152,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
			if($info){
				$data['kefu']=$info->getSaveName();
			}else{
				$data['kefu']=$file->getError();
			}
		}
		if(!isset($data['kaiguan'])){
			$data['kaiguan']=0;
		}else{
			$data['kaiguan']=1;
		}
		$ok=(new Config)->save($data,['id'=>1]);
			if($ok){
				$this->success("配置成功");
			}else{
				$this->error($ok);
			}
	}
	public function kaiqi(){
		$ok=Request::instance()->post('ok');
		(new Config)->where(['id'=>1])->setField("txopen",$ok);
		return json(['code'=>0]);
	}
	public function addm(){
		$data=Request::instance()->post();
		$ok=(new Config)->save($data,['id'=>1]);
			if($ok){
				$this->success("配置成功");
			}else{
				$this->error($ok);
			}
	}
	public function qdel(){
		if(Request::instance()->isPost()){
			$id=Request::instance()->post('id');
			$usp=new Userpay;
			return json($usp->qdel($id));
		}
	}
	public function tix(){
		$r=(new Withdraw)->where(['status'=>0])->count();
		return json(['code'=>0,'m'=>$r]);
	}
	
	
	public function add(){
		if(Request::instance()->isPost()){
			$date=Request::instance()->post();
			$usp=new Userpay;
			switch($date['type']){
				case "c":
				 $msg=array('success'=>$usp->clo($date['o']));
				break;
				case "x":
				 $usp->addmoney($date['id'],$date['money']);
				 $msg=array('success'=>true);
				break;
			}
			return json($msg);
		}
    }
	public function del(){
		if(Request::instance()->isPost()){
			$id=Request::instance()->post('id');
			$usp=new Userpay;
			return json($usp->del($id));
		}
	}
	public function upmobile(){
		$data=Request::instance()->post();
		$ok=$this->cfgPut($data,'mobile');
		if($ok){
			$this->success('设置成功');
		}else{
			$this->error($ok);
		}
	}
		
	public function userlist(){
		$type=Request::instance()->post('type');
		$user=new User;
		$msg=$user->userlist($type);
		return $msg;
	}


	 public  function getone(){
		 $id=Request::instance()->post('id');
		 if($id){
			 $user=new User;
			 $list=$user->Getone($id);
			 if($list){
				 $msg=['code'=>1,'msg'=>'success','data'=>$list];
			 }else{
				 $msg=['code'=>0,'msg'=>'ERROR'];
			 }
		 }else{
			 $msg=['code'=>0,'msg'=>'ERROR'];
		 }
		 return $msg; 
	 }

	 public  function adduser(){
		 $data=Request::instance()->post();
		 if($data){
			 $user=new User;
			 $list=$user->adduser($data);
			 return $list;
		 }else{
			 return ['code'=>0,'msg'=>'非法操作'];
		 }
	 }

	public function deluser(){
		$id=Request::instance()->post("id");
		$user=new User;
		$ok=$user->deluser($id);
		 if($ok){
			 $msg=['msg'=>"删除成功"];
		 }else{
			 $msg=['msg'=>"删除失败"];
		 }
       return $msg;
	}
	public function delwi(){
		$id=Request::instance()->post("id");
		$user=new Withdraw;
		$ok=$user->deldx($id);
		 if($ok){
			 $msg=['msg'=>"删除成功"];
		 }else{
			 $msg=['msg'=>"删除失败"];
		 }
       return $msg;
	}
	public function addwi(){
		$id=Request::instance()->post("id");
		$t=Request::instance()->post("t");
		$user=new Withdraw;
		$ok=$user->addwi($id,$t);
		 if($ok){
			 if($t==2){
				 $mo=(new Withdraw)->where(['id'=>$id])->find();
				 if($mo['type']==1){
					 $mn="money";
				 }else{
					 $mn="yj";
				 }
				 (new User)->where(['id'=>$mo['uid']])->setInc($mn,$mo['money']);
			 }
			 $msg=['msg'=>"操作成功"];
		 }else{
			 $msg=['msg'=>"操作失败"];
		 }
       return $msg;
	}

	public function Getdx(){
		 $id=Request::instance()->post('id');
		 if($id){
			 $user=new Dxtpl;
			 $list=$user->getdx($id);
			 if($list){
				 $msg=['code'=>1,'msg'=>'success','data'=>$list];
			 }else{
				 $msg=['code'=>0,'msg'=>'ERROR'];
			 }
		 }else{
			 $msg=['code'=>0,'msg'=>'ERROR'];
		 }
		 return $msg; 
	}
	public function addtpl(){
		$data=Request::instance()->post();
		$user=new Dxtpl;
		$list=$user->savedx($data);
		return $list;
	}

	public function deldx(){
		$id=Request::instance()->post("id");
		$user=new Dxtpl;
		$ok=$user->deldx($id);
       return $ok;
	}
	public function addmoney(){
		$id=Request::instance()->post();
		if($id){
			if($id['type']==1){
				$ty="money";
			}else{
				$ty="yj";
			}
			$user=new User;
			switch($id['s']){
				case 0:
				 $oka=$user->where(['id'=>$id['pid']])->setDec($ty,$id['money']);
				break;
				case 1:
				 $oka=$user->where(['id'=>$id['pid']])->setInc($ty,$id['money']);
				break;
				case 2:
				 $oka=$user->where(['id'=>$id['pid']])->setField($ty,$id['money']);
				break;
			}
			if($oka){
				$msg=['code'=>1,'msg'=>"设置成功"];
			}else{
				$msg=['code'=>0,'msg'=>"系统错误"];
			}
			return json($msg);
		}
	}
	public function geta(){
		$id=Request::instance()->post("id");
		$ok=(new Pay_order)->getone($id);
		if($ok){
			$msg=['code'=>0,'msg'=>$ok];
		}else{
			$msg=['code'=>1,'msg'=>"订单不存在"];
		}
		return json($msg);
	}
	
	

	public function delorder(){
		$id=Request::instance()->post("id");
		$dr=new Pay;
		$ok=$dr->delorder($id);
       return $ok;
	}

	public function rest(){
		$id=Request::instance()->post("id");
		if($id){
			$d=new Pay_order;
			$list=$d->getone($id);
			if($list['status']==0){
			$u=new User;
			$ok=$u->Incmoney($list,'money');
			$pl=new Panel_log;
			$msg="用户ID:".$list['uid'].",修改充值订单".$list['out_trade_no']."状态为成功，增加金额".$list['money'];
			$pl->alog($id,$msg);
			$d->setty($id,array('status'=>1));
			if($ok){
				 $msg=['msg'=>"修改成功"];
			 }else{
				 $msg=['msg'=>"修改失败"];
			 }
			}else{
				$u=new User;
				$ok=$u->Decmoney($list,'money');
				$pl=new Panel_log;
				$msg="用户ID:".$list['uid'].",修改充值订单".$list['out_trade_no']."状态为成功，减少金额".$list['money'];
				$pl->alog($id,$msg);
				$d->setty($id,array('status'=>0));
				if($ok){
					 $msg=['msg'=>"修改成功"];
				 }else{
					 $msg=['msg'=>"修改失败"];
				 }
			 }
          return $msg;
		}
	}
	public function wz(){
		$id=Request::instance()->post("id");
		$d=new News;
		$ok=$d->Getone($id);
        return $ok;
	}
	public function addwz(){
		$id=Request::instance()->post();
		$d=new News;
		$ok=$d->editwz($id);
        return $ok;
	}
	public function delwz(){
		$id=Request::instance()->post("id");
		$d=new News;
		$ok=$d->delwz($id);
        return $ok;
	}
	public function delvip(){
		$id=Request::instance()->post("id");
		$dr=new Viporder;
		$ok=$dr->delvip($id);
       return $ok;
	}
	public function delsend(){
		$id=Request::instance()->post("id");
		$dr=new Dxsend;
		$ok=$dr->delsend($id);
       return $ok;
	}
	
	public function delshop(){
		$id=Request::instance()->post("id");
		$dr=new Paymsg ;
		$ok=$dr->delshop($id);
       return $ok;
	}
}	
?>