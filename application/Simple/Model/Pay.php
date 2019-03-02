<?php
namespace app\Simple\Model;
use think\Model;

class Pay extends Model{
	public function Glist(){
			return $this->order("id desc")->paginate(20);
		}
	public function delorder($id){
		$o=$this->where(array('id'=>$id))->delete();
		if($o){
			$msg=array('code'=>1,'msg'=>"删除成功");
		}else{
			$msg=array('code'=>0,'msg'=>"删除失败");
		}
		return $msg;
	}
}