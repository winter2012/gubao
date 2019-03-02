<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"public/Home/index/paihang.html";i:1544516742;}*/ ?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?>-棋牌源码www.zhancsm.com</title>
		<link rel="stylesheet" href="/public/css/css.css" />
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
	</head>

	<body>
		
		<h3 class="title"><img src="/public/images/phb.png" height="40" /></h3>
		<a href="javascript:;" class="close">&nbsp;</a>
		<div class="phbBox">
			<div class=" phbBj">
				<div class="line clear_fn">
				<div class="fl yjb">
					<p>佣金榜</p>
					<ul>
						<li><span>名次</span><span>ID</span></li>
                        <?php if(is_array($p[0]) || $p[0] instanceof \think\Collection): $i = 0; $__LIST__ = $p[0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>						
						<li><span></span><span><?php echo $k; ?></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>						
											</ul>
				</div>
				<div class="fl xzb">
					<p>下注榜</p>
					<ul>
						<li><span>名次</span><span>ID</span></li>
                         <?php if(is_array($p[1]) || $p[1] instanceof \think\Collection): $i = 0; $__LIST__ = $p[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>						
						<li><span></span><span><?php echo $k; ?></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>						
											</ul>
				</div>
				</div>
			</div>
			<div class="phsm">				
			说明：排行榜每天0点更新和结算。排名第一奖励100分，第二奖励60分，第三奖励30分，第四到第十奖励10分，0点结算后立刻发放。活动倍率是指结算时奖励将会乘上对应的倍数。请关注相关活动。
			</div>
		</div>
		<script>
			$(function(){
					$('.close').click(function() {
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				})
			})
		</script>
	</body>

</html>