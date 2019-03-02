<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"public/Home/index/daili.html";i:1544516377;}*/ ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?>-棋牌源码www.zhancsm.com</title>
		<link rel="stylesheet" href="/public/css/css.css" />
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
		<script type="text/javascript" src="/public/js/layer.js"></script>
	</head>

	<body>
		<h3 class="title"><img src="/public/images/daili.png" height="30" /></h3>
		<a href="javascript:;" class="close">&nbsp;</a>
		<div class="daili">
		
			<p class="shuoming">
				邀请好友将获得佣金奖励，好友消费越高，佣金越高，永久有效！您的每笔佣金收益都将计入佣金榜，每日排行前10的用户将获得额外大奖
			</p>
			<div class="yjgz">
				<p>平台设有5级分佣机制！你的下线每次下注，你分别可以获得来自一级下线下注金额的5%、二级下线的3%、三级下线的2%、四级下线的1%、五级下线的1%；你获得的佣金实时进入你的账户！发展的下线越多， 你就能获得更多的金币！</p>
				<table width="100%">
					<tr>
						<td >下线</td>
						<td>一级</td>
						<td>二级</td>
						<td >三级</td>
						<td >四级</td>
						<td >五级</td>
					</tr>
					<tr>
						<td>下注</td>
						<td><?php echo $config['ss0']; ?>%</td>
						<td><?php echo $config['ss1']; ?>%</td>
						<td><?php echo $config['ss2']; ?>%</td>
						<td><?php echo $config['ss3']; ?>%</td>
						<td><?php echo $config['ss4']; ?>%</td>
					</tr>
				</table>
			</div>
		
			<p class='hqewm'><span id="ewm">获取推广二维码</span></p>

			
		</div>
		<script>
			$(function() {
					//禁止下拉
	var overscroll = function(el) {
		el.addEventListener('touchstart', function() {
			var top = el.scrollTop,
				totalScroll = el.scrollHeight,
				currentScroll = top + el.offsetHeight

			if(top === 0) {
				el.scrollTop = 1
			} else if(currentScroll === totalScroll) {
				el.scrollTop = top - 1
			}
		})
		el.addEventListener('touchmove', function(evt) {

			if(el.offsetHeight < el.scrollHeight)
				evt._isScroller = true
		})
	}
//	overscroll(document.querySelector('.money'));
	document.body.addEventListener('touchmove', function(evt) {
		if(!evt._isScroller) {
			evt.preventDefault()
		}
	})


				$('#ewm').on('click', function() {
					parent.layer.open({
						type: 2,
						title: false,
						shadeClose: true,
						style:'position:fixed;',
						closeBtn: 0,
						shade: 0.8,
						scrollbar: false,
						area: ['100%', '100%'],
						content: '/index.php/home/index/dlewm',
						success:function(layero,index){
							
						}
					});
				})
	$('.close').click(function() {
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				})

			})
		</script>
	</body>

</html>