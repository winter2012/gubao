<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Config;

function vpost($url, $data = array()) {// 模拟提交数据函数
    $curl = curl_init();
    // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url);
    // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 1);
    // 发送一个常规的Post请求
    @curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    // Post提交的数据包
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0);
    // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // 获取的信息以文件流的形式返回
    $tmpInfo = curl_exec($curl);
    // 执行操作
    if (curl_errno($curl)) {
        echo 'Errno' . curl_error($curl);
        //捕抓异常
    }
    curl_close($curl);
    // 关闭CURL会话
    return $tmpInfo;
    // 返回数据
}
function chaxun($url,$order){
	$res=vpost($url, array('order'=>$order));
	return json_decode($res,true);
}
function xz($n){
   $arr=['big'=>"大","small"=>"小","w1"=>"111","w6"=>"666","w2"=>"222","w3"=>"333","w4"=>"444","w5"=>"555","s1"=>"123","s2"=>"234","s3"=>"345","s4"=>"456",
		'n4'=>4,'n5'=>5,'n6'=>6,'n7'=>7,'n8'=>8,'n9'=>9,'n10'=>10,'n11'=>11,'n12'=>12,'n13'=>13,'n14'=>14,'n15'=>15,'n16'=>16,'n17'=>17];
		return $arr[$n];
}
function createLinkstring($para) {
		$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".$val."&";
	}
	//去掉最后一个&字符
	$arg = substr($arg,0,count($arg)-2);
	
	//如果存在转义字符，那么去掉转义
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
	}
    /*去掉字符空值*/
	function paraFilter($para){
		$para_filter = array();
		while (list ($key, $val) = each ($para)){
			if($key == "sign")continue;
			else
				$para_filter[$key] = $para[$key];
			}
			return $para_filter;
			}
   /*数组排序*/
   function argSort($para){
	   ksort($para);
	   reset($para);
	   return $para;
	   }
   function md5Verify($prestr,$sign=null,$key) {
	   $para=paraFilter($prestr);
	   $parm=argSort($para);
	   $prestr=createLinkstring($parm);
	   $prestr = $prestr.$key;
	   $mysgin = md5($prestr);
	   if($sign==null){
		   return $mysgin;
	   }else{
	   if($mysgin == $sign) {
		   return true;
		   }else{
			   return false;
			   }
	   }
	  }
 function blsend($para, $method, $button_name,$url) {
			$sHtml = "<form id='blpaysubmit' name='blpaysubmit' action='".$url."' method='".$method."'>";
			while (list ($key, $val) = each ($para)) {
				$sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
			}
			$sHtml = $sHtml."<input type='submit' style='border:none;width:200px;height:35px;line-height:35px;background:none;font-size:18px;' value='".$button_name."'></form>";
			$sHtml = $sHtml."<script>document.forms['blpaysubmit'].submit();</script>";
			return $sHtml;
	}
 function getIp() { 
     if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
         $ip = getenv("HTTP_CLIENT_IP"); 
     else 
         if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
             $ip = getenv("HTTP_X_FORWARDED_FOR"); 
         else 
             if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
                 $ip = getenv("REMOTE_ADDR"); 
             else 
                 if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
                     $ip = $_SERVER['REMOTE_ADDR']; 
                 else 
                     $ip = "unknown"; 
     return ($ip); 
 }
 
 
 
 //判断是不是微信浏览器请求
function isWeixin(){

  if(stripos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') === false){ 
     return false; 
  }else{ return true; }

}
 
 function pay_order($dingdanzhui=''){
	return $dingdanzhui.time().substr(microtime(),2,6).rand(0,3);
}
 