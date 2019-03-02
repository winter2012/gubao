<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:27:"public/Home/index/kefu.html";i:1544516358;}*/ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?>-棋牌源码www.zhancsm.com</title>
		<link rel="stylesheet" href="/public/css/css.css" />
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
	</head>
	<body>
	
	<h3 class="title"></h3>
					<a href="javascript:;" class="close">&nbsp;</a>
			<div class="helpB"  style="position: fixed;left:0;right:0;bottom:0; top:60px;">
					
				
		<div style="margin:auto;text-align:center">
			<img src="/public/uploads/<?php echo $config['kefu']; ?>" width="280px">
		</div>
		</div>
		<script>
			$(function(){
				var bodyH = $(window).height();
				 $('.helpB').css({'height':bodyH-80,'overflow':'hidden'});
                 $('.help').css({'height':bodyH-85,'overflow-y':'auto'});
				
                $('.close').click(function() {
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				})
			})
		</script>

	</body>
</html>