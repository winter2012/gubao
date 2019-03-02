<?php
namespace app\Simple\Model;
use think\Model;

class Order extends Model{
	public function appda($ti){
		$cz=(new Pay)->whereTime('addtime', 'between', [$ti, date('Y-m-d',strtotime("+1 days",strtotime($ti)))])->where(['status'=>1])->sum("price");
		$tx=(new Withdraw)->whereTime('addtime', 'between', [$ti, date('Y-m-d',strtotime("+1 days",strtotime($ti)))])->where(['status'=>1])->sum("money");
		return $cz-$tx;
	}
	public function succ($ti){
		return (new Pay)->whereTime('addtime', 'between', [$ti, date('Y-m-d',strtotime("+1 days",strtotime($ti)))])->where(['status'=>1])->sum("price");
	}
	public function sunn($ti){
		return (new Withdraw)->whereTime('addtime', 'between', [$ti, date('Y-m-d',strtotime("+1 days",strtotime($ti)))])->where(['status'=>1])->sum("money");
	}
	public function Getall($type){
		if(empty($type)){
			$type=99;
		}
		switch($type){
			case 1:
			 $map['state']=0;
			 break;
			case 2:
			 $map['state']=1;
			 break;
			case 3:
			 $map['state']=2;
			break;
			default:
			 $map="1=1";
		}
		$ok=$this->where($map)->order("id desc")->paginate(20,true,['query'=>['state'=> $type]])->each(function($item, $key){
               $item->knum = (new Opend)->where(['term'=>$item->term])->value('num');
            });
		return $ok;
	}

}