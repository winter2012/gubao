<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:24:"public/Simple/peilv.html";i:1541506037;s:23:"public/Simple/left.html";i:1544507445;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo C('system.web_name'); ?></title>
    <meta name="description" content="这是一个 index 页面">
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
                <li><a href="javascript:void(0)">系统管理</a></li>
                <li class="am-active">系统设置</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 系统设置
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <!--<div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>-->
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="<?php echo U('Gloabl/addm'); ?>" enctype="multipart/form-data" method="post">
							<?php foreach($hk as $k=>$v): ?>
                                <div class="am-form-group" style="width:50%;float:left">
                                    <label for="user-name" class="am-u-sm-3 am-form-label"><?php echo $v; ?></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="<?php echo $k; ?>" id="user-name" value="<?php echo $c[$k]; ?>"  >
                                    </div>
                                </div>
								<?php endforeach; ?>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="/public/simple/assets/js/jquery.min.js"></script>
    <script src="/public/simple/assets/js/amazeui.min.js"></script>
    <script src="/public/simple/assets/js/app.js"></script>
	<script>
	$(function(){
	$("#twourl").show();
	$("#pl").addClass("active");
	})
	</script>
</body>

</html>