<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员登录</title>
<link rel="stylesheet" type="text/css" href="/login/css/style.css" />
<link rel="stylesheet" type="text/css" href="/login/css/body.css"/> 
</head>
<body>
<div class="container">
	<section id="content">
		
		<form method="post"  action="/admin/login">
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
			<h1>管理员登录</h1>
			<div>
				<input type="text" placeholder="账号" name="username" />
			</div>
			<div>
				<input type="password" placeholder="密码" name="password" />
			</div>
			 <div class="">
				<span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>			</div> 
				{{csrf_field()}}
			<div>
				<!-- <input type="submit" value="Log in" /> -->
				<input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>
				<a href="#">忘记密码?</a>
				<!-- <a href="#">Register</a> -->
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div>
<!-- container -->


<br><br><br><br>
<div style="text-align:center;">
<p>来源:熊猫滚滚 <a href="#" target="_blank" title="模板之家">熊猫滚滚</a> - Collect from <a href="#" title="网页模板" target="_blank">熊猫滚滚</a></p>
</div>
</body>
</html>