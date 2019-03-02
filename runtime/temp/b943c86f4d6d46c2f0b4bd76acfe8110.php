<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"public/Home/index/index.html";i:1544500370;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<title><?php echo $config['webname']; ?></title>
		<link href="/public/css/index.css?v=110"  rel="stylesheet" type="text/css"/>
		<script>
			(function(doc, win) {
			
				var docEl = doc.documentElement,
					resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
					recalc = function() {
						var clientWidth = docEl.clientWidth;
						if(!clientWidth) return;
						if(clientWidth >= 640) {
							docEl.style.fontSize = '100px';
						} else {
							docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
						}
					};
				if(!doc.addEventListener) return;
				win.addEventListener(resizeEvt, recalc, false);
				doc.addEventListener('DOMContentLoaded', recalc, false);
			})(document, window);
		</script>
	</head>

	<body>
		<div id="loading" class="loading">
			<div class="gi"></div>
			<div class="jdt">
				<div class="jdB">
					<p class="jd"></p>
					<p class="bfb" id="percentShow"></p>
				</div>
			</div>
		</div>
		<!--加载页 end-->

		<div class="container">
			<div class="shaigu" id="shaigu">
				<div class="di">
					<div class='se1' id='se1'></div>
					<div class='se2' id='se2'></div>
					<div class='se3' id='se3'></div>
				</div>
				<div class="gai"></div>
			</div>
			<!--摇色子 end-->
				<div class="jilu">
						<ul class='jlList'>
							
						</ul>
						<p class='zsBtn'><span></span></p>
						<p class='zsBtn1' style="display:none"><span></span></p>
					</div>
					<!--记录 end-->
			<header>
				<div class="gonggao" id='gg'>
					<div id="noticeList" class="noticeList" style=""><?php echo $config['webname']; ?>祝各位老板玩的开心.刷佣金封ID.刷佣金封ID.刷佣金封ID!!！</div>
				</div>
				<div class="yhxx">
					<div class="fr">
						<span class="chongzhi" id="chongZhi">充值</span>
						<span class="duihuan" id="dihuan2">兑换</span>
					</div>
					<div class='fl'>
						<span class="userId">ID:
                            <em id='userId'></em>
                        </span>
						<span class="amount">
                            <em id='amount'></em>
                        </span>
					</div>
				</div>
				<div class="mv"></div>
				
				<div class="hBox clearfix">
				
					<div class="fr">
						<div class='countdown betting_countdown' id="betting_countdown" style="margin-top:0.35rem">
							<div class="time betting_time" style="padding-top:2px;">

							</div>
						</div>
						<!--下注倒计时 end-->
						<div class="countdown award_countdown" id="award_countdown" style="display:none">
							<div class="time award_time">

							</div>
						</div>
						<!--开奖倒计时 end-->
					</div>
				</div>

			</header>
			<div class="wrap">
				<div class="prior_period" id="prior_period">
					
				</div>
				<div class="big_small clearfix">
					<div class="big xiazhu">
						<p class="da"></p>
						<p>点数11-17 围骰通吃</p>
						<p>1:<?php echo $config['big']; ?></p>
					</div>
					<div style="width:40%;border:none;background:none;"></div>
					<div class="small xiazhu" name="small">
						<p class="xiao"></p>
