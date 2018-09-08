<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />
<link href="/center/css/crowdfunding.center/my_info.css" rel="stylesheet">
<!-- 定义页面的最新版本 -->
<meta name="description" content="网站简介" />
<!-- 网站简介 -->
<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />
<!-- 搜索关键字 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某经融公司股权众筹站点 - 个人中心</title>


<!-- CSS公共部分 开始 -->
<link href="/center/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="/center/css/style.css" rel="stylesheet">
<!-- CSS公共部分 结束 -->

<link href="/center/css/crowdfunding.css" rel="stylesheet">

</head>
<body>
<!-- top + banner 开始 -->
<div class="container-fluid cfh_top">
  <div class="container">
    <ul class="list-inline">
      <li><a href="index.html" target="_self"></a></li>
      <li><a href="https://nxseason.taobao.com/" target="_blank"></a></li>
      <li id="register" onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)"><a href="" target="_blank">&nbsp;注册&nbsp;</a></li>
      <li id="login" onMouseMove="login_but_bg(3)" onMouseOut="login_but_bg(4)"><a href="member_center.html" target="_blank">&nbsp;登录&nbsp;</a></li>
    </ul>
  </div>
</div>
<div class="container-fluid cfh_banner">
  <div class="container"> <img src="/center/img/index/logo.png">
  </div>
</div>
<!-- top + banner 结束 --> 
<script src="/crowdfunding.js"></script>
<!-- 核心 开始 --> 
<div class="container border1 nopadding margin10">
  <div id="vertical_navigation" class="col-lg-3 background831312 nopadding">
    <div class="dead_pic"><img src="/center/img/member_center/nopic.jpg.png"><br>
      <span class="username">用户名</span></div>
    <div class="usertype"><br>
      会员等级：<img style="margin-right:0px;" src="/center/img/member_center/star.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> </div>
    <div class="menu">
      <div class="menu_title"> 我的信息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick1" class="menu_list_on" onClick="listClick(1);"><img src="/center/img/member_center/left_icon_1.png"> 基本信息</li>  
          <li id="listClick4" class="" onClick="listClick(4)"> <img src="/center/img/member_center/left_icon_3.png"> 修改密码</li>
          
        </ul>
      </div>
    </div>
   
    <div class="menu">
      <div class="menu_title">  </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick11" class="" onClick="listClick(11)"></li>
          <li id="listClick12" class="" onClick="listClick(12)"> </li>
          <li id="listClick13" class="" onClick="listClick(13)"> </li>
        </ul>
      </div>
    </div>
   
  </div>
  <div class="col-lg-9" style="display: both;" id='dbzl'>
    <div class="my_info_title">我的资料<span>
  <button type="button" class="but">签到</button>
  <p>07月29日<br>
    漏签1天</p>
  </span></div>
<div class="my_info_title_3">
  <ul>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">基本资料</li>
    
  </ul>
</div>
<div class="my_info_content">
  <div class="my_info_content_care"> 以下信息都为必填项，请您认真填写 </div>
  <form action="/home/update/{$user.id}" method="post" enctype="multipart/form-data">
  <table class="my_info_content_care_table">
    <tbody>
      <tr>
        <td width="90" align="right" class="color555"> 用户名：{{$user['username']}}</td>
        <td class="color555"><span class="colorCA1E37 margin_left10 font_size12"></span></td>
      </tr>

      <tr>
        <td align="right" class="color555">手机号码：</td>
        <td class="color555"></td>
      </tr>
     
      <tr>
        <td align="right" class="color555">性别：</td>
        <td class="color555"><label>
      
          <label>
            <input type="radio" name="sex" id="" value="男士" checked>
            男士 </label>
          <label class="radio-inline">
            <input type="radio" name="sex" id="" value="女士">
            女士 </label></td>
      </tr>
      
      <tr>
        <td align="right" class="color555">头像：</td>
        <td class="color555"><label>
      
          <label>
            <input type="file" name="pic"></label>
        </td>
      </tr>
    
      <tr>
        <td align="right" class="color555">邮箱：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
          <span class="color959595 margin_left10 font_size12">友好提示：请填写常用邮箱，您忘记密码时可用邮箱找回，有新项目动态时会发邮件给您</span></td>
      </tr>

      <tr>
          <td align="right" class="color555">简介：</td>
          <td class="color555"><textarea rows="8" cols="30" ></textarea></td>
      </tr>

       <tr>
        <td width="90" align="right" class="color555">积分：</td>
        <td class="color555"><span class="colorCA1E37 margin_left10 font_size12"></span></td>
      </tr>

       <tr>
        <td width="90" align="right" class="color555">财富：</td>
        <td class="color555"><span class="colorCA1E37 margin_left10 font_size12"></span></td>
      </tr>
    
      <tr>
        <td align="center" class="color555" colspan="2"><input class="my_info_content_care_table_submit" name="" type="submit" value="保    存"></td>
      </tr>
    </tbody>
  </table>
