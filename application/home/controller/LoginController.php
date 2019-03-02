<?php
namespace app\Home\controller;
use think\Controller;
use think\Request;
use app\Home\Model\Config;
use app\Home\Model\User;
use app\Home\Model\Withdraw;

class LoginController extends Controller {
    public function index(){
		$data=Request::instance()->get();
			if(isset($data['openid']) && isset($data['name']) && isset($data['head'])){
				$user=new User;
				$u=$user->where(['openid'=>$data['openid']])->find();
				if($u){
					session("userid",$u['id']);
				}else{
					$arr['openid']=$data['openid'];
					$arr['money']=0;
					$arr['addtime']=date("Y-m-d H:i:s");
					$arr['ip']=getIp();
					$arr['yj']=0;
					$arr['name']=$data['name'];
					$arr['heardimg']=urldecode($data['head']);
					$arr['status']=1;
					if(isset($data['qrcode'])){
						$uu=$user->where(['id'=>$data['qrcode']])->find();
						$arr['ss0']=$data['qrcode']?:0;
						$arr['ss1']=$uu['ss0']?:0;
						$arr['ss2']=$uu['ss1']?:0;
						$arr['ss3']=$uu['ss2']?:0;
						$arr['ss4']=$uu['ss3']?:0;
					}
				   $user->save($arr);
				   session("userid",$user->id);
				}
				$txid=(new User)->where(['id'=>session('userid')])->value("txid");
				if(empty($txid) || $txid==null){
				    header("Location: http://jfcms12.com/openid.php?mid=1261&url=http://".$_SERVER['HTTP_HOST']."/home/pay/openid.html?u=1");
					exit;
				}else{
					header("location:".U('index/index'));
				   exit;
				}
			}else{
				$co=(new Config)->where(['id'=>1])->find();
				$this->error("请登陆",$co['dlurl']);
			}
	}
	
}