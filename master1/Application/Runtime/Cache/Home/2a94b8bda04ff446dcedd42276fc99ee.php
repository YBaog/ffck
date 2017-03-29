<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">


    <head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>留学大师</title>
    <base href="http://localhost/project/Study master/git/ffck/master1/Public/">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Import google fonts -->
    <!--<link href="http://fonts.useso.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <link href="assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />
    <link href="assets/plugins/xcharts/css/xcharts.min.css" rel="stylesheet" />
    <link href="assets/plugins/morris/css/morris.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link href="assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="assets/plugins/modernizr/js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<body>
	<!-- Start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="index.html#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="index.html#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
            <!-- Search Form -->
            <form class="search navbar-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">
            <!-- Notifications -->
            <ul class="notifications hidden-sm hidden-xs">
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">10</span>
                    </a>
                    <ul class="dropdown-menu update-menu" role="menu">
                        <li><a href="#"><i class="fa fa-database bk-fg-primary"></i> Database </a></li>
                        <li><a href="#"><i class="fa fa-bar-chart-o bk-fg-primary"></i> Connection </a></li>
                        <li><a href="#"><i class="fa fa-bell bk-fg-primary"></i> Notification </a></li>
                        <li><a href="#"><i class="fa fa-envelope bk-fg-primary"></i> Message </a></li>
                        <li><a href="#"><i class="fa fa-flash bk-fg-primary"></i> Traffic </a></li>
                        <li><a href="#"><i class="fa fa-credit-card bk-fg-primary"></i> Invoices </a></li>
                        <li><a href="#"><i class="fa fa-dollar bk-fg-primary"></i> Finances </a></li>
                        <li><a href="#"><i class="fa fa-thumbs-o-up bk-fg-primary"></i> Orders </a></li>
                        <li><a href="#"><i class="fa fa-folder bk-fg-primary"></i> Directories </a></li>
                        <li><a href="#"><i class="fa fa-users bk-fg-primary"></i> Users </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>Messages</strong>
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar1.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>1 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar2.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>3 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar3.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>4 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar4.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>30 minute ago</small></span>
                            </a>
                        </li>
                        <li class="avatar">
                            <a href="page-inbox.html">
                                <img class="avatar" src="assets/img/avatar5.jpg" alt="" />
                                <div><div class="point point-primary point-lg"></div>New message</div>
                                <span><small>1 hours ago</small></span>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="page-inbox.html">View all messages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge">3</span>
                    </a>
                    <ul class="dropdown-menu list-group">
                        <li class="dropdown-menu-header">
                            <strong>Notifications</strong>
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li class="list-item">
                            <a href="page-inbox.html">
                                <div class="pull-left">
                                    <i class="fa fa-envelope-o bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>Unread Message</div>
                                    <h6>You have 10 unread message</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#">
                                <div class="pull-left">
                                    <i class="fa fa-cogs bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>New Settings</div>
                                    <h6>There are new settings available</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#">
                                <div class="pull-left">
                                    <i class="fa fa-fire bk-fg-primary"></i>
                                </div>
                                <div class="media-body clearfix">
                                    <div>Update</div>
                                    <h6>There are new updates available</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-item-last">
                            <a href="#">
                                <h6>Unread notifications</h6>
                                <span class="badge">15</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Notifications -->
            <!-- Userbox -->
            <div class="userbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="profile-info">
                        <span class="name">John Smith Doe</span>
                        <span class="role">Developer</span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench"></i> Settings</a>
                        </li>
                        <li>
                            <a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i> File</a>
                        </li>
                        <li>
                            <a href="page-login.html"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
    </div>
