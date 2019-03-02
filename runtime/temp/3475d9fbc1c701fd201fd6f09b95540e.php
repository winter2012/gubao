<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:26:"public/Simple/amazeui.html";i:1541665512;s:23:"public/Simple/left.html";i:1544507445;}*/ ?>
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
                            <form class="am-form am-form-horizontal" action="<?php echo U('Gloabl/upload'); ?>" enctype="multipart/form-data" method="post">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="webname" id="user-name" value="<?php echo $c['webname']; ?>"  >
                                        
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">支付PID</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="partner" id="user-email" value="<?php echo $c['partner']; ?>">
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">支付KEY</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="kkey" id="user-email" value="<?php echo $c['kkey']; ?>">
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">跳转地址</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="dlurl" id="user-email" value="<?php echo $c['dlurl']; ?>">
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">一级提成</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="ss0" id="user-email" value="<?php echo $c['ss0']; ?>">
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">二级提成</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="ss1" id="user-email" value="<?php echo $c['ss1']; ?>" >
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">三级提成</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="ss2" id="user-email" value="<?php echo $c['ss2']; ?>" >
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">四级提成</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="ss3" id="user-email" value="<?php echo $c['ss3']; ?>" >
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">五级提成</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="ss4" id="user-email" value="<?php echo $c['ss4']; ?>" >
                                    
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">支付设置</label>
                                    <div class="am-u-sm-9">
									<select name="pay"><option value="1" <?php if($c['pay'] == '1'): ?>selected="selected"<?php endif; ?>>开启微信收款</option><option value="2" <?php if($c['pay'] == '2'): ?>selected="selected"<?php endif; ?>>开启支付宝收款</option><option value="0" <?php if($c['pay'] == '0'): ?>selected="selected"<?php endif; ?>>微信和支付宝</option></select>
                                      
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">反佣设置</label>
                                    <div class="am-u-sm-9">
									<select name="yjtype"><option value="1" <?php if($c['yjtype'] == '1'): ?>selected="selected"<?php endif; ?>>购买返佣</option><option value="2" <?php if($c['yjtype'] == '2'): ?>selected="selected"<?php endif; ?>>开奖返佣</option></select>
                                      
                                    </div>
                                </div>
								

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">微信客服</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="/public/uploads/<?php echo $c['kefu']; ?>">
                                            </div>
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                              <i class="am-icon-cloud-upload"></i> 上传logo</button>
                                            <input id="doc-form-file" type="file" name="image"  multiple>
											<input type="hidden"  name="kefu" value="<?php echo $c['kefu']; ?>" >
                                        </div>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">日提余额次数</label>
                                    <div class="am-u-sm-9">
                                        <input type="text"  name="tinum" value="<?php echo $c['tinum']; ?>" >
                                    </div>
                                </div>
								<div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">日提佣金次数</label>
                                    <div class="am-u-sm-9">
                                        <input type="number"  name="yjnum" value="<?php echo $c['yjnum']; ?>" >
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">网站开关</label>
                                    <div class="am-u-sm-9">
                                        <div class="tpl-switch">
                                            <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" name="kaiguan" <?php if($c['kaiguan'] == '1'): ?> checked <?php endif; ?>/>
                                            <div class="tpl-switch-btn-view">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
	$("#ama").addClass("active");
	})
	</script>
</body>

</html>