<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:26:"public/Simple/paylist.html";i:1541739356;s:23:"public/Simple/left.html";i:1544507445;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo C('system.web_name'); ?></title>
    <meta name="description" content="<?php echo C('system.web_key'); ?>">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/simple/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/simple/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/simple/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/simple/assets/css/admin.css">
    <link rel="stylesheet" href="/public/simple/assets/css/app.css">
</head>
<body data-type="generalComponents">
    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/public/simple/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
	

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
		<?php if($txop == '1'): ?>
       <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success " onclick="kaiqi(0)" style="display:inline-block;float:left;margin-left:50%" ><span >关闭提现</span> </button>
	   <?php else: ?>
	  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm "  onclick="kaiqi(1)" style="display:inline-block;float:left;margin-left:50%;background:red" ><span >开启提现</span> </button>
	   <?php endif; ?>
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
			
			
				<li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round" id="hh">0</span><p id="sy"></p></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                       
                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">0</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                       
                        </li>

                    </ul>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">0</span></span>
                    </a>
                    <ul class="am-dropdown-content tpl-dropdown-content">
                        
                    </ul>
                </li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">站创神码</span><span class="tpl-header-list-user-ico"> <img src="/public/simple/assets/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="<?php echo U('login/out_login'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
				
                <li><a href="<?php echo U('login/out_login'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>





