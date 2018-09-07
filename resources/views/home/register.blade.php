<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>注册 - 熊猫问答系统</title>
        <link rel="shortcut icon" href="/homezhuce/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/homezhuce/layui/css/layui.css">
        <link rel="stylesheet" href="/homezhuce/css/register.css">
    </head>

    <body style="background-image: url(/homezhuce/img/login-bg2.jpg);">
        <div class="layui-main user">
            <div class="layui-clear main">
                <div class="layui-logo">
                    <a href="#" target="_blank"><img src="/image/panda.jpg" width="80px" /></a>
                </div>
                <fieldset class="layui-elem-field layui-field-title">
                    <legend class="text-white">熊猫滚滚问答注册</legend>
                </fieldset>
                <form action="/home/create" method="post">
                <div class="layui-form layui-form-pane">
                    <div class="layui-form">
                        <div class="layui-form-item">
                            <input class="layui-input" name="username" placeholder="请输入用户名" type="text" maxlength="11" autofocus="autofocus" autocomplete="off">
                        </div>
                        <div class="layui-form-item">
                            <input class="layui-input" name="password" placeholder="请输入密码" type="password" maxlength="16" lay-verify="required|pwd" autocomplete="off">
                        </div>
                        <div class="layui-form-item">
                            <input class="layui-input" placeholder="请再次输入密码" type="password" maxlength="16" lay-verify="required|rePwd" autocomplete="off">
                        </div>
                       
                     
                        <div class="layui-form-item" style="float: left;margin-left: -10px;">
                            <input lay-filter="agreen-checkbox" title="我同意" type="checkbox" lay-skin="primary" checked>
                            <a href="#" target="_blank">《注册协议》</a>
                        </div>
                        <div class="layui-form-item">
                            <button  type="submit" class="login_btn layui-btn layui-btn-radius layui-btn-normal" lay-submit lay-filter="register">立即注册</button>
                           {{csrf_field()}}
               </form>
                        </div>
                        <div>
                            <small class="text-white">已经有账户了？</small>
                            <a href="/home/login">点此登录</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="/homezhuce/js/jquery.min.js"></script>
    <script type="text/javascript" src="/homezhuce/layui/layui.all.js"></script>
    <script type="text/javascript" src="/homezhuce/js/register.js"></script>

</html>