</div>
<!-- End: Header -->
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
			
				<!-- Menu -->
				<div class="sidebar">
    <div class="sidebar-collapse">
        <!-- Sidebar Header Logo-->
        <div class="sidebar-header">
            <img src="assets/img/logo.png" class="img-responsive" alt="" />
        </div>
        <!-- Sidebar Menu-->
        <div class="sidebar-menu">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-sidebar">
                    <div class="panel-body text-center">
                        <div class="bk-avatar">
                            <img src="assets/img/avatar.jpg" class="img-circle bk-img-60" alt="" />
                        </div>
                        <div class="bk-padding-top-10">
                            <i class="fa fa-circle text-success"></i> <small>Administrator</small>
                        </div>
                    </div>
                    <div class="divider2"></div>
                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-home" aria-hidden="true"></i><span>首页服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('home/madeList');?>"><i class="glyphicon glyphicon-pushpin"></i><span class="text"> 定制服务</span></a></li>
                            <li><a href="<?php echo U('home/planeList');?>"><i class="fa fa-plane"></i><span class="text"> 接机服务</span></a></li>
                            <li><a href="<?php echo U('home/carList');?>"><i class="fa fa-truck"></i><span class="text"> 包车服务</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-tags" aria-hidden="true"></i><span>攻略</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('raider/raiderAdd');?>"><i class="glyphicon glyphicon-pencil"></i><span class="text">添加攻略</span></a></li>
                            <li><a href="<?php echo U('raider/studentList');?>"><i class="fa fa-tag"></i><span class="text">新生攻略</span></a></li>
                            <li><a href="<?php echo U('raider/brotherList');?>"><i class="fa fa-gittip"></i><span class="text">师兄分享</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-instagram" aria-hidden="true"></i><span>我的服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('mine/ticketList');?>"><i class="fa fa-ticket"></i><span class="text">优惠券</span></a></li>
                            <li><a href="<?php echo U('mine/orderList');?>"><i class="glyphicon glyphicon-list-alt"></i><span class="text">订单</span></a></li>
                            <li><a href="<?php echo U('mine/releaseList');?>"><i class="fa fa-share-square-o"></i><span class="text">发布</span></a></li>
                            <li><a href="<?php echo U('mine/driverList');?>"><i class="fa fa-road"></i><span class="text">司机行程</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i><span>人员管理</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('users/userList');?>"><i class="fa fa-users"></i><span class="text">用户管理</span></a></li>
                            <li><a href="<?php echo U('users/driversList');?>"><i class="fa fa-user-md"></i><span class="text">司机管理</span></a></li>
                            <li><a href="<?php echo U('users/adminList');?>"><i class="fa fa-user"></i><span class="text">管理员</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-comments-o" aria-hidden="true"></i><span>消息管理</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="<?php echo U('msg/commentList');?>"><i class="fa fa-comment"></i><span class="text">评论管理</span></a></li>
                            <li><a href="<?php echo U('msg/evaluateList');?>"><i class="fa fa-comment-o"></i><span class="text">评价管理</span></a></li>
                            <li><a href="<?php echo U('msg/feedbackList');?>"><i class="glyphicon glyphicon-comment"></i><span class="text">反馈管理</span></a></li>
                            <li><a href="<?php echo U('msg/msgList');?>"><i class="fa fa-comments"></i><span class="text">消息管理</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-flask" aria-hidden="true"></i><span>学生服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="fa fa-ticket"></i><span class="text">购买机票</span></a></li>
                            <li><a href="form-wizard.html"><i class="fa fa-hand-o-right"></i><span class="text">行前指导</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-star-half-o"></i><span class="text">个性需求</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-shield"></i><span class="text">管家服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-bookmark"></i><span class="text">行李寄存</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-rocket"></i><span class="text">转学服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-exclamation-triangle"></i><span class="text">危机处理</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-arrow-circle-left"></i><span class="text">寻找实习</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="glyphicon glyphicon-briefcase " aria-hidden="true"></i><span>家长服务</span>
                        </a>
                        <ul class="nav nav-children">
                            <li><a href="form-elements.html"><i class="glyphicon glyphicon-search"></i><span class="text">探望子女</span></a></li>
                            <li><a href="form-wizard.html"><i class="glyphicon glyphicon-lock"></i><span class="text">商务考察</span></a></li>
                            <li><a href="form-dropzone.html"><i class="glyphicon glyphicon-phone-alt"></i><span class="text">移民咨询</span></a></li>
                            <li><a href="form-dropzone.html"><i class="glyphicon glyphicon-bullhorn"></i><span class="text">监护服务</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-book"></i><span class="text">办理签证</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-building-o"></i><span class="text">房屋出租</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-dashboard (alias)"></i><span class="text">海外房产</span></a></li>
                            <li><a href="form-dropzone.html"><i class="fa fa-random"></i><span class="text">商务合作</span></a></li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
        <!-- End Sidebar Menu-->
    </div>
    <!-- Sidebar Footer-->
    <div class="sidebar-footer">
        <ul class="sidebar-terms">
            <li><a href="index.html#">Terms</a></li>
            <li><a href="index.html#">Privacy</a></li>
            <li><a href="index.html#">Help</a></li>
            <li><a href="index.html#">About</a></li>
        </ul>

    </div>
    <!-- End Sidebar Footer-->