<div class="tpl-page-container tpl-page-header-fixed">

    <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                欢迎使用
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo U('systemy/init'); ?>" class="nav-link" id="home">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>

                    <!--<li class="tpl-left-nav-item">
                        <a href="<?php echo U('systemy/chart'); ?>" class="nav-link tpl-left-nav-link-list" id="chart">
                            <i class="am-icon-bar-chart"></i>
                            <span>数据表</span>
                            <i class="tpl-left-nav-content tpl-badge-danger">
               12
             </i>
                        </a>
                    </li>-->

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>会员中心</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" id="oneurl">
                            <li>
                                <a href="<?php echo U('systemy/fontlist'); ?>" id="fontlist">
                                    <i class="am-icon-angle-right"></i>
                                    <span>会员列表</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                 <a href="<?php echo U('systemy/withdraw'); ?>" id="tix">
									<i class="am-icon-angle-right"></i>
									<span>提现审核</span>
									<i class="tpl-left-nav-content tpl-badge-primary" id="shh" style="top:2px"></i>
								</a>
                            </li>
                        </ul>
                    </li>
					 <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-bar-chart"></i>
                            <span>订单中心</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" id="neurl">
                            <li>
                                <a href="<?php echo U('systemy/orderlist'); ?>" id="orderlist">
                                    <i class="am-icon-angle-right"></i>
                                    <span>充值订单</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a> 
								<a href="<?php echo U('systemy/paylist'); ?>" id="paylist">
                                    <i class="am-icon-angle-right"></i>
                                    <span>下注列表</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a> 
                            </li>
                        </ul>
                    </li>
					
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>系统管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" id="twourl" >
                            <li>
                                <a href="<?php echo U('systemy/amazeui'); ?>" id="ama">
                                    <i class="am-icon-angle-right"></i>
                                    <span>系统设置</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
								<a href="<?php echo U('systemy/peilv'); ?>" id="pl">
                                    <i class="am-icon-angle-right"></i>
                                    <span>赔率设置</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="<?php echo U('login/out_login'); ?>" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-key"></i>
                            <span>退出</span>

                        </a>
                    </li>
					
                    <li class="tpl-left-nav-item">
                        <a href="https://www.zhancsm.com/" class="nav-link tpl-left-nav-link-list" id="chart">
                            <i class="am-icon-bar-chart"></i>
                            <span>站创神码</span>
                            <i class="tpl-left-nav-content tpl-badge-danger">
               12
             </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
	<script src="/public/simple/assets/js/jquery.min.js"></script>
	
		<script>
		function kaiqi(p){
		 $.post("<?php echo U('gloabl/kaiqi'); ?>",{ok:p},function(q){
		  alert("操作成功");
		  location.reload();
		 })
		}
		</script>

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                <?php echo C('system.web_name'); ?>-系统管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="javascript:void(0)" class="am-icon-home">首页</a></li>
                <li><a href="javascript:void(0)">订单列表</a></li>
                <li class="am-active">充值列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 充值列表
                    </div>
                   
                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6" style="width:80%">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'today']); ?>'" ><span class="am-icon-archive"></span> 今日</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary" style="margin-left:8px" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'yesterday']); ?>'"><span class="am-icon-archive"></span> 昨日</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning" style="margin-left:8px" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'week']); ?>'"><span class="am-icon-archive"></span> 本周</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger" style="margin-left:8px" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'last week']); ?>'"><span class="am-icon-archive"></span> 上周</button>
									<button type="button" class="am-btn am-btn-default am-btn-danger" style="margin-left:8px;background:#009688;border: #009688 1px solid;" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'month']); ?>'"><span class="am-icon-archive"></span> 本月</button>
									<button type="button" class="am-btn am-btn-default am-btn-danger" style="margin-left:8px;background:#00bcd4;border: #00bcd4 1px solid;" onclick="location.href='<?php echo U('systemy/orderlist',['datay'=>'last month']); ?>'"><span class="am-icon-archive"></span> 上月</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3" style="width:10%">
                            <div class="am-form-group">
                                <select name="type" data-am-selected="{btnSize: 'sm'}" id="sel">
								  <option value="0">所有类别</option>
								  <option value="1">状态失败</option>
								  <option value="2">充值成功</option>
								  <option value="3">支付宝</option>
								  <option value="4">微信</option>
								</select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" name="order" class="am-form-field" placeholder="商户订单号或平台订单号">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button" id="bnn"></button>
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
											<th class="table-type">用户ID</th>
                                            <th class="table-title">订单号</th>
											<th class="table-type">期号</th>
                                            <th class="table-author am-hide-sm-only">下注类容</th>
											<th class="table-author am-hide-sm-only">下注金额</th>
											<th class="table-author am-hide-sm-only">中奖金额</th>
											<th class="table-author am-hide-sm-only">开奖号码</th>
											<th class="table-author am-hide-sm-only">IP</th>
                                            <th class="table-date am-hide-sm-only">下注时间</th>
											<th class="table-date am-hide-sm-only">状态</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dxty">
									<?php if(is_array($g) || $g instanceof \think\Collection): $i = 0; $__LIST__ = $g;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td id="uid"><?php echo $k['id']; ?></td>
                                            <td ><?php echo $k['user']; ?></a></td>
                                            <td><?php echo $k['order']; ?></td>
											<td class="am-hide-sm-only"><?php echo $k['term']; ?></td>
											<td class="am-hide-sm-only"><button type="button" style="background-color: #dd514c;pointer-events: none;width:100px" class="am-btn am-btn-danger am-btn-xs"><?php echo xz($k['account']); ?></button></td>
											<td class="am-hide-sm-only"><?php echo $k['money']; ?></td>
											<td class="am-hide-sm-only"><?php if($k['zj'] > '0'): ?><button type="button" style="background-color: #dd514c;pointer-events: none;width:80px" class="am-btn am-btn-danger am-btn-xs"><?php echo $k['zj']; ?></button><?php else: ?><button type="button" style="background-color: #5eb95e;pointer-events: none;width:80px" class="am-btn am-btn-success am-btn-xs"><?php echo $k['zj']; ?></button><?php endif; ?></td>
											<th class="table-author am-hide-sm-only"><?php echo $k['knum']; ?></th>
											<td class="am-hide-sm-only"><?php echo $k['ip']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $k['addtime']; ?></td>
											<td class="am-hide-sm-only"><?php if($k['state'] == '1'): ?><button type="button" style="background-color: #5eb95e;pointer-events: none;" class="am-btn am-btn-success am-btn-xs">已开奖</button><?php else: ?><button type="button" style="background-color: #dd514c;pointer-events: none;" class="am-btn am-btn-danger am-btn-xs">未结算</button><?php endif; ?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <em  class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</em>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
									<?php echo $g->render(); ?>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
    <script src="/public/simple/assets/js/jquery.min.js"></script>
    <script src="/public/simple/assets/js/amazeui.min.js"></script>
    <script src="/public/simple/assets/js/app.js"></script>
	
	<script>
	$(function(){
	$("#neurl").show();
	$("#paylist").addClass("active");
	$('#sel').selected('destroy');
	$("#sel").val(<?php echo $t; ?>);
	$('#sel').selected();
	})
	$("#bnn").click(function(){
		 var o=$("input[name=order]").val();
		 var url="<?php echo U('systemy/orderlist'); ?>";
		urll=url+"?order="+o;
		window.location.href=urll;
	})
	
	$(function(){
		$(".am-btn-toolbar").find("em:first").click(function(){
		var uid=$(this).parent().parent().parent().parent().find("#uid").text();
		$.post("<?php echo U('gloabl/delorder'); ?>",{id:uid},function(e){
		alert(e.msg);
        });
		})

		})
	
	</script>
</body>

</html>