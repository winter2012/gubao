<?php
$ret['sdk']="4529cffb69f264972cd83d4255"; // 商户ID
$ret['record']="C".date("YmdHis");
$ret["money"]=0.02; // 订单号
$ret["refer"]="http://localhost"; // 交易金额
$ret["notify_url"]="http://localhost"; // 交易时间
$sign = sign($ret['money'], $ret['record'], $ret['sdk']);
$ret['sign']=$sign;
echo vpost("http://pay.368ys.cn/jk/", $ret);		
function sign($money, $record, $sdk) {
    $sign = md5(floatval($money) . trim($record) . $sdk);
    return $sign;
}	
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
?>