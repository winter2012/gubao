<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"public/Home/index/wanfa.html";i:1544516695;}*/ ?>

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
	
	<h3 class="title"><img src="/public/images/wanfa.png" height="30" /></h3>
					<a href="javascript:;" class="close">&nbsp;</a>
			<div class="helpB"  style="position: fixed;left:0;right:0;bottom:0; top:60px;">
					
				
		<div class="help">
			<h3>棋牌源码www.zhancsm.com</h3>
			<div class="nr">
				<p>1)进入游戏后,本局还在下注的倒计时情况下可以参与本局游戏,如果进入时是在开奖的倒计时情况下等待本局游戏结束后参与游戏;</p>
				<p>2)游戏开始后,玩家开始下注,点击桌面代表多个骰子组合结合的区域投入筹码,下注时间为30秒;</p>
				<p>3)下注时间结束后,所有玩家不能继续下注,庄家开启骰盅后显示结果;</p>
				<p>4)根据开启骰盅的结果,对应桌面上的区域,玩家押中的区域会赢得庄家给予的对应赔率的筹码,没有押中区域的筹码,归庄家所有。</p>
			</div>		
			<h3>下注区域</h3>
			<div class="nr">
				<p>下注区域包括:</p>
				<p>大:总点数11至17(围骰通吃)</p>
				<p>小:总点数4至10(围骰通吃)</p>
				<p>围骰:3颗骰子都一样(也叫豹子)</p>
				<p>任意顺子:3个骰子分别为:123、234、345、456</p>
				<p>点数:分别为4、5、6、7、8、9、10、11、12、13、14、15、16、17</p>
				<p>总共26个下注区域。</p>
			</div>		
			<h3>赔率：</h3>
			<div class="nr">
			<p>赔率分别为:大(1赔1),小(1赔1),围骰(1赔180),顺子(1赔30),数字4(1赔50),数字5(1赔18),数字6(1赔14),数字7(1赔12),数字8(1赔8),数字9(1赔6),数字10(1赔6),数字11(1赔6),数字12(1赔6),数字13(1赔8),数字14(1赔12),数字15(1赔14),数字16(1赔18),数字17(1赔50)。</p>
			</div>	
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