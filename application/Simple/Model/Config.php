<?php
namespace app\Simple\Model;
use think\Model;
use think\Request;

class Config extends Model{
	public function pl(){
		$arr=['big'=>"大","small"=>"小","w1"=>"111","w6"=>"666","w2"=>"222","w3"=>"333","w4"=>"444","w5"=>"555","s1"=>"123","s2"=>"234","s3"=>"345","s4"=>"456",
		'n4'=>4,'n5'=>5,'n6'=>6,'n7'=>7,'n8'=>8,'n9'=>9,'n10'=>10,'n11'=>11,'n12'=>12,'n13'=>13,'n14'=>14,'n15'=>15,'n16'=>16,'n17'=>17];
		return $arr;
	}
}