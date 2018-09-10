<!doctype html>
        <!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
        <!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
        <!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
        <!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
        <head>
                <!-- META TAGS -->
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>熊猫滚滚</title>

                <link rel="shortcut icon" href="images/favicon.png" />


                

                <!-- Style Sheet-->
                <link rel="stylesheet" href="style.css"/>
                <link rel='stylesheet' id='bootstrap-css-css'  href='/home/css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href='/home/css/responsive5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href='/home/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href='/home/css/main5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href='/home/css/custom5152.html?ver=1.0' type='text/css' media='all' />


                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script></script>
                <![endif]-->

        </head>

        <body>

                <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <span class="tag-line" style="font-size:20px">熊猫问答一款高效的问答网站</span>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li><a href="/home/problemlist">首页</a></li>
                                                                <li><a href="/home/problemlist">问题列表</a></li>
                                                                
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
                                <a href="/home/logout">
                                    <i class="icon-signout"></i>
                                    退出
                                </a>
                            </li>
                            
                        </ul>@endif
                                                                </li>
                                                                <li>
                                                                        @if(!Session::has('id'))<a href="/home/register">注册</a>
                                                                        @endif
                                                                </li>
                                                                <li><a href="/fankui/create">反馈</a></li>
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>
                <!-- End of Header -->

                <!-- Start of Search Wrapper -->
                <div class="search-area-wrapper">
                        <div class="search-area container">
                                 @if(Session::has('success'))
                                    <div class=" am-u-sm-9" style="padding:0px;margin:0px auto;" id="xiaoshi">
                                        <div class="dashboard-stat green">
                                                <div class="desc" style="font-size:30px; text-align: center;line-height:95px;color:green;background-color:#eee">{{Session::get('success')}} </div>
                                        </div>
                                    </div>
                                    @endif
                                <h3 class="search-header">有一个问题?</h3>
                                <p class="search-tag-line">如果您有任何疑问，你可以在下面询问或输入您要找的内容!</p>

                                <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off">
                                        <input class="search-term required" type="text" id="s" name="s" placeholder="输入你想输入的问题" style="width:750px">
                                        <input class="search-btn" type="submit" value="搜索答案" />&nbsp;&nbsp;&nbsp;
                                        <input class="search-btn" type="submit" value="我要提问" onclick='window.open("/home/problem/create")'>
                                        <div id="search-error-container"></div>
                                </form>
                                <script>
                                  var a = document.getElementById('xiaoshi');
                                  setTimeout(function(){
                                      a.style.display = 'none';
                                  },2000);
                              </script>
                        </div>
                </div>
                <!-- End of Search Wrapper -->