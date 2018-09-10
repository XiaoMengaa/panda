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
                    @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat green">
                        <div class="desc" style="text-align: center;line-height:30px;color:green">{{Session::get('success')}} </div>
                </div>
            </div>
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:30px;color:white;color:red">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif
                <div class="layui-form layui-form-pane">
                    <div class="layui-form">
                        <div class="layui-form-item">
                            <input class="layui-input" name="username" placeholder="请输入用户名" type="text" maxlength="11" autofocus="autofocus" autocomplete="off">
                            <span></span>
                        </div>
                        <div class="layui-form-item">
                            <input class="layui-input" id="password" placeholder="请输入密码" name="password" type="password" maxlength="20" lay-verify="required|pwd" autocomplete="off">
                            <span></span>
                        </div>
                        <div class="layui-form-item">
                            <input class="layui-input" id="" placeholder="请再次输入密码" name="repassword" type="password"  maxlength="20" lay-verify="required|rePwd" autocomplete="off">
                            <span></span>
                        </div>
                        <div class="layui-form-item">
                            <button  type="submit" class="login_btn layui-btn layui-btn-radius layui-btn-normal">立即注册</button>
                           {{csrf_field()}}
                    </form>
                     <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

                        <script>
                            var CUSER = false;
                            var CPASS = false;
                            var CREPASS = false;


        //用户名
        $('input[name=username]').focus(function(){
            //边框颜色
            $(this).addClass('active');
            //提示语显示
            $(this).next().show().html('输入非空白字符');
        }).blur(function(){
            //移出激活状态的class active
            $(this).removeClass('active');
            //正则判断
            var v = $(this).val();
            //声明正则
            var reg = /^\S{1,18}$/;
            //判断
            if(!reg.test(v)){
                //边框
                $(this).addClass('error');
                //文字提醒
                $(this).next().html('<span style="color:red">格式不正确</span>').show();
                CUSER = false;
            }else{
                var input = $(this);
                //发送 AJAX 请求检测用户名是否已经存在
                // $.post('./check-user-exists.php', {username: v}, function(data){
                // })
                $.ajax({
                    url: '/check-user-exists.php',
                    type: 'post',
                    data: {username: v},
                    success: function(data){
                        console.log(data);
                        if(data == '0'){
                            //边框
                            input.addClass('error');
                            //文字提醒
                            input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();
                            CUSER = false;
                        }else{
                            input.removeClass('error');
                            input.next().html('<span style="color:blue">此用户名可用</span>').show();
                            CUSER = true;
                        }
                    },
                    async: false
                })


                
            }
        })

        //密码
                            $('input[name=password]').focus(function(){
                                //边框颜色
                                $(this).addClass('active');
                                //提示语显示
                                $(this).next().show().html('6~20非空白字符');
                            }).blur(function(){
                                $(this).removeClass('active');
                                //获取用户的输入值
                                var v = $(this).val();
                                //正则
                                var reg = /^\S{6,20}$/;

                                if(!reg.test(v)) {
                                    //边框
                                    $(this).addClass('error');
                                    //文字提醒
                                    $(this).next().html('<span style="color:red">格式不正确</span>').show();
                                    CPASS = false;
                                }else{
                                    //边框
                                    $(this).removeClass('error');
                                    //文字提醒
                                    $(this).next().html('<span style="color:blue">成功</span>').show();
                                    CPASS = true;

                                }
                            })

                            //确认密码
                            $('input[name=repassword]').focus(function(){
                                //边框颜色
                                $(this).addClass('active');
                                //提示语显示
                                $(this).next().show().html('再次输入密码');
                            }).blur(function(){
                                $(this).removeClass('active');
                                //获取用户的输入值
                                var v = $(this).val();

                                if(v != $('input[name=password]').val()) {
                                    //边框
                                    $(this).addClass('error');
                                    //文字提醒
                                    $(this).next().html('<span style="color:red">两次密码不一致</span>').show();
                                    CREPASS = false;
                                }else{
                                    //边框
                                    $(this).removeClass('error');
                                    //文字提醒
                                    $(this).next().html('<span style="color:blue">正确</span>').show();
                                    CREPASS = true;

                                }
                            })

                            //表单的提交事件
                            $('form').submit(function(){
                                //触发错误提醒
                                $('input').trigger('blur');
                                console.log(CUSER);
                                //判断输入值是否都正确
                                if(CUSER  && CPASS && CREPASS) {
                                    return true;
                                }else{
                                    return false;
                                }
                            });
                        </script>
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