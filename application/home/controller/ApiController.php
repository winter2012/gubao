<?php
namespace app\Home\controller;
use think\Controller;
use think\Request;
use app\Home\Model\Api;
use app\Home\Model\Opend;
use app\Home\Model\Pay;
use app\Home\Model\Config;
use app\Home\Model\User;

class ApiController{
    public function newx(){
		$tr=(new Api)->newx();
       return json($tr);
    }
	public function record(){
		$list=(new Opend)->order("id desc")->limit(10)->select();
		$arr=array();
		foreach($list as $k=>$v){
			$e=explode(",",$v['num']);
			$num=array_sum($e);
			$arr[]=array('a1'=>$e[0],'a2'=>$e[1],'a3'=>$e[2],'asum'=>$num,'astr'=>$this->check($e));
		}
		$ar=[ 'ret' => 0, 'data' => ['list'=>$arr]];
		return json($ar);
	}
	private function check($code){
		if(is_array($code)){
			if($code[0]==$code[1] && $code[0]==$code[2]){
				$s="围骰";
			}else{
				sort($code);
				if($code[0]+1==$code[1] && $code[1]+1==$code[2]){
					$s="顺子";
				}else{
					$sum=array_sum($code);
					$s=$sum>10?"大":"小";
				}
			}
		}else{
			$s="ERROR";
		}
		return $s;
	}
	public function notify(){
	   if(Request::instance()->isPost()){
		    $co=(new Config)->where(['id'=>1])->find();
		    $key=$co['kkey'];
			$parm=Request::instance()->post();
			$ok=md5Verify($parm,$parm['sign'],$key);
			if($ok){
                $um=new Pay;				//验证数据签名
				$or=$um->where(['order'=>$parm['order'],'status'=>0])->find();
				if($or){	//验证成功
					$user=new User;
					$user->where(['id'=>$or['uid']])->setInc("money",$parm['money']);
					
					$um->save(array("price"=>$parm['money'],"status" => 1),array("id" => $or['id']));
					}else{
						echo 'fail';	  		//支付状态fail失败
					}
			}else{						//验证失败
				echo 'Sign校验失败';		
			}
	   }else{
		   echo "fail";
	   }
   }
	
	public function open(){
		$arr=(new Api)->haoma();
		return json($arr);
	}
	public function kaijiang(){
		(new Api)->opend();
	}
}