</div>
				<!-- End Menu -->
		
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
								<li class="active"><i class="fa fa-laptop"></i>Dashboard</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Dashboard</h2>
						</div>					
					</div>
					<!-- End Page Header -->								
					<div class="row">	
						<div class="col-lg-8 col-md-12">
							<div class="panel bk-widget bk-border-off">					
								<div class="panel-body text-center bk-padding-top-20 bk-wrapper bk-bg-white">
									<div id="realtime-update" style="height:190px;color:#484848;"></div>
								</div>
								<div class="panel-body bk-padding-bottom-10 text-center bk-bg-white">
									<h3 class="bk-margin-off"><strong>CPU WORKING</strong></h3>
									<small>SUPPORT ANALYST</small>
									<p class="bk-margin-off-bottom">
										Curabitur nisi ipsum, accumsan id urna facilisis, commodo tempus turpis. Mauris lobortis elit eget bibendum
										ultrices.
									</p>
								</div>
								<div class="panel-body bk-padding-off-bottom bk-padding-off-top bk-bg-info">
									<div class="row text-center">
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-primary bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
											<small>HTML PROCCESS</small>
											<h4 class="bk-margin-off-bottom">569</h4>
										</a>
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-primary bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
											<small>JAVASCRIPT WORKING</small>
											<h4 class="bk-margin-off-bottom">623</h4>
										</a>
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-primary bk-bg-lighten bk-padding-top-10 bk-padding-bottom-10">
											<small>CSS SUPPORT</small>
											<h4 class="bk-margin-off-bottom">236</h4>
										</a>
									</div>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body bk-ltr">
									<div class="row text-center">
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-primary bk-bg-darken bk-padding-top-15 bk-padding-bottom-15">
											<div>
												<small><strong>Facebook</strong></small>
											</div>
											<div class="bk-margin-top-10">
												<i class="fa fa-facebook fa-2x"></i>
											</div>
											<h4 class="bk-margin-off-bottom"><strong>28K</strong></h4>
										</a>
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-info bk-bg-darken bk-padding-top-15 bk-padding-bottom-15">
											<div>
												<small><strong>Twitter</strong></small>
											</div>
											<div class="bk-margin-top-10">
												<i class="fa fa-twitter fa-2x"></i>
											</div>
											<h4 class="bk-margin-off-bottom"><strong>22K</strong></h4>
										</a>
										<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-bg-danger bk-bg-darken bk-padding-top-15 bk-padding-bottom-15">
											<div>
												<small><strong>Google</strong></small>
											</div>
											<div class="bk-margin-top-10">
												<i class="fa fa-google-plus fa-2x"></i>
											</div>
											<h4 class="bk-margin-off-bottom"><strong>16K</strong></h4>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-heading bk-bg-primary">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">MEMBER ONLINE</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-users"></i>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-off-top bk-padding-off-bottom">
									<div class="row">
										<div class="col-xs-3 bk-vcenter text-center bk-padding-top-10 bk-padding-bottom-10">
											<a href="#" class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-primary bk-border-2x bk-border-darken">
											</a>
										</div>
										<div class="col-xs-9 bk-vcenter">
											<h5 class="bk-fg-primary bk-margin-off-bottom"><div class="point point-success point-lg"></div>Michael</h5>
											<p>
												Nullam vitae arcu in leo molestie hendrerit at quis sem.                                    
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
											<a href="#" class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-warning bk-border-2x bk-border-darken">
											</a>
										</div>
										<div class="col-xs-9 bk-vcenter">
											<h5 class="bk-fg-warning bk-margin-off-bottom"><div class="point point-success point-lg"></div>Jhason</h5>
											<p>
												In sit amet nunc non justo consequat pellentesque a vel nulla.                                     
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
											<a href="#" class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-success bk-border-2x bk-border-darken">
											</a>
										</div>
										<div class="col-xs-9 bk-vcenter">
											<h5 class="bk-fg-success bk-margin-off-bottom"><div class="point point-success point-lg"></div>Serlly</h5>
											<p>
												Morbi interdum posuere ultricies. Aliquam sit amet neque nisi. Etiam in iaculis lectus. 
											</p>
										</div>
									</div>							
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
											<a href="#" class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-danger bk-border-2x bk-border-darken">
											</a>
										</div>
										<div class="col-xs-9 bk-vcenter">
											<h5 class="bk-fg-danger bk-margin-off-bottom"><div class="point point-success point-lg"></div>Rose Lady</h5>
											<p>
												Morbi interdum posuere ultricies. Aliquam sit amet neque nisi. Etiam in iaculis lectus. 
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-xs-3 bk-vcenter text-center bk-padding-10">
											<a href="#" class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-success bk-border-2x bk-border-darken">
											</a>
										</div>
										<div class="col-xs-9 bk-vcenter">
											<h5 class="bk-fg-success bk-margin-off-bottom"><div class="point point-success point-lg"></div>Jhon Doe</h5>
											<p>
												Morbi interdum posuere ultricies. Aliquam sit amet neque nisi. Etiam in iaculis lectus. 
											</p>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-very-light-gray bk-padding-top-5 bk-padding-bottom-5 ">
									<div class="row">
										<div class="col-xs-6">
											<a href="#" class="bk-fg-textcolor"><small><i class="fa fa-angle-left"></i> PREVIOUS</small></a>
										</div>
										<div class="col-xs-6 text-right">
											<a href="#" class="bk-fg-textcolor"><small>NEXT <i class="fa fa-angle-right"></i></small></a>
										</div>
									</div>
								</div>
							</div>
						</div>		
					</div>
					
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="bk-border-danger bk-bg-white bk-fg-danger bk-ltr bk-padding-15">
									<div class="row">
										<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
											<span class="bk-round bk-icon bk-icon-3x bk-bg-danger bk-border-off">
												<i class="fa fa-users fa-3x"></i>
											</span>
										</div>
										<div class="col-xs-8 text-center bk-vcenter">
											<h6 class="bk-margin-off">TOTAL USERS</h6>
											<h4 class="bk-margin-off">326,269</h4>
										</div>
									</div>
									<div class="progress bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
									<div class="bk-margin-top-10">
										<div class="row">
											<div class="col-xs-6">
												<small>This month: 6,269</small>
											</div>
											<div class="col-xs-6 text-right">
												<a href="#" class="bk-fg-danger bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off">
								<div class="bk-border-primary bk-bg-white bk-fg-primary bk-ltr bk-padding-15">
									<div class="row">
										<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
											<span class="bk-round bk-border-off bk-icon bk-icon-3x bk-bg-primary">
												<i class="fa fa-globe fa-3x"></i>
											</span>
										</div>
										<div class="col-xs-8 text-center bk-vcenter">
											<h6 class="bk-margin-off">VISITS TODAY</h6>
											<h4 class="bk-margin-off">10,256</h4>
										</div>
									</div>
									<div class="progress bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
									<div class="bk-margin-top-10">
										<div class="row">
											<div class="col-xs-6">
												<small>Top country: INDONESIA</small>
											</div>
											<div class="col-xs-6 text-right">
												<a href="#" class="bk-fg-primary bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="bk-border-success bk-bg-white bk-fg-success bk-ltr bk-padding-15">
									<div class="row">
										<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
											<span class="bk-round bk-border-off bk-icon bk-icon-3x bk-bg-success">
												<i class="fa fa-download fa-3x"></i>
											</span>
										</div>
										<div class="col-xs-8 text-center bk-vcenter">
											<h6 class="bk-margin-off">DOWNLOAD</h6>
											<h4 class="bk-margin-off">1,256</h4>
										</div>
									</div>
									<div class="progress bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
									<div class="bk-margin-top-10">
										<div class="row">
											<div class="col-xs-6">
												<small>Stock Item: 32,269</small>
											</div>
											<div class="col-xs-6 text-right">
												<a href="#" class="bk-fg-success bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="bk-border-warning bk-bg-white bk-fg-warning bk-ltr bk-padding-15">
									<div class="row">
										<div class="col-xs-4 text-left bk-vcenter bk-padding-off">
											<span class="bk-round bk-border-off bk-icon bk-icon-3x bk-bg-warning">
												<i class="fa fa-shopping-cart fa-3x"></i>
											</span>
										</div>
										<div class="col-xs-8 text-center bk-vcenter">
											<h6 class="bk-margin-off">PURCHASE</h6>
											<h4 class="bk-margin-off">$526,369</h4>
										</div>
									</div>
									<div class="progress bk-margin-off-bottom bk-margin-top-10 bk-noradius" style="height: 6px;">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
									<div class="bk-margin-top-10">
										<div class="row">
											<div class="col-xs-6">
												<small>Top day: 02/01/2015</small>
											</div>
											<div class="col-xs-6 text-right">
												<a href="#" class="bk-fg-warning bk-fg-darken"><small>View details</small> <i class="fa fa-database"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>

					<div class="row">
						<!--<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">-->
							<!--<div class="panel bk-widget bk-webkit-fix">-->
								<!--<div class="panel-heading bk-bg-primary bk-border-info">-->
									<!--<div class="row">-->
										<!--<div class="col-xs-8 text-left bk-vcenter">-->
											<!--<h6 class="bk-margin-off">GOOGLE MAP</h6>-->
										<!--</div>							-->
									<!--</div>-->
								<!--</div>-->
								<!--<div class="panel-body bk-bg-white bk-border-white text-center bk-padding-off">-->
									<!--<div id="gmap-marker" class="bk-radius-top" style="height: 237px"></div>-->
								<!--</div>-->
								<!--<div class="panel-body bk-bg-white bk-border-white bk-padding-off-top bk-padding-off-bottom">-->
									<!--<div class="row">-->
										<!--<div class="col-xs-8 bk-vcenter bk-padding-20">-->
											<!--<h6 class="bk-margin-off bk-docs-font-weight-300">Menara Cakrawala, 89th Floor, JL. M.H. Thamrin, No. 9, 10360, Jakarta</h6>-->
											<!--<h4 class="bk-fg-info bk-padding-top-10 bk-margin-off bk-docs-font-weight-300">NADHIF DEVELOPER</h4>-->
										<!--</div>-->
										<!--<div class="col-xs-4 text-right bk-vcenter bk-padding-20 bk-fg-danger">-->
											<!--<i class="fa fa-map-marker fa-3x"></i>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-body bk-bg-white text-center bk-fg-info bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<div class="">
												<h4 class="bk-margin-off">TOP COUNTRIES</h4>
												RANKED BY VISITS
											</div>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-globe fa-4x"></i>
										</div>
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row">
											<div class="col-xs-6">
												INDONESIA
											</div>
											<div class="col-xs-6 text-right">
												<span class="label label-success bk-noradius">1,526,596</span>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row">
											<div class="col-xs-6">
												JAPAN
											</div>
											<div class="col-xs-6 text-right">
												<span class="label label-warning bk-noradius">1,326,895</span>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row">
											<div class="col-xs-6">
												AUSTRALIA
											</div>
											<div class="col-xs-6 text-right">
												<span class="label label-danger bk-noradius">1,126,659</span>
											</div>
										</div>
									</a>                        
								</div>
							</div>
							<div class="panel bk-widget bk-border-off bk-webkit-fix">
								<div class="panel-body bk-bg-very-light-gray text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h5 class="bk-margin-off"><em>BEST SELLER</em></h5>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-thumbs-o-up fa-2x"></i>
										</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bs-example">
									<div id="carousel-example-generic3" class="carousel bk-carousel-fade slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-warning">
															<i class="fa fa-gift fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-warning bk-fg-darken bk-margin-off-bottom"><strong>CREATIVE</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-warning bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> FIND OUT MORE</small></a>
												</div>
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-info">
															<i class="fa fa-send-o fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-info bk-fg-darken bk-margin-off-bottom"><strong>PORTFOLIO</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-info bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> FIND OUT MORE</small></a>
												</div>
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-primary">
															<i class="fa fa-map-marker fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-primary bk-fg-darken bk-margin-off-bottom"><strong>ADMIN TEMPLATE</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-primary bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> FIND OUT MORE</small></a>
												</div>
											</div>
										</div>
										<a class="left carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3" role="button" data-slide="prev">
											<span class="fa fa-angle-left icon-prev bk-bg-very-light-gray"></span>
										</a>
										<a class="right carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3" role="button" data-slide="next">
											<span class="fa fa-angle-right icon-next"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="panel bk-widget bk-border-off bk-webkit-fix">
								<div class="bs-example">
									<div id="carousel-example-generic10b" class="carousel bk-carousel-fade slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA PUSAT <small>(GMT +1)</small></h6>
												</div>
												<a class="panel-body bk-bg-white bk-bg-darken text-center bk-padding-top-20 bk-padding-bottom-20">
													<h6 class="bk-docs-font-weight-300">Humidity: 40%</h6>
													<h1 class="bk-margin-off-top bk-docs-font-weight-700"> 26</h1>
													<canvas class="partly-cloudy-day bk-padding-top-10 bk-padding-bottom-10" width="60" height="60"></canvas>
												</a>
											</div>                                
											<div class="item active">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA TIMUR <small>(EDT)</small></h6>
												</div>
												<a class="panel-body bk-bg-white bk-bg-darken text-center bk-padding-top-20 bk-padding-bottom-20">
													<h6 class="bk-docs-font-weight-300">Humidity: 56%</h6>
													<h1 class="bk-margin-off-top bk-docs-font-weight-700"> 26</h1>
													<canvas class="clear-day bk-padding-top-10 bk-padding-bottom-10" width="60" height="60"></canvas>
												</a>
											</div>
											<div class="item">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA SELATAN <small>(IST)</small></h6>
												</div>
												<a class="panel-body bk-bg-white bk-bg-darken text-center bk-padding-top-20 bk-padding-bottom-20">
													<h6 class="bk-docs-font-weight-300">Humidity: 72%</h6>
													<h1 class="bk-margin-off-top bk-docs-font-weight-700"> 80</h1>
													<canvas class="partly-cloudy-night bk-padding-top-10 bk-padding-bottom-10" width="60" height="60"></canvas>
												</a>
											</div>
											<div class="item">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA UTARA <small>(PDT)</small></h6>
												</div>
												<a class="panel-body bk-bg-white bk-bg-darken text-center bk-padding-top-20 bk-padding-bottom-20">
													<h6 class="bk-docs-font-weight-300">Humidity: 77%</h6>
													<h1 class="bk-margin-off-top bk-docs-font-weight-700"> 88</h1>
													<canvas class="cloudy bk-padding-top-10 bk-padding-bottom-10" width="60" height="60"></canvas>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-body bk-padding-off">
									<div class="row">
										<a href="#carousel-example-generic10b" class="col-xs-6 pull-left bk-bg-primary bk-bg-darken bk-padding-top-5 bk-padding-bottom-5 text-center" data-slide="prev">
											<h6><i class="fa fa-angle-left"></i> PREVIOUS</h6>
										</a>
										<a href="#carousel-example-generic10b" class="col-xs-6 pull-left bk-bg-primary bk-bg-darken bk-padding-top-5 bk-padding-bottom-5 text-center" data-slide="next">
											<h6>NEXT <i class="fa fa-angle-right"></i></h6>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="panel bk-widget bk-border-off bk-webkit-fix">
								<div class="bs-example">
									<div id="carousel-example-generic3c" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA UTARA <small>(PDT)</small></h6>
												</div>
												<div class="panel-body bk-bg-white text-center bk-padding-top-15 bk-padding-bottom-15">
													<canvas class="partly-cloudy-night" width="60" height="60"></canvas>
												</div>
												<div class="panel-body bk-bg-white text-center">
													<h1 class="bk-margin-off-top">26°</h1>
													<h6 class="bk-docs-font-weight-300 pull-right">CLOUDY </h6>
												</div>
											</div>
											<div class="item">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA SELATAN <small>(IST)</small></h6>
												</div>
												<div class="panel-body bk-bg-white text-center bk-padding-top-15 bk-padding-bottom-15">
													<canvas class="wind" width="60" height="60"></canvas>
												</div>
												<div class="panel-body bk-bg-white text-center">
													<h1 class="bk-margin-off-top">78°</h1>
													<h6 class="bk-docs-font-weight-300 pull-right">WINDY </h6>
												</div>
											</div>
											<div class="item active">
												<div class="panel-body bk-bg-primary">
													<h6 class="bk-margin-off bk-docs-font-weight-300">JAKARTA PUSAT <small>(GMT +1)</small></h6>
												</div>
												<div class="panel-body bk-bg-white text-center bk-padding-top-15 bk-padding-bottom-15">
													<canvas class="rain" width="60" height="60"></canvas>
												</div>
												<div class="panel-body bk-bg-white text-center">
													<h1 class="bk-margin-off-top">35°</h1>
													<h6 class="bk-docs-font-weight-700 bk-fg-inverse pull-right">RAINY </h6>
												</div>
											</div>
										</div>
										<a class="left carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3c" role="button" data-slide="prev">
											<span class="fa fa-angle-left icon-prev bk-bg-very-light-gray"></span>
										</a>
										<a class="right carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3c" role="button" data-slide="next">
											<span class="fa fa-angle-right icon-next"></span>
										</a>
									</div>
								</div>
								<div class="panel-body bk-ltr">
									<div class="row text-center">
										<a class="col-xs-4 bk-bg-primary bk-bg-darken bk-padding-top-5 bk-padding-bottom-5">
											<h6>SETTING</h6>
										</a>
										<a class="col-xs-4 bk-bg-primary bk-bg-darken bk-padding-top-5 bk-padding-bottom-5">
											<h6>UPDATE</h6>
										</a>
										<a class="col-xs-4 bk-bg-primary bk-bg-darken bk-padding-top-5 bk-padding-bottom-5">
											<h6>NEW</h6>
										</a>
									</div>
								</div>
							</div>  	
						</div>
					</div>					
						
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="panel">
								<div class="panel-body text-center" style="height:230px">
									<h5 class="bk-fg-warning">ADMIN TEMPLATE</h5>
									<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
										<canvas id="gauge1"></canvas>
									</div>
									<span class="pull-left">$ 356.256,25</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-up bk-fg-warning"></i> 92%</span>
								</div>
							</div>				
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="panel">
								<div class="panel-body text-center" style="height:230px">
									<h5 class="bk-fg-success">PORTFOLIO</h5>
									<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
										<canvas id="gauge2"></canvas>
									</div>
									<span class="pull-left">$ 125.365,56</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-up bk-fg-success"></i> 70%</span>
								</div>
							</div>			
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="panel">
								<div class="panel-body text-center" style="height:230px">
									<h5 class="bk-fg-danger">WORDPRESS</h5>
									<div style="width:300px;left:50%;position:absolute;margin-left:-150px;">
										<canvas id="gauge3"></canvas>
									</div>
									<span class="pull-left">$ 98.256,25</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-o-up bk-fg-danger"></i> 52%</span>
								</div>
							</div>				
						</div>
					</div>
						
					<div class="row">
						<div class="col-sm-12">
							<div class="panel">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-bar-chart-o red"></i>CHART STATS</h6>
									<div class="panel-actions">
										<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
										<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>	
								</div>						
								<div class="panel-body">
									<figure class="demo" id="chart" style="height: 300px"></figure>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading bk-bg-white">
									<h6><i class="fa fa-random red"></i>INTERACTING STATS</h6>							
								</div>						
								<div class="panel-body">
									<figure class="demo" id="example4" style="height: 300px"></figure>
								</div>
							</div>
						</div>
						<div class="col-sm-6">					
							<div class="panel">
								<div class="panel-heading bk-bg-white">
									<h6><i class="fa fa-retweet red"></i>CUSTOM STATS</h6>							
								</div>
								<div class="panel-body">
									<figure class="demo" id="exampleVis" style="height: 300px"></figure>
								</div>
							</div>
						</div>
					</div>		
				
					<div class="row">
						<div class="col-md-6">
							<div class="panel bk-widget bk-border-off bk-noradius bk-webkit-fix">
								<div class="panel-body bk-bg-very-light-gray text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off"><i class="fa fa-bullhorn"></i> SOCIAL UPDATE</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<a class="right carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-left" href="#carousel-example-generic2" role="button" data-slide="prev">
												<span class="fa fa-arrow-circle-o-left icon-prev"></span>
											</a>
											<a class="right carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-right" href="#carousel-example-generic2" role="button" data-slide="next">
												<span class="fa fa-angle-right icon-next"></span>
											</a>
										</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bs-example">
									<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-primary">
															<i class="fa fa-facebook fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-primary bk-fg-darken bk-margin-off-bottom"><strong>FACEBOOK</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-primary bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> MORE UPDATE</small></a>
												</div>
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-info">
															<i class="fa fa-twitter fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-info bk-fg-darken bk-margin-off-bottom"><strong>TWITTER</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-info bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> MORE UPDATE</small></a>
												</div>
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10">
														<div class="bk-round bk-bg-darken bk-border-off bk-icon bk-icon-2x bk-icon-default bk-bg-danger">
															<i class="fa fa-google-plus fa-2x"></i>
														</div>
													</div>
													<h5 class="bk-fg-danger bk-fg-darken bk-margin-off-bottom"><strong>GOOGLE PLUS</strong></h5>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>
												<hr class="bk-margin-off" />
												<div class="panel-body bk-bg-very-light-gray bk-padding-5 text-center">
													<a href="#" class="bk-fg-danger bk-fg-lighten"><small><i class="fa fa-file-text-o"></i> MORE UPDATE</small></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off bk-webkit-fix">
								<div class="panel-body bk-bg-very-light-gray text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">NEW COMMENTS</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-comment-o"></i>
										</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bs-example">
									<div id="carousel-example-generic3" class="carousel bk-carousel-fade slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10 bk-margin-bottom-15">
														<div class="bk-avatar">
															<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
														</div>
													</div>
													<h6 class="bk-fg-warning bk-fg-darken bk-margin-off-bottom"><strong>Adam</strong></h6>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>                                   
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10 bk-margin-bottom-15">
														<div class="bk-avatar">
															<img src="assets/img/avatar2.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
														</div>
													</div>
													<h6 class="bk-fg-warning bk-fg-darken bk-margin-off-bottom"><strong>Ferry</strong></h6>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>                                    
											</div>
											<div class="item">
												<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
													<div class="pull-left bk-margin-top-10 bk-margin-right-10 bk-margin-bottom-15">
														<div class="bk-avatar">
															<img src="assets/img/avatar3.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
														</div>
													</div>
													<h6 class="bk-fg-warning bk-fg-darken bk-margin-off-bottom"><strong>Ashley</strong></h6>
													<p>
														<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
													</p>
												</a>                                    
											</div>
										</div>
										<a class="left carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3" role="button" data-slide="prev">
											<span class="fa fa-angle-left icon-prev bk-bg-very-light-gray"></span>
										</a>
										<a class="right carousel-control bk-carousel-control bk-carousel-control-white bk-carousel-hide-init" href="#carousel-example-generic3" role="button" data-slide="next">
											<span class="fa fa-angle-right icon-next"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-heading bk-bg-primary">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">LATEST ITEM</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-umbrella"></i>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-off-top bk-padding-off-bottom">
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-10">
											<a class="pull-left bk-border-danger">
												<div class="bk-avatar">
													<img src="assets/img/gallery/photo6.jpg" alt="" class="img-responsive bk-img-60 bk-border-off" />
												</div>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-danger bk-margin-off-bottom"><strong>RESPONSIVE MULTIPURPOSE</strong></h6>
											<p>
												<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
											</p>
										</div>
										<hr class="bk-margin-off" />
									</div>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-10">
											<a class="pull-left bk-border-primary">
												<div class="bk-avatar">
													<img src="assets/img/gallery/photo7.jpg" alt="" class="img-responsive bk-img-60 bk-border-off" />
												</div>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-primary bk-margin-off-bottom"><strong>PARALLAX ONE PAGE</strong></h6>
											<p>
												<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-10">
											<a class="pull-left bk-border-info">
												<div class="bk-avatar">
													<img src="assets/img/gallery/photo8.jpg" alt="" class="img-responsive bk-img-60 bk-border-off" />
												</div>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-info bk-margin-off-bottom"><strong>ONE PAGE SLIDER HOME</strong></h6>
											<p>
												<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-10">
											<a class="pull-left bk-border-warning">
												<div class="bk-avatar">
													<img src="assets/img/gallery/photo9.jpg" alt="" class="img-responsive bk-img-60 bk-border-off" />
												</div>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-warning bk-margin-off-bottom"><strong>ONE PAGE PORTFOLIO</strong></h6>
											<p>
												<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
											</p>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-very-light-gray bk-padding-top-5 bk-padding-bottom-5 ">
									<div class="row">
										<div class="col-xs-6">
											<a href="#" class="bk-fg-textcolor"><small><i class="fa fa-angle-left"></i> PREVIOUS</small></a>
										</div>
										<div class="col-xs-6 text-right">
											<a href="#" class="bk-fg-textcolor"><small>NEXT <i class="fa fa-angle-right"></i></small></a>
										</div>
									</div>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-heading bk-bg-primary">
									<h6><i class="fa fa-book red"></i>TO DO</h6>
									<div class="panel-actions">
										<a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
											<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
										<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
									</div>	
								</div>
								<div class="panel-body bk-bg-white no-padding">
									<div class="todo-list">									
										<div class="header">Today</div>
										<ul id="todo-2" class="todo-list-tasks">
											<li>
												<label class="custom-checkbox-item pull-left">
													<input class="custom-checkbox" type="checkbox"/>
													<span class="custom-checkbox-mark"></span>
												</label>
												<span class="desc">Add slider home to creative template</span> 
											</li>
											<li>
												<label class="custom-checkbox-item pull-left">
													<input class="custom-checkbox" type="checkbox"/>
													<span class="custom-checkbox-mark"></span>
												</label>
												<span class="desc">Change portfolio image with new animation</span> 
											</li>
											<li>
												<label class="custom-checkbox-item pull-left">
													<input class="custom-checkbox" type="checkbox"/>
													<span class="custom-checkbox-mark"></span>
												</label>
												<span class="desc">Fixed JavaScript problem for index page</span> 
											</li>
										</ul>
										<div class="header">Tommorow</div>
										<ul id="todo-3" class="todo-list-tasks">
											<li>
												<label class="custom-checkbox-item pull-left">
													<input class="custom-checkbox" type="checkbox"/>
													<span class="custom-checkbox-mark"></span>
												</label>
												<span class="desc">Update sliding menu with newest</span> 
											</li>
											<li>
												<label class="custom-checkbox-item pull-left">
													<input class="custom-checkbox" type="checkbox"/>
													<span class="custom-checkbox-mark"></span>
												</label>
												<span class="desc">Change navigation structure on header</span> 
											</li>
										</ul>
										<div class="header">Completed</div>
										<ul class="completed"></ul>		
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-top-10 bk-padding-bottom-10">
									<form role="form" action="#">
										<div class="input-group">
											<input type="text" class="form-control bk-noradius" />
											<span class="input-group-btn">
												<button class="btn btn-primary bk-noradius" type="button">Submit</button>
											</span>
										</div><!-- /input-group -->
										<div class="btn-group">
											<button type="button" class="btn btn-link"><i class="fa fa-wheelchair"></i></button>
											<button type="button" class="btn btn-link"><i class="fa fa-file-text"></i></button>
											<button type="button" class="btn btn-link"><i class="fa fa-heart"></i></button>
										</div>							
									</form>
								</div>											
							</div>						
						</div>
						<div class="col-md-6">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-body bk-bg-white text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">CHATROOM</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-comments-o"></i>
										</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bk-docs-scroll-hidden">
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar4.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary">Tommy</strong>
											<span class="pull-right bk-fg-primary"><i class="fa fa-clock-o"></i><small> 30 minutes ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar5.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-warning">Romi</strong>
											<span class="bk-fg-primary"><i class="fa fa-clock-o"></i><small> 20 minutes ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar6.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-danger">Jack</strong>
											<span class="pull-right bk-fg-primary"><i class="fa fa-clock-o"></i><small> 10 minutes ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-info">Arline</strong>
											<span class="bk-fg-primary"><i class="fa fa-clock-o"></i><small> 3 minutes ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar6.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-success">Jack</strong>
											<span class="pull-right bk-fg-primary"><i class="fa fa-clock-o"></i><small> just now</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</a>
								</div>
								<hr class="bk-margin-off" />
								<div class="panel-body bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<form role="form" action="#">
										<div class="input-group">
											<input type="text" class="form-control bk-noradius" />
											  <span class="input-group-btn">
												<button class="btn btn-default bk-noradius" type="button"><i class="fa fa-send-o"></i></button>
											  </span>
										</div>
									</form>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bk-vcenter">
											<h4 class="bk-margin-off">James Freedy</h4>
											<small>EXECUTIVE DIRECTOR</small>
											<div>
												<div class="btn-group">
													<a href="#" class="btn btn-info btn-xs">profile</a>
													<a href="#" class="btn btn-primary btn-xs">contact</a>
												</div>
											</div>								
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-vcenter text-right">
											<div class="bk-avatar bk-padding-top-5">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-80 bk-border-primary bk-border-2x" />
											</div>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-15">
									<blockquote class="bk-margin-off-bottom">
										<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
									</blockquote>
								</div>
								<div class="panel-body bk-ltr bk-bg-white bk-padding-off">
									<div class="row text-center">
										<a class="col-xs-3 bk-bg-darken bk-fg-success bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-linkedin fa-2x"></i><br>
											<small>Linkedin</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-primary bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-facebook fa-2x"></i><br>
											<small>Facebook</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-info bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-twitter fa-2x"></i><br>
											<small>Twitter</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-danger bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-google-plus fa-2x"></i><br>
											<small>Google+</small>
										</a>
									</div>
								</div>                    				
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bk-vcenter">
											<h4 class="bk-margin-off">John Doe</h4>
											<small>WEB DEVELOPER</small>
											<div class="bk-padding-bottom-20">
												<div class="btn-group">
													<a href="#" class="btn btn-info btn-xs">profile</a>
													<a href="#" class="btn btn-primary btn-xs">contact</a>
												</div>
											</div>								
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-vcenter text-right">
											<div class="bk-avatar bk-padding-top-5">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-80 bk-border-primary bk-border-2x" />
											</div>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-15">
									<blockquote class="bk-margin-off-bottom">
										<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
									</blockquote>
								</div>
								<div class="panel-body bk-ltr bk-bg-white bk-padding-off">
									<div class="row text-center">
										<a class="col-xs-3 bk-bg-darken bk-fg-success bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-linkedin fa-2x"></i><br>
											<small>Linkedin</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-primary bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-facebook fa-2x"></i><br>
											<small>Facebook</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-info bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-twitter fa-2x"></i><br>
											<small>Twitter</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-danger bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-google-plus fa-2x"></i><br>
											<small>Google+</small>
										</a>
									</div>
								</div>                    				
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 bk-vcenter">
											<h4 class="bk-margin-off">Jennifer Doe</h4>
											<small>STAFF OFFICER</small>
											<div>
												<div class="btn-group">
													<a href="#" class="btn btn-info btn-xs">profile</a>
													<a href="#" class="btn btn-primary btn-xs">contact</a>
												</div>
											</div>								
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bk-vcenter text-right">
											<div class="bk-avatar bk-padding-top-5">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-80 bk-border-primary bk-border-2x" />
											</div>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-15">
									<blockquote class="bk-margin-off-bottom">
										<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
									</blockquote>
								</div>
								<div class="panel-body bk-ltr bk-bg-white bk-padding-off">
									<div class="row text-center">
										<a class="col-xs-3 bk-bg-darken bk-fg-success bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-linkedin fa-2x"></i><br>
											<small>Linkedin</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-primary bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-facebook fa-2x"></i><br>
											<small>Facebook</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-info bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-twitter fa-2x"></i><br>
											<small>Twitter</small>
										</a>
										<a class="col-xs-3 bk-bg-darken bk-fg-danger bk-padding-top-20 bk-padding-bottom-20">
											<i class="fa fa-google-plus fa-2x"></i><br>
											<small>Google+</small>
										</a>
									</div>
								</div>					
							</div>				
						</div>
					</div>
				</div>
				<!-- End Main Page -->			

			
			</div>
		</div><!--/container-->


		
<div class="clearfix"></div>


<!-- start: JavaScript-->

<!-- Vendor JS-->
<script src="assets/vendor/js/jquery.min.js"></script>
<script src="assets/vendor/js/jquery-2.1.1.min.js"></script>
<script src="assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/skycons/js/skycons.js"></script>

<!-- Plugins JS-->
<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/bootkit/js/bootkit.js"></script>
<script src="assets/plugins/moment/js/moment.min.js"></script>
<script src="assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
<script src="assets/plugins/touchpunch/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
<script src="assets/plugins/flot/js/jquery.flot.time.min.js"></script>
<script src="assets/plugins/xcharts/js/xcharts.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/placeholder/js/jquery.placeholder.min.js"></script>
<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/raphael/js/raphael.min.js"></script>
<script src="assets/plugins/morris/js/morris.min.js"></script>
<script src="assets/plugins/gauge/js/gauge.min.js"></script>
<script src="assets/plugins/d3/js/d3.min.js"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

<!-- Theme JS -->
<script src="assets/js/jquery.mmenu.min.js"></script>
<script src="assets/js/core.min.js"></script>

<!-- Pages JS -->
<script src="assets/js/pages/index.js"></script>

<!-- end: JavaScript-->
		
	</body>
	
</html>