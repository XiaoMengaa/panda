<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>反馈</title>
        <link rel="stylesheet" href="/home-login/layui/css/layui.css">
        <link rel="stylesheet" href="/home-login/css/login.css">
    </head>

    <body>
        <div class="layui-carousel video_mask" id="login_carousel">
            <div carousel-item>
                <div class="carousel_div1"></div>
                <div class="carousel_div2"></div>
                <div class="carousel_div3"></div>
            </div>
            <div class="login layui-anim layui-anim-up">
         
                <fieldset class="layui-elem-field layui-field-title">
                    <legend class="text-white">反馈</legend>
                </fieldset>
                <form action="/fankui" method="post">
            <section class="aui-scrollView">
                <div class="aui-view-box" style="width:200px;margin:0px auto" >
                    <div class="aui-view-box-item">
                        <h2>您的问题或建议:</h2>
                        <input type="text" name="content" placeholder="输入个人意见反馈,字数在30字以内" style="width: 200px;height: 50px" >
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
              
                
            </div>
        </div>

        <script type="text/javascript" src="/home-login/js/jquery.min.js"></script>
        <script type="text/javascript" src="/home-login/layui/layui.all.js"></script>
        <script type="text/javascript" src="/home-login/js/login.js"></script>
    </body>

</html>