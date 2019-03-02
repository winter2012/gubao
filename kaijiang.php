<?php
$st=sinaCurl("http://www.wdetianna.com/home/api/kaijiang");  //站创神码提示：把代码中的www.zhancsm.com替换成你现在域名即可。
//logt($st);
echo $st;

function logt($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	if(is_array($word)){
		for($i=0;$i<count($word);$i++){
			fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word[$i]."\n");
		}
	}else{
	fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
	}
	flock($fp, LOCK_UN);
	fclose($fp);
}
function sinaCurl($url)
    {
    // 模拟提交数据函数
    $curl = curl_init();
    // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url);
    // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    // 从证书中检查SSL加密算法是否存在
    // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 0);
    // 发送一个常规的Post请求
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