<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>请您登录</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/home-login/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/home-login/assets/css/form-elements.css">
        <link rel="stylesheet" href="/home-login/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/home-login/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/home-login/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/home-login/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/home-login/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/home-login/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">点击登录</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only"></span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label">请先登录</h3>
        				<p>填写以下信息,获得即时访问</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="/home/problemlist" method="post" class="registration-form">
                            @if(Session::has('success'))
                            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                                <div class="dashboard-stat green">
                                        <div class="desc" style="text-align: center;line-height:95px;color:red">{{Session::get('success')}} </div>
                                </div>
                            </div>
                            @endif

                            @if(Session::has('error'))
                            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                                <div class="dashboard-stat red">
                                        <div class="desc" style="text-align: center;line-height:95px;color:white;color:red">{{Session::get('error')}} </div>
                                </div>
                            </div>
                            @endif
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-first-name">账号:</label>
	                        	<input type="text" name="username" placeholder="账号" class="form-first-name form-control" id="form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-last-name">密码:</label>
	                        	<input type="text" name="password" placeholder="密码" class="form-last-name form-control" id="form-last-name">
	                        </div>
	                        <button type="submit" class="btn">登录</button>
                             {{csrf_field()}}
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="/home-login/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/home-login/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/home-login/assets/js/jquery.backstretch.min.js"></script>
        <script src="/home-login/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/home-login/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>