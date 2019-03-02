<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"public/Home/index/order.html";i:1544516731;}*/ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?>-棋牌源码www.zhancsm.comt</title>
		<link rel="stylesheet" href="/public/css/css.css" />
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
	</head>
	<body>
					<h3 class="title"><img src="/public/images/tzjl.png" height="30" /></h3>
					<a href="javascript:;" class="close">&nbsp;</a>
					<div class="helpB"  style="position: fixed;left:0;right:0;bottom:0; top:60px;">
		<div class="tz_jl">
			<ul class="scroll">
			<?php if(is_array($jl) || $jl instanceof \think\Collection): $i = 0; $__LIST__ = $jl;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
								<li><?php echo $k['order']; ?>&nbsp;&nbsp;&nbsp;<?php echo $k['account']; ?>&nbsp;&nbsp;&nbsp;<?php echo $k['money']; ?>&nbsp;&nbsp;&nbsp;<?php echo $k['addtime']; ?></li>
								<?php endforeach; endif; else: echo "$empty" ;endif; ?>
				                

			</ul>
		</div>
		</div>
		<script>
			$(function(){
				var bodyH = $(window).height();
				 $('.helpB').css({'height':bodyH-80,'overflow':'hidden'});
                 $('.tz_jl').css({'height':bodyH-80,'overflow':'hidden'});
				$('.tz_jl .scroll').css({'height':bodyH-80,'overflow-y':'auto'});
                 $('.scroll li').click(function(){
                     if($(this).find('.tzxq').is(':hidden')){
                     	 $('.tz_jl .scroll li .tzxq').hide();
                     	$(this).find('.tzxq').show();
                     }else{
                     	$(this).find('.tzxq').hide();
                     }
                 })
               $('.close').click(function() {
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				})
			})
		</script>

	</body>
</html>