<p>点数4-10 围骰通吃</p>
						<p>1:<?php echo $config['small']; ?></p>
					</div>
				</div>
				<!--大小  end-->
				<div class="leopard clearfix">
					<p class="peiL">围骰 1:<?php echo $config['w1']; ?></p>
					<div class="bz1 xiazhu">
						<p>
							<span class="d_1"></span>
						</p>
						<p>
							<span class="d_1"></span>
							<span class="d_1"></span>
						</p>
					</div>
					<div class="bz2 xiazhu">
						<p>
							<span class="d_2"></span>
						</p>
						<p>
							<span class="d_2"></span>
							<span class="d_2"></span>
						</p>
					</div>
					<div class="bz3 xiazhu">
						<p>
							<span class="d_3"></span>
						</p>
						<p>
							<span class="d_3"></span>
							<span class="d_3"></span>
						</p>
					</div>
					<div class="bz4 xiazhu">
						<p>
							<span class="d_4"></span>
						</p>
						<p>
							<span class="d_4"></span>
							<span class="d_4"></span>
						</p>
					</div>
					<div class="bz5 xiazhu">
						<p>
							<span class="d_5"></span>
						</p>
						<p>
							<span class="d_5"></span>
							<span class="d_5"></span>
						</p>
					</div>
					<div class="bz6 xiazhu">
						<p>
							<span class="d_6"></span>
						</p>
						<p>
							<span class="d_6"></span>
							<span class="d_6"></span>
						</p>
					</div>
				</div>
				<!--豹子 end-->
				<div class="straight clearfix">
					<p class="peiL">顺子 1:<?php echo $config['s1']; ?></p>
					<div class="sz123 xiazhu">
						<p>
							<span class="d_1"></span>
						</p>
						<p>
							<span class="d_2"></span>
							<span class="d_3"></span>
						</p>
					</div>
					<div class="sz234 xiazhu">
						<p>
							<span class="d_2"></span>
						</p>
						<p>
							<span class="d_3"></span>
							<span class="d_4"></span>
						</p>
					</div>
					<div class="sz345 xiazhu">
						<p>
							<span class="d_3"></span>
						</p>
						<p>
							<span class="d_4"></span>
							<span class="d_5"></span>
						</p>
					</div>
					<div class="sz456 xiazhu">
						<p>
							<span class="d_4"></span>
						</p>
						<p>
							<span class="d_5"></span>
							<span class="d_6"></span>
						</p>

					</div>
				</div>
				<!--顺子 end-->
				<div class="number clearfix">
					<div class="N4 xiazhu">
						<p class="num4"></p>
						<p>1:<?php echo $config['n4']; ?></p>
					</div>
					<div class="N5 xiazhu">
						<p class="num5"></p>
						<p>1:<?php echo $config['n5']; ?></p>
					</div>
					<div class="N6 xiazhu">
						<p class="num6"></p>
						<p>1:<?php echo $config['n6']; ?></p>
					</div>
					<div class="N7 xiazhu">
						<p class="num7"></p>
						<p>1:<?php echo $config['n7']; ?></p>
					</div>
					<div class="N8 xiazhu">
						<p class="num8"></p>
						<p>1:<?php echo $config['n8']; ?></p>
					</div>
					<div class="N9 xiazhu">
						<p class="num9"></p>
						<p>1:<?php echo $config['n9']; ?></p>
					</div>
					<div class="N10 xiazhu">
						<p class="num10"></p>
						<p>1:<?php echo $config['n10']; ?></p>
					</div>
					<div class="N11 xiazhu">
						<p class="num11"></p>
						<p>1:<?php echo $config['n11']; ?></p>
					</div>
					<div class="N12 xiazhu">
						<p class="num12"></p>
						<p>1:<?php echo $config['n12']; ?></p>
					</div>
					<div class="N13 xiazhu">
						<p class="num13"></p>
						<p>1:<?php echo $config['n13']; ?></p>
					</div>
					<div class="N14 xiazhu">
						<p class="num14"></p>
						<p>1:<?php echo $config['n14']; ?></p>
					</div>
					<div class="N15 xiazhu">
						<p class="num15"></p>
						<p>1:<?php echo $config['n15']; ?></p>
					</div>
					<div class="N16 xiazhu">
					<p class="num16"></p>
						<p>1:<?php echo $config['n16']; ?></p>
					</div>
					<div class="N17 xiazhu">
						<p class="num17"></p>
						<p>1:<?php echo $config['n17']; ?></p>
					</div>
				</div>
				<!--数子 end-->
				<div id="xzqy">
					<div class="big_small clearfix">
					<div class="xiazhuC" name="big">
					</div>
					<div style="width:40%;border:none;background:none;"></div>
					<div class="xiazhuC" name="small">
					</div>
				</div>
				<!--大小  end-->
				<div class="leopard clearfix">
					<p class="peiL"></p>
					<div class="xiazhuC" name="w1">
					</div>
					<div class="xiazhuC" name="w2">
					</div>
					<div class="xiazhuC" name="w3">
					</div>
					<div class="xiazhuC" name="w4">
					</div>
					<div class="xiazhuC" name="w5">
					</div>
					<div class="xiazhuC" name="w6">
					</div>
				</div>
				<!--豹子 end-->
				<div class="straight clearfix">
					<p class="peiL"></p>
					<div class="xiazhuC" name="s1">
					</div>
					<div class="xiazhuC" name="s2">
					</div>
					<div class="xiazhuC" name="s3">
					</div>
					<div class="xiazhuC" name="s4">
					</div>
				</div>
				<!--顺子 end-->
				<div class="number clearfix">
					<div class="xiazhuC" name="n4">
					</div>
					<div class="xiazhuC" name="n5">
					</div>
					<div class="xiazhuC" name="n6">
					</div>
					<div class="xiazhuC" name="n7">
					</div>
					<div class="xiazhuC" name="n8">
					</div>
					<div class="xiazhuC" name="n9">
					</div>
					<div class="xiazhuC" name="n10">
					</div>
					<div class="xiazhuC" name="n11">
					</div>
					<div class="xiazhuC" name="n12">
					</div>
					<div class="xiazhuC" name="n13">
					</div>
					<div class="xiazhuC" name="n14">
					</div>
					<div class="xiazhuC" name="n15">
					</div>
					<div class="xiazhuC" name="n16">
					</div>
					<div class="xiazhuC" name="n17">
					</div>
				</div>
				<!--数子 end-->
				</div>
			</div>
			<footer>
				<div class="bz clearfix">
					<div class="fr">
						<span class="kefu" id="kefu" >&nbsp;</span>
						<span class="help" id="help">&nbsp;</span>
						<span class="jy" id="shengyin" onclick="shengyin()"></span>
					</div>
					<div class="fl user">
						<span class='txIcon' id="txIcon"></span>
						<span class="people">203</span>
					</div>
					<!--人数 小头像 end-->
				</div>
				<div class="money">
					<ul>
						<li>
							<span class='mon_1' name='5'></span>
						</li>
						<li class="cur">
							<span class='mon_2' name='10'></span>
						</li>
						<li>
							<span class='mon_3' name='50'></span>
						</li>
						<li>
							<span class='mon_4' name='100'></span>
						</li>
						<li>
							<span class='mon_5' name='500'></span>
						</li>
						<li>
							<span class='mon_6' name='1000'></span>
						</li>
					</ul>
				</div>
				<!--下注筹码 end-->
				<ul class="menu clearfix">
					<li class="menu1">
						<span></span>
						<a href="javascript:;">游戏</a>
					</li>
					<li class="menu2" id="tzjl">
						<span></span>
						<a href="javascript:;">投注记录</a>
					</li>
					<li class="menu3" id="yjjl">
						<span></span>
						<a href="javascript:;">佣金记录</a>
					</li>
					<li class="menu4" id="daiLi">
						<span></span>
						<a href="javascript:;">代理</a>
					</li>
					<li class="menu5" id="phb">
						<span></span>
						<a href="javascript:;">排行榜</a>
					</li>
				</ul>
			</footer>

		</div>
		<div class="top-up-box">
			<p class="bj"></p>
			<div class="top-up">
				<a href="javascript:;" class="close">&nbsp;</a>

				<h3><img src="/public/images/chongzhiT.png" height="30" /></h3>
				<div class="top-up-list">
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;10&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?> <a href="javascript:;" onclick="tozf(&#39;10&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>10</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;20&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;20&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>20</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;50&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;50&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>50</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;100&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;100&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>100</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;200&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;200&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>200</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;500&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;500&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>500</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;1000&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;1000&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>1000</i>元</span></p>
					<p>
						<?php if($config['pay'] != '1'): ?><a href="javascript:;" onclick="tozf(&#39;2000&#39;,&#39;4&#39;)">支付宝</a><?php endif; if($config['pay'] != '2'): ?><a href="javascript:;" onclick="tozf(&#39;2000&#39;,&#39;3&#39;)">微信</a><?php endif; ?><span>充值<i>2000</i>元</span></p>
						<div class="czTs">
							备注:微信充值如遇对方账户风险提示,是微信正常提醒,属于正常现象,请放心继续操作!
							<!--本源码由站创神码分享，在使用本源码的过程中，请遵守站创神码www.zhancsm.com/网站的协议。-->
						</div>
				</div>
			</div>
		</div>
		<!--充值 end-->
		<input type="hidden" value="Off" id="off" />
		<input type="hidden" value="" name="phase" id="yyphase" />
		<input type="hidden" id="djstime" name="djstime" value="" />
		
		<form action="<?php echo U('pay/recharge'); ?>" method="post" id="sdfssd">
			<input type="hidden" name="price" id="price" />
			<input type="hidden" name="user" value="<?php echo session('userid'); ?>" />
			<input type="hidden" name="type" id="paytype" value="" />
		</form>
		<script type="text/javascript" src="/public/js/jquery-1.12.3-min.js"></script>
		<script type="text/javascript" src="/public/js/jquery.cookie.js"></script>
		<script type="text/javascript" src="/public/js/jquery.imgpreload.min.js"></script>
		<script type="text/javascript" src="/public/js/imgpreLoad.js"></script>
		<script type="text/javascript" src="/public/js/layer.js"></script>
		<script type="text/javascript" src="/public/js/index.js?v=<?php echo time(); ?>"></script>
		<script type="text/javascript">
			$.fn.textScroll = function() {
				var speed = 60,
					flag = null,
					tt, that = $(this),
					child = that.children();
				var p_w = that.width(),
					w = child.width();
				child.css({
					left: p_w
				});
				var t = (w + p_w) / speed * 1000;

				function play(m) {
					var tm = m == undefined ? t : m;
					child.animate({
						left: -w
					}, tm, "linear", function() {
						$(this).css("left", p_w);
						play();
					});
				}
				child.on({
					mouseenter: function() {
						var l = $(this).position().left;
						$(this).stop();
						tt = (-(-w - l) / speed) * 1000;
					},
					mouseleave: function() {
						play(tt);
						tt = undefined;
					}
				});
				play();
			}
			$("#gg").textScroll();
			
			function getZouShi(){
				$.ajax({
					url:"<?php echo U('api/record'); ?>",
					type:"get",
					data:{r:Math.random()},
					dataType:"json",
					beforeSend:function(){
						//$.dicePop().loadingFun();//加载弹窗
					},
					success:function(res){
						/*关闭加载弹窗*/
						//$.dicePop().closeLoading();
						if(res.ret == 0 ) {
							var data= res.data;
							var recordLen = data.list.length;
							var zsHtml = '';
							for(var i=0;i < recordLen;i++){
									zsHtml += '<li>';
								zsHtml += '<p class="fl">';
									zsHtml += '<span class="d_'+data.list[i].a1+'"></span>';
									zsHtml += '<span class="d_'+data.list[i].a2+'"></span>';
									zsHtml += '<span class="d_'+data.list[i].a3+'"></span>';
								zsHtml += '</p>';
								zsHtml += '<span>'+data.list[i].asum+'</span>';
								zsHtml += '<span>'+data.list[i].astr+'</span>';
							zsHtml += '</li>';
							}
							$(".jlList").html(zsHtml);
						}else {
							layer.msg(res.error);
						}
					},
					error:function(res){
						/*关闭加载弹窗*/
						getZouShi();
					}
				});
			}

			getZouShi();
			
			$("#dihuan2").click(function(){
			$.post("<?php echo U('pay/pay_getTransferCount'); ?>",{r:Math.random(),playType:1},function(data){
			  if(data.code>0){
				layer.confirm('<style>.layui-layer-btn a{font-size:12px;}</style>你今天剩余提现次数<span>'+data.code+'</span>次！', {btn: ['提现','取消']},
					function(){
					$.post("<?php echo U('pay/withdrawCash'); ?>",
						{r:Math.random(),playType:1,transferType:1},function(data){
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
		</script>
	</body>

</html>
