
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>熊猫商城</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="/shangcheng/img/favicon.ico">
        
        <!-- google fonts here -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
        
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="/shangcheng/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="/shangcheng/css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="/shangcheng/css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="/shangcheng/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="/shangcheng/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="/shangcheng/css/font-awesome.min.css">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="/shangcheng/lib/css/nivo-slider.css">
        <!-- style css -->
        <link rel="stylesheet" href="/shangcheng/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="/shangcheng/css/responsive.css">
        <!-- modernizr css -->
        <script src="/shangcheng/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

         


        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="header-area">
            <div class="header-top-area hidden-xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="header-top-left">
                                <ul>
                                  
                                    <li>@if(!Session::has('id'))<a href="/home/login">登录</a>@endif
                                                                @if(Session::has('id'))<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                                                
                            <img  height='23' src='{{Session::get('pic')}}' width='23' />
                            <span class='user-name hidden-phone'>{{Session::get('username')}}</span>
                            <b class='caret'></b>
                        </a>
                        <ul class="dropdown-menu">
                        
                            <li>
                                <a href="/home/center">
                                    <i class="icon-user"></i>
                                    个人中心
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/home/shangcheng">
                                    <i class="icon-signout"></i>
                                    退出
                                </a>
                            </li>
                            
                        </ul>@endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <div class="header-top-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Top Area -->
            <div class="header-mid-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-mid-inner">
                                <span class="header-mid-inner-icon"><i class="fa fa-truck"></i></span>
                                <div class="header-mid-info">
                                    <span class="title-upper">物流信息</span>
                                    <span class="title-capi">所有商品免费</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-mid-inner">
                                <span class="header-mid-inner-icon"><i class="fa fa-money"></i></span>
                                <div class="header-mid-info">
                                    <span class="title-upper">30天退款</span>
                                    <span class="title-capi">100%退款</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-mid-inner">
                                <span class="header-mid-inner-icon"><i class="fa fa-phone"></i></span>
                                <div class="header-mid-info">
                                    <span class="title-upper">付款担保</span>
                                    <span class="title-capi">担保</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-mid-inner">
                                <span class="header-mid-inner-icon"><i class="fa fa-lock"></i></span>
                                <div class="header-mid-info">
                                    <span class="title-upper">联系电话: 0123-456-789</span>
                                    <span class="title-capi">立即订购!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Mid Area  -->