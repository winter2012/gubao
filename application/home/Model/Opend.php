<?php
namespace app\Home\Model;
use think\Model;
use think\Request;

class Opend extends Model{
	public function term(){
		$term=$this->order("id desc")->value("term");
		return $term+1;
	}
}