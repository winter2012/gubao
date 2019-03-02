<?php
namespace app\Home\Model;
use think\Model;
use think\Cookie;

class Api extends Model{
	Protected $autoCheckFields = false;
	
	public function newx(){
		$qw=(new Opend)->order("id desc")->find();
		$num=explode(",",$qw['num']);
		$r=array();
		$p=array();
		for($i=1;$i<68;$i++){
			$p[$i]=rand(1,150);
			$rr=array(array("0"=>rand(0,5),"1"=>rand(0,25)),array("0"=>rand(0,5),"1"=>rand(0,25)),array("0"=>rand(0,5),"1"=>rand(0,25)),array("0"=>rand(0,5),"1"=>rand(0,25)));
			$r[$i]=array_slice($rr,mt_rand(0,2));
		}
		$money=(new User)->where(['id'=>session("userid")])->value("money");
		$arr=['infodat' => ['amount' =>(float)$money,'available_amount' => 0, 'ids' => session("userid")],'ret' => 0,'kj_ing' => 1, 'data' => [ 'left_seconds' => $qw['addtime']+40-time(), 
		 'phase' => time(),
		 'jqr' =>['p'=>$p,'j' => $r],
		 'last' => [ 'id' =>$qw['id'] , 'issueNo' => $qw['term'], 'fenqian' => 1, 'a1' => $num[0], 'a2' => $num[1], 'a3' => $num[2] ,'status' => 1 ,'startBetDate' => $qw['addtime'] ,'endBetDate' => $qw['addtime']+40, 'openDate' => time()+41 ]]];
		 $jqr=serialize($arr['data']['jqr']);
		 $arr['data']['last']['jqr']=$jqr;
		 return $arr;
	}
	public function haoma(){
		$qw=(new Opend)->order("id desc")->find();
		$code=explode(",",$qw['num']);
		$arr=["ret"=>0,"data"=>["number"=>[(int)$code[0],(int)$code[1],(int)$code[2]],"asum"=>$code[0]+$code[1]+$code[2],"astr"=>$this->check($code),"phase"=>time()]];
		return $arr;
	}
	private function renshu(){
		$shu=10;
		if(date("H")>1 && date("H")<10){
			$shu=20+$this->jiajian();
		}
		if(date("H")>9 && date("H")<14){
			$shu=50+$this->jiajian();
		}
		if(date("H")>13 && date("H")<16){
			$shu=100+$this->jiajian();
		}
		if(date("H")>19 && date("H")<24){
			$shu=300+$this->jiajian();
		}
		
		return $shu;
	}
	private function jiajian(){
		if(mt_rand(1,100)>20){
			return mt_rand(1,10);
		}else{
			return mt_rand(-10,-1);
		}
	}
	
	public function opend(){
		$qw=(new Opend)->order("id desc")->find();
		if(time()-$qw['addtime']>39){
			echo iconv('utf-8','gbk',"----------------------------------正在开奖------------------------------------\n");
			$qw=(new Opend)->order("id desc")->find();
			$xzqi=date("YmdHi");
			$code=$this->mares($qw['term']+1);
			$qihao=$qw['term']+1;
			$shifou=(new Opend)->where(['term'=>$qihao])->find();
			$sun=array_sum($code);
			if(!$shifou){
				$ar['term']=$qihao;
				$ar['account']=$this->check($code);
				$ar['addtime']=time();
				$ar['num']=$code[0].",".$code[1].",".$code[2];
				(new Opend)->save($ar);
			}
			$this->jiesuan($qihao,$code);
			echo iconv('utf-8','gbk',"第".$qihao."期  开奖时间".date("Y-m-d H:i:s")."  开奖号码:".$code[0]."+".$code[1]."+".$code[2]."=".$sun."\n");
		}
	}
	private function jiesuan($qihao,$code){
		$res=$this->jtype($code);
		$order=new Order;
		$list=$order->sli($qihao,$res);
		$arr=array();
		$user=new User;
		$con=(new Config)->where(['id'=>1])->find();
		$zzj=0;
		foreach($list as $k=>$v){
			$price=$v['money']*($con[$v['account']]+1);
			$arr[$k]=array('id'=>$v['id'],'state'=>1,'zj'=>$price);
			$user->where(['id'=>$v['user']])->setInc("money",$price);
			$zzj=$zzj+$price;
		}
		$order->saveAll($arr);
		echo iconv('utf-8','gbk',"总中奖金额".$zzj."\n");
	}
	
