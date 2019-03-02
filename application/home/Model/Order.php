<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Order extends Model{
	public function order(){
		$list=$this->where(['user'=>session("userid")])->order("id desc")->select();
		$arr=['big'=>"大","small"=>"小","w1"=>"111","w6"=>"666","w2"=>"222","w3"=>"333","w4"=>"444","w5"=>"555","s1"=>"123","s2"=>"234","s3"=>"345","s4"=>"456",
		'n4'=>4,'n5'=>5,'n6'=>6,'n7'=>7,'n8'=>8,'n9'=>9,'n10'=>10,'n11'=>11,'n12'=>12,'n13'=>13,'n14'=>14,'n15'=>15,'n16'=>16,'n17'=>17];
		foreach($list as $k=>$v){
			$list[$k]['account']=$arr[$v['account']];
		}
		return $list;
	}
	public function sli($term,$jx){
		$sum=$this->where(['term'=>$term,'state'=>0])->sum("money");
		echo iconv('utf-8','gbk',"总下注金额".$sum."\n");
		       $this->where(['term'=>$term,'state'=>0,'account'=>array('not in',$jx)])->setField("state",1);
			   $con=(new Config)->where(['id'=>1])->find();
			    if($con['yjtype']==2){
					 $list=$this->where(['term'=>$term,'account'=>array('not in',$jx)])->select();
					 foreach($list as $k=>$v){
				         (new User)->yjff($v['user'],$v['money']);
					 }
			    }
		return $this->where(['term'=>$term,'state'=>0,'account'=>array('in',$jx)])->select();
		
	}
}