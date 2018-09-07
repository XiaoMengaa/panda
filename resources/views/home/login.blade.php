<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>登录</title>
        <link rel="shortcut icon" href="/home-login/img/favicon.ico" type="image/x-icon" />
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

        <form role="form" action="/home/dologin" method="post" class="registration-form">
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
            <div class="login layui-anim layui-anim-up">
                <fieldset class="layui-elem-field layui-field-title">
                    <legend class="text-white">登录</legend>
                </fieldset>
                 
                <div class="layui-form">
                    <div class="layui-form-item">
                        <input type="text" id="account" maxlength="18" placeholder="请输入用户名或者账号" class="layui-input" name="username">
                    </div>
                    <div class="layui-form-item">
                        <input type="password" id="password" lay-verify="required" maxlength="18" placeholder="请输入密码" autocomplete="off" class="layui-input" name="password">
                    </div>

                    <button class="login_btn layui-btn layui-btn-radius layui-btn-normal" lay-submit lay-filter="登录">登录</button>
                    <strong class="text-white">还没有账号？ <a href="/home/register" style="color: cornflowerblue;">立即注册&raquo;</a></strong>
                     {{csrf_field()}}
                </form>  
                </div>
                <hr class="layui-bg-gray">
                <div class="layui-footer text-white">
                    <!-- 底部固定区域 -->
                    &copy;2018- 熊猫滚滚有限公司版权所有
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/home-login/js/jquery.min.js"></script>
        <script type="text/javascript" src="/home-login/layui/layui.all.js"></script>
        <script type="text/javascript" src="/home-login/js/login.js"></script>
    </body>

</html>