	private function jtype($code){
		$s="";
		if(is_array($code)){
			$sum=array_sum($code);
			if($code[0]==$code[1] && $code[0]==$code[2]){
				switch($sum){
					case 3:
					$s.=",w1";
					break;
					case 6:
					$s.=",w2";
					break;
					case 9:
					$s.=",w3";
					break;
					case 12:
					$s.=",w4";
					break;
					case 15:
					$s.=",w5";
					break;
					case 18:
					$s.=",w6";
					break;
				}
			}else{
				$s=$sum>10?"big":"small";
			    sort($code);
				if($code[0]+1==$code[1] && $code[1]+1==$code[2]){
					switch($sum){
						case 6:
						$s.=",s1";
						break;
						case 9:
						$s.=",s2";
						break;
						case 12:
						$s.=",s3";
						break;
						case 15:
						$s.=",s4";
						break;
					}
				}
				if($sum>3 && $sum<18){
					$s.=",n".$sum;
				}
			}
			
			return $s;
		}
	}
	//判断 大小 
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
	//选出最多
	private function mares($qi){
		$o=new Order;
		$arr=['big',"small","w1","w6","w2","w3","w4","w5","s1","s2","s3","s4",'n4','n5','n6','n7','n8','n9','n10','n11','n12','n13','n14','n15','n16','n17'];
		$dx=array();
		$baozi=array();
		$sunz=array();
		$szx=array();
		$szd=array();
		$szxl=array();
		$szdl=array();
		for($i=0;$i<count($arr);$i++){
			 $money=$o->where(['term'=>$qi,"account"=>$arr[$i]])->sum("money");
			 $pl=$this->pl($arr[$i]);
			 if($i<=1){
			   $dx[$arr[$i]]=$money*$pl;
			 }elseif($i>=2 && $i<=7){
				 $baozi[$arr[$i]]=$money*$pl;
				 if($money*$pl==0){
					   $baz[$arr[$i]]=0;
				     }
			 }elseif($i>=8 && $i<=11){
				 $sunz[$arr[$i]]=$money*$pl;
			 }elseif($i>11){
				 if($i<18){
				    $szx[$arr[$i]]=$money*$pl;
					if($money*$pl==0){
					   $szxl[$arr[$i]]=0;
				     }
				 }else{
					 $szd[$arr[$i]]=$money*$pl;
					 if($money*$pl==0){
					   $szdl[$arr[$i]]=0;
				     }
				 }
				 
			 }
		}
		//print_r($dx);
		//print_r($baozi);
		//print_r($sunz);
		//print_r($szx);
		//print_r($szd);
		$dianshu=0;	
		$d1=$dx['big']+array_sum($szd);
		$d2=$dx['small']+array_sum($szx);
		if($d1==$d2 && $d1==0){
			$baoz=[mt_rand(1,6),mt_rand(1,6),mt_rand(1,6)];
			//$baoz=[3,4,5];
		}else{
			if($d1>$d2){
				if(count($szxl)>0){
					$jg=array_rand($szxl,1);
				}else{
					$jg=array_search(min($szx),$szx);
				}
				$dianshu=min($szx);
			}elseif($d1==$d2){
				if(count($baz)>0){
					$jg=array_rand($baz,1);
				}else{
					if(count($szxl)>0 && count($szdl)>0){
						$rta=array_merge($szxl,$szdl);
						shuffle($rta);
						$jg=array_rand($rta,1);
					}else{
						if(count($szxl)>0){
							$jg=array_rand($szxl,1);
						}elseif(count($szdl)>0){
							$jg=array_rand($szdl,1);
						}else{
							$hdx=array_merge($szx,$szd);
							$jg=array_search(min($hdx),$hdx);
							$dianshu=min($hdx);
						}
					}
				}
			}else{
				if(count($szdl)>0){
					$jg=array_rand($szdl,1);
				}else{
					 $jg=array_search(min($szd),$szd);
				}
				$dianshu=min($szd);
			}
			$baoz=$this->kaij($jg,$baozi,$sunz,$dianshu);
		}
		return $baoz;
	}
	//获取赔率
	private function pl($n){
		$fl=(new Config)->where(['id'=>1])->value($n);
		return $fl+1;
	}
	//能不能开豹子0 不是  1开豹子  2开顺子
	public function kaij($jg,$arr,$sunz,$dianshu){
		if(array_search(min($arr),$arr)=="w1" && min($arr)<$dianshu){
				$a=[1,1,1];
			}elseif(array_search(min($arr),$arr)=="w6" && min($arr)<$dianshu){
				$a=[6,6,6];
			}else{
				switch($jg){
					case "n6":
					 if($arr['w2']>$sunz['s1'] || $arr['w2']==0){
						 $a=$this->suij(6);
					 }else{
						 $a=[2,2,2];
					 }
					break;
					case "n9":
					if($arr['w3']>$sunz['s2'] || $arr['w3']==0){
						 $a=$this->suij(9);
					 }else{
						$a=[3,3,3];
					 }
					break;
					case "n12":
					if($arr['w4']>$sunz['s3'] || $arr['w4']==0){
						 $a=$this->suij(12);
					 }else{
						 $a=[4,4,4];
					 }
					break;
					case "n15":
					if($arr['w5']>$sunz['s4'] || $arr['w5']==0){
						$a=$this->suij(15);
					 }else{
						 $a=[5,5,5];
					 }
					break;
					case "n4":
					 $a=$this->suij(4);
					break;
					case "n5":
					 $a=$this->suij(5);
					break;
					case "n7":
					 $a=$this->suij(7);
					break;
					case "n8":
					 $a=$this->suij(8);
					break;
					case "n10":
					 $a=$this->suij(10);
					break;
					case "n11":
					 $a=$this->suij(11);
					break;
					case "n13":
					 $a=$this->suij(13);
					break;
					case "n14":
					 $a=$this->suij(14);
					break;
					case "n16":
					 $a=$this->suij(16);
					break;
					case "n17":
					 $a=$this->suij(17);
					break;
                    default:
                      	switch($jg){
							case "w1":
							 $a=[1,1,1];
							break;
							case "w2":
							 $a=[2,2,2];
							break;
							case "w3":
							 $a=[3,3,3];
							break;
							case "w4":
							 $a=[4,4,4];
							break;
							case "w5":
							 $a=[5,5,5];
							break;
							case "w6":
							 $a=[6,6,6];
							break;
						}							
				}
		}
		return $a;
	}
	//随机3个数 总和不变
	private function suij($n){
		if($n>13){
			$a1=mt_rand($n-12,6);
			$a2=mt_rand($n-$a1-6,6);
		}elseif($n>8 && $n<=13){
			$a1=mt_rand(1,6);
			if($n-$a1>7){
				$ma=6;
				$a2=mt_rand($n-$a1-6,$ma);
			}else{
				$ma=$n-$a1-1;
				$a2=mt_rand(1,$ma);
			}
		}else{
			$a1=mt_rand(1,$n/3);
			$a2=mt_rand(1,$n-$a1-1);
		}
		$a3=$n-$a1-$a2;
	  return array($a1,$a2,$a3);
	}
	
}