<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>意见反馈</title>
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <link href="/fankui/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/home-login/layui/css/layui.css">
        <link rel="stylesheet" href="/home-login/css/login.css">
    </head>
    <body style="background: url('/home-login/img/login-bg2.jpg');">
     <div>    
        <section class="aui-flexView">
            <header class="aui-navBar aui-navBar-fixed">
                <div class="aui-center">
                    <span class="aui-center-title">意见反馈</span>
                </div>
                <a href="javascript:;" class="aui-navBar-item">
                    <i class="icon icon-sys"></i>
                </a>
            </header>
                <form action="/index.php/fankui" method="post">
                    <div class="aui-view-box">
                        <div class="aui-view-box-item">
                            <h2>您的问题或建议:</h2>
                            <textarea name="content" id="fankui"></textarea>
                        </div>
                        <div class="aui-view-box-item">
                            <p>谢谢您留下宝贵的建议,我们会尽快采集!</p>
                        </div>
                        {{csrf_field()}}
                        <div class="aui-btn-submit" id="hh">
                            <button>提交建议</button>
                        </div>
                    </div>
                </form>
                 <script type="text/javascript">
               var hh=document.getElementById("hh");
                 hh.onclick = function(){
               
               var text=document.getElementById("fankui").value;//通过id获取需要验证的表单元素的值
                   if(text==""){//当上面获取的值为空时
                     alert("此站是我开,此码是我编,要想从此过,留下你的意见！");//弹出提示
                     return false;//返回false（不提交表单）
                   }else{
                    return true;//提交表单
                   }
            }
               
            </script>
            <footer class="aui-footer aui-footer-fixed">
                <p>
                    <span>
                        遇到问题了？ <em>请拨打在线客服 137-3698-2251</em>
                    </span>
                </p>
            </footer>
        </section>
    </div>

</body>
</html>