<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />
<!-- 定义页面的最新版本 -->
<meta name="description" content="网站简介" />
<!-- 网站简介 -->
<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />
<!-- 搜索关键字 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某经融公司股权众筹站点</title>

<!-- Bootstrap -->
<link href="/center/css/crowdfunding.center/my_info.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<script src="/center/js/crowdfunding.js"></script>
<!-- 开始 -->
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
  <form action="/home/center" method="post" enctype="multipart/form-data">
  <table class="my_info_content_care_table">
    <tbody>
      <tr>
        
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
  {{csrf_field}}
</form>

</div>

<!-- 结束 --> 
<script src="/center/js/jquery-2.1.1.min.js"></script>  
<script src="/center/js/my_info.js"></script>
<script src="/center/js/jquery.cityselect.js"></script> 

<script type="text/javascript">
// JavaScript Document
$(document).ready(function(){
	$("#my_city").citySelect({
		prov:"北京",
		nodata:"none"
	});
});
</script>
</body>
</html>