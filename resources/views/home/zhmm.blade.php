<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>找回密码</title>
		<link rel="stylesheet" href="/zhmm/css/reset.css" />
		<link rel="stylesheet" href="/zhmm/css/common.css" />
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					
					<div class="login_form">
						<div class="login_title">
							找回密码
						</div>
						<form action="/home/xmm" method="post">
						
							<div class="form_text_ipt">

								<input name="username" type="text" placeholder="用户名">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							
							
						   {{csrf_field()}}
							<div class="form_btn">
								<button>下一步</button>
							</div>

						</form>
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a href="#">QQ登录</a>
								<a href="#">微信登录</a>
								<a href="#">微博登录</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
	</body>
</html>
