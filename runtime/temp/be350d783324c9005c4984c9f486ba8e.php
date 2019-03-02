<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:29:"public/Home/index/access.html";i:1544516713;}*/ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?>-佣金记录棋牌源码www.zhancsm.com</title>
		<link rel="stylesheet" href="/public/css/css.css" />
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
		<script type="text/javascript" src="/public/js/layer.js"></script>
	</head>
	<body>
		
		<h3 class="title"><img src="/public/images/yjjl.png" height="30" /></h3>
		<a href="javascript:;" class="close">&nbsp;</a>
		<div class="yuE">
			<p class="money"><?php echo $syj; ?></p>
			<p>您的佣金（元）</p>
			<p><a href="javascript:;"  class="tiqu">提现</a></p>
		</div>
		<div class="xiaxian">
			<h3 class='xxBt'>我的下线<span>（数据每分钟更新，不影响实际收入）</span></h3>
			<ul class='xxList clear_fn grade'>
				<li>
					<p>一级</p>
					<p class="num"><?php echo $ret[0]; ?></p>
				</li>
				<li>
					<p>二级</p>
					<p class="num"><?php echo $ret[1]; ?></p>
				</li>
				<li>
					<p>三级</p>
					<p class="num"><?php echo $ret[2]; ?></p>
				</li>
				<li>
					<p>四级</p>
					<p class="num"><?php echo $ret[3]; ?></p>
				</li>
				<li>
					<p>五级</p>
					<p class="num"><?php echo $ret[4]; ?></p>
				</li>
			</ul>
		</div>
		<div class="yjxx">
			<h3 class='txBt'>历史总佣金<span>（最新20条）</span></h3>
			<div class="scroll">
				<ul>
					<?php if(is_array($yj) || $yj instanceof \think\Collection): $i = 0; $__LIST__ = $yj;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
					<li><?php echo $k['account']; ?>&nbsp;&nbsp;&nbsp;<?php echo $k['money']; ?>&nbsp;&nbsp;&nbsp;<?php echo $k['addtime']; ?> </li>
                    <?php endforeach; endif; else: echo "$empty" ;endif; ?>					
				</ul>
			</div>
		</div>
		<script>
			$(function(){
				var bodyH = $(window).height();
				var tqyj = $('.yuE').outerHeight();
				var xiaX=$('.xiaxian').outerHeight();
				var yjxxH=bodyH-tqyj-xiaX-120;
				$('.yjxx').css({height:yjxxH});
				$('.yjxx .scroll').css({height:yjxxH-40});
				$('.yjxx .scroll li:odd').addClass('odd');
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
     overscroll(document.querySelector('.scroll'));
	document.body.addEventListener('touchmove', function(evt) {
		if(!evt._isScroller) {
			evt.preventDefault()
		}
	})
					$(".tiqu").click(function(){
				      $.post("<?php echo U('pay/pay_getTransferCount'); ?>",{r:Math.random(),playType:2},function(data){
					  if(data.code>0){
						layer.confirm('<style>.layui-layer-btn a{font-size:12px;}</style>你今天剩余提现次数<span>'+data.code+'</span>次！', {btn: ['提现','取消']},
							function(){
							$.post("<?php echo U('pay/withdrawCash'); ?>",
								{r:Math.random(),playType:2,transferType:1},function(data){
									if(data.code==0){
										layer.msg('已提现到微信零钱！', {icon: 1});
										$("#amount").html('0.00');
									}else{
										layer.msg(data.msg);
									}
								},'json');
							//window.location.href="<?php echo U('pay/withdrawCash',['r'=>time(),'playType'=>1]); ?>";
							}
							, function(){
								layer.msg('已取消');
							}
							);
							}else{
							   layer.msg('今日提现不足，请明日再提现');
							}
						},'json')
	 
				});
				$('.close').click(function() {
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				})
			})
			function updateMyDownlist(){
				var url = "<?php echo U('pay/ajax_mydownlistx'); ?>";
				$.get(url, {r:Math.random()}, function(res ) {
					if(res.ret == 0) {
						data = res.data;
						$(".grade li:nth-child(1) > .num").text(data.down1_cnt)
						$(".grade li:nth-child(2) > .num").text(data.down2_cnt)
						$(".grade li:nth-child(3) > .num").text(data.down3_cnt)
						$(".grade li:nth-child(4) > .num").text(data.down4_cnt)
						$(".grade li:nth-child(5) > .num").text(data.down5_cnt)
						
					}
				}); 
			}

			updateMyDownlist();
		</script>
		
	</body>
</html>