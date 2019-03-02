<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Paihang extends Model{
	public function ph(){
		$list=$this->whereTime("addtime","d")->value("count");
		if(!$list){
			$a=array();
			$b=array();
			for($i=0;$i<20;$i++){
				if($i<10){
				    $a[$i]=rand(1,50);
				}else{
					$b[$i-10]=rand(1,50);
				}
			}
			$list=serialize([$a,$b]);
			$this->save(['count'=>$list,'addtime'=>date("Y-m-d H:i:s")]);
		}
		return $list;
	}
}