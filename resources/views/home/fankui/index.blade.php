<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>意见反馈</title>
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
        <meta content="yes" name="apple-mobile-web-app-capable"/>
        <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
        <meta content="telephone=no" name="format-detection"/>
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/home-fankui/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section class="aui-flexView">
            <header class="aui-navBar aui-navBar-fixed">
                <a href="javascript:;" class="aui-navBar-item">
                    <i class="icon icon-sys"></i>
                </a>
            </header>
			<form action="/home/fankui/create" method="post">
            <section class="aui-scrollView">
                <div class="aui-view-box" style="width:500px;margin:0px auto" >
                    <div class="aui-view-box-item">
                        <h2>您的问题或建议:</h2>
                        <textarea>输入个人意见反馈,字数在200字以内</textarea>
                    </div>
                    <div class="aui-view-box-item">
                        <h2>您的联系方式:</h2>
                        <input type="text" placeholder="输入电话号码">
                    </div>
                    <div class="aui-view-box-item">
                        <p>留下您的联系方式,以便我们了解问题后及时反馈和结果，紧急问题请联系客服。</p>
                    </div>
                    <div class="aui-btn-submit">
                        <button>提交建议</button>
                    </div>
                </div>
            </section>
        </section>
        {{csrf_field()}}
		</form>
    </body>
</html>