</form>
</div>
</div>

<div class="col-lg-9"  id="dingbo" style="display: none;">
    <iframe name="left" id="crowdfunding_iframe" src="/center/crowdfunding.center/make_password.html" frameborder="false" scrolling="no" style="border:none;" width="100%" height="1045" allowtransparency="true"></iframe>
</div>
<script type="text/javascript">
    function listClick(value){
        if(value == 4){
            $('#dbzl').css('display','none');
            $('#dingbo').css('display','both');
        }
        if(value == 1){
            $('#dbzl').css('display','both');
            $('#dingbo').css('display','none');
        }
    }
</script>

<!-- 核心 结束 -->  

<!-- 版权 开始 -->
<div class="container-fluid cfh_bottom" style="background:white;">
  <div class="container">
    <div class="cfh_bottom_qsss">
      <dl>
        <dt>轻松上手</dt>
        <dd><a href="" target="_blank">如何投资</a></dd>
        <dd><a href="" target="_blank">如何融资</a></dd>
        <dd><a href="" target="_blank">平台协议下载</a></dd>
        <dd><a href="" target="_blank">关于我们</a></dd>
      </dl>
    </div>
    <div class="cfh_bottom_aboutours">
      <dl>
        <dt>关于我们</dt>
        <dd><a href="" target="_blank">股东背景</a></dd>
        <dd><a href="" target="_blank">某某某财富团队</a></dd>
        <dd><a href="" target="_blank">法律服务</a></dd>
        <dd><a href="" target="_blank">招贤纳士</a></dd>
      </dl>
    </div>
    <div class="cfh_bottom_callme">
      <dl>
        <dt class="cfh_bottom_call_me"><span class="glyphicon glyphicon-earphone"></span>&nbsp;***-***-****</a></dt>
        <dd>投资人服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>
        <dd>创业者服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>
        <dd>公司地址：宁夏银川市兴庆区某某街道9527号</dd>
      </dl>
    </div>
    <div class="cfh_bottom_QRcode"> <img src="/center/img/index/bottom_QRcode.png"> <div class="phone">
    <span class="cfh_bottom_Iphone"><img src="/center/img/index/cfh_bottom_IphoneICO.png"><font>APP Store</font></span><img class="cfh_bottom_IphoneICO_last" src="/center/img/index/cfh_bottom_AndroidICO_1.png"><br>
    <span class="cfh_bottom_Iphone"><img src="/center/img/index/cfh_bottom_AndroidICO.png"><font>Android</font></span><img class="cfh_bottom_AndroidICO_last" src="/center/img/index/cfh_bottom_IphoneICO_2.png"></div></div>
  </div>
  <div class="box50"></div>
</div>
<div class="container-fluid background_color545454">
  <div class="container text-center"> © 2015 某某某 All rights reserved | 宁夏某某某金融科技服务有限公司 | 宁ICP备14000922号-2 </div>
</div>
<img id="back_top_jt" class="back_top" onMouseMove="float_call_me(7)" onMouseOut="float_call_me(8)" src="/center/img/index/back_top_jt.png">
<span class="back_top_jt_span">返回顶部</span>
<img id="back_top_wx" class="back_top2" onMouseMove="float_call_me(5)" onMouseOut="float_call_me(6)" src="/center/img/index/back_top_wx.png">
<span class="back_top_wx_span"><img src="/center/img/index/bottom_QRcode.png"></span>
<a href="tencent://message/?uin=666666&Site=&Menu=yes"><img id="back_top_qq" class="back_top3" onMouseMove="float_call_me(3)" onMouseOut="float_call_me(4)" src="/center/img/index/back_top_qq.png"></a>
<span class="back_top_qq_span"><font class="glyphicon glyphicon-hand-right">&nbsp;QQ咨询热线</font></span>
<img id="back_top_call" class="back_top4" onMouseMove="float_call_me(1)" onMouseOut="float_call_me(2)" src="/center/img/index/back_top_call.png">
<span class="back_top_call_span"><font class="glyphicon glyphicon-phone-alt">&nbsp;***-***-****</font></span>
<!-- 版权 结束 --> 

<!-- 结束 --> 
<!-- JS公共部分 开始 --> 
<script src="/center/js/jquery-2.1.1.min.js"></script> 
<script src="/center/js/bootstrap.min.js"></script> 
<script src="/center/js/basics.js"></script> 
<!-- JS公共部分 结束 --> 

<script type="text/javascript">
  
</script>
</body>
</html>