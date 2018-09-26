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
<title>熊猫滚滚 - 个人中心</title>


<!-- CSS公共部分 开始 -->
<link href="/center/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="/center/css/style.css" rel="stylesheet">
<!-- CSS公共部分 结束 -->

<link href="/center/css/crowdfunding.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/make_head.css" rel="stylesheet">

<link href="/center/css/bootstrap.min.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/integration_rule.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/investment_inquiry.css" rel="stylesheet">

</head>
<body>
<!-- top + banner 开始 -->
<div class="container cfh_top">
  <div class="container">
    <li id="register" onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)" style="float:left;list-style-type: none;font-size: 18px" ><a href="/home/problemlist" target="_self">首页</a></li>
    <ul class="list-inline">
      <li id="register" onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)">&nbsp;{{$user['username']}}&nbsp;</li>
      <li id="register" onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)"><img src="{{$udetails['pic']}}" style="width:40px;height:40px"></li>
   </ul>
  </div>
</div>

   @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat green">
                        <div class="desc" style="font-size: 40px;text-align: center;line-height:95px;color:green">{{Session::get('success')}} </div>
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

</div>
<!-- top + banner 结束 --> 
<script src="/crowdfunding.js"></script>
<!-- 核心 开始 --> 
<div class="container border1 nopadding margin10">
  <div id="vertical_navigation" class="col-lg-3  nopadding">
    <div class="dead_pic"><img src="@if($udetails){{$udetails->pic}}@endif"><br>
      <span class="username">{{$user['username']}}</span></div>
  
    <div class="menu">
      <div class="menu_title"> 我的信息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick1" class=""  onClick="listClick(1);"><img src="/center/img/member_center/left_icon_1.png"> 基本信息</li>  
          <li id="listClick4" class=""  onClick="listClick(4)"> <img src="/center/img/member_center/left_icon_2.png">修改头像</li>
          <li id="listClick2" class="" onClick="listClick(2)"> <img src="/center/img/member_center/left_icon_3.png">修改密码 </li>
          <li id="listClick13" class="" onClick="listClick(13)"> <img src="/center/img/member_center/left_icon_13.png"> 兑换记录</li>
          <li id="listClick9" class="" onClick="listClick(9)"> <img src="/center/img/member_center/left_icon_9.png">我的问题</li>
          <li id="listClick6" class="" onClick="listClick(6)"><img src="/center/img/member_center/left_icon_6.png">我的回答</li>
          
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
    <div class="my_info_title">基本资料</div>

<div class="my_info_title_3">
  <ul>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">我的资料</li>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">我的积分{{$user->wealths->integral}}</li>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">财富值{{$user->wealths->riches}}</li>
    
  </ul>
</div>
<div class="my_info_content">
  <div class="my_info_content_care"> 以下信息都为必填项，请您认真填写 </div>
  <form action="/home/{{$user['id']}}/update" method="post" enctype="multipart/form-data">

  <table class="my_info_content_care_table">
    <tbody>


      <tr>
        <td align="right" class="color555">用户名：</td>
        <td class="color555" ><span class=" smargin_left10 font_size14">{{$user['username']}}</span></td>
      </tr>

      <tr>
        <td align="right" class="color555">手机号：</td>
        <td class="color555"><label>
      
          <label>
            <input type="text" name="phone" style="height: 27px" value="@if($udetails){{$udetails->phone}}@endif"> 
             </label>
          </td>
        
      </tr>
     
      <tr>
        <td align="right" class="color555">性别：</td>
        <td class="color555"><label>
      
          <label>
            <input type="radio" name="sex" @if($udetails) @if($udetails->sex == "m") checked @endif @endif value="m"  >
            男士 </label>
          <label class="radio-inline">
            <input type="radio" name="sex" @if($udetails) @if($udetails->sex == "w") checked @endif @endif value="w">
            女士 </label></td>
      </tr>
      <tr>
        <td align="right" class="color555">邮箱：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="email" type="email" value="@if($udetails){{$udetails->email}}@endif">
        </td>
      </tr>

      <tr>
          <td align="right" class="color555">简介：</td>
          <td class="color555"><textarea rows="3" cols="26" name="synopsis"> @if($udetails){{$udetails->synopsis}}@endif</textarea></td>
      </tr>
      <tr>
        <td  class="color555" colspan="2"><input class="my_info_content_care_table_submit" name="" type="submit" value="保    存" style="margin-left:200px;margin-top:20px" ></td>
      </tr>
       {{csrf_field()}}
    </tbody>
  </table>
  </form>
</div>
</div>



<div class="col-lg-9"  id="ding" style="display:none ;">
   <div class="my_info_title">修改密码</div>
<div class="my_info_title_3">
  <ul>
     <li id="listClick_4" onClick="listClick(4)" style="border-bottom: 1px solid #C40521; color: #C40521;">修改密码</li>
  </ul>
</div>

<form action="/xgmmaaw" method="post">
<div class="my_info_content">
  <div class="my_info_content_care"></div>
  <table class="my_info_content_care_table">
    <tbody>
      <tr>
        <td width="300" align="right" class="color555">旧密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="jiupass" type="password">
          <span class="colorCA1E37 margin_left10 font_size12" ></span></td>
      </tr>
      <tr>
        <td align="right" class="color555">新密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="password" type="password">
          <span class="colorCA1E37 margin_left10 font_size12"></span></td>
      </tr>
      <tr>
        <td align="right" class="color555">确认新密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="pass" type="password">
          <span class="colorCA1E37 margin_left10 font_size12"></span></td>
      </tr>
     
      <tr>
        <td align="center" class="color555" colspan="2"><button class="my_info_content_care_table_submit">提交</button></td>
      </tr> 
    </tbody>
  </table>
  </div>
  {{csrf_field()}}
</form>
</div>

<div class="col-lg-9"  id="dingbo" style="display:none ;">
  <form action="/touxiang/{{session::get('id')}}" method="post" enctype="multipart/form-data">
  <div class="make_head_title">修改头像</div>
  {{csrf_field()}}
  <div class="make_head_content">
    <div style="width:490px;height: 434px;background: #F7FAFB;">
    <label><div style="background:url('/center/img/2.png');width: 230px;height:64px;margin-left:130px;margin-top: 130px;cursor:pointer;"><input type="file" style="opacity:0;" name="pic"></div></label>
    <div align="center" class="color555" colspan="2">
      <button class="my_info_content_care_table_submit">提交</button>
    
  </div>
  </div>
  </div>
  </form>
</div>


<div class="col-lg-9"  id="jifen" style="display:none ;">
<div class="my_info_title" >兑换记录
 </div>
<div class="my_info_title_3">
  <ul>
    
  </ul>
</div>
<div class="my_info_content">
  <table class="table table-bordered">
    <tbody>
      <tr class="active">
        <th class="text-center">商品名</th>
        <th class="text-center">所需财富值</th>
        <th class="text-center">状态</th>
      </tr>
    @foreach($dh as $v)
      <tr>
          <td class="am-hide-sm-only" style="text-align:center">{{$v->commodity['cname']}}</td>
          <td class="am-hide-sm-only" style="text-align:center">{{$v->commodity['money']}}</td>
          <td class="am-hide-sm-only" style="text-align:center">@if($v['rstate']==0) 未收货 <button><a href="/home/qrsh?id={{$v['id']}}">确认收货</a> </button>@else 已收货 @endif</td>
           {{csrf_field()}}
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>


<div class="col-lg-9"  id="wenti" style="display:none ;">
<div class="my_info_title">我的问题</div>
<div class="my_info_title_3">
  <ul>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">全部问题</li>
  </ul>
</div>
<div class="my_info_content">
     <table class="table table-bordered">
    <tbody>
      @foreach($problem as $val)
      <tr class="active">
       <th class="text-center"><a href="/home/problem/{{$val->id}}">{{$val['title']}}</a></th>
      </tr>
      {{csrf_field()}}
      @endforeach
    </tbody>
  </table>
 </div>
</div>



<div class="col-lg-9"  id="huida" style="display:none ;">
<div class="my_info_title">我的回答</div>
<div class="my_info_title_3">
  <ul>
    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">回答</li>
  </ul>
</div>
<div class="my_info_content">
  <table class="table table-bordered">
    <tbody>
      <tr class="active">
        
        <th class="text-center">回答内容</th>
        <th class="text-center">回答状态</th>
        <th class="text-center">点赞数</th>
        <th class="text-center">被点赞数</th>
        
      </tr>
    @foreach($reply as $va)
      <tr>
     
          <td class="am-hide-sm-only" style="text-align:center">{{$va['content']}}</td>
          <td class="am-hide-sm-only" style="text-align:center">@if($va['state']==0)采纳 @else 已采纳 @endif</td>
          <td class="am-hide-sm-only" style="text-align:center">{{$va['fabulous']}}</td>
          <td class="am-hide-sm-only" style="text-align:center">{{$va['tread']}}</td>
      </tr>
    {{csrf_field()}}
    @endforeach

    </tbody>
  </table>
 
</div>
</div>


<script type="text/javascript">
    function listClick(value){
        if(value == 4){
            $('#wenti').css('display','none');
            $('#huida').css('display','none');
            $('#dbzl').css('display','none');
            $('#jifen').css('display','none');
            $('#dingbo').css('display','');
            $('#ding').css('display','none');
            $('#listClick1').attr('class','');
            $('#listClick2').attr('class','');
            $('#listClick4').attr('class','menu_list_on');
            $('#listClick13').attr('class','');
            $('#listClick6').attr('class','');

        }
        if(value == 1){
            $('#wenti').css('display','none');
            $('#huida').css('display','none');
            $('#dbzl').css('display','');
            $('#jifen').css('display','none');
            $('#dingbo').css('display','none');
            $('#ding').css('display','none');
            $('#listClick1').attr('class','menu_list_on');
            $('#listClick4').attr('class','');
            $('#listClick2').attr('class','');
            $('#listClick13').attr('class','');
            $('#listClick6').attr('class','');
           
        }
        if(value == 2){
            $('#wenti').css('display','none');
            $('#huida').css('display','none');
            $('#dbzl').css('display','none');
            $('#jifen').css('display','none');
            $('#dingbo').css('display','none');
            $('#ding').css('display','');
            $('#listClick1').attr('class','');
            $('#listClick4').attr('class','');
            $('#listClick2').attr('class','menu_list_on');
            $('#listClick13').attr('class','');
             $('#listClick6').attr('class','');
           
        }

        if(value == 13){
            $('#wenti').css('display','none');
            $('#huida').css('display','none');
            $('#dbzl').css('display','none');
            $('#dingbo').css('display','none');
            $('#ding').css('display','none');
            $('#jifen').css('display','');
            $('#listClick1').attr('class','');
            $('#listClick4').attr('class','');
            $('#listClick2').attr('class','');
            $('#listClick6').attr('class','');
            $('#listClick9').attr('class','');
            $('#listClick13').attr('class','menu_list_on');
        }


        if(value == 9){
            $('#wenti').css('display','');
            $('#huida').css('display','none');
            $('#dbzl').css('display','none');
            $('#dingbo').css('display','none');
            $('#ding').css('display','none');
            $('#jifen').css('display','none');
            $('#listClick1').attr('class','');
            $('#listClick4').attr('class','');
            $('#listClick2').attr('class','');
            $('#listClick13').attr('class','');
            $('#listClick6').attr('class','');
            $('#listClick9').attr('class','menu_list_on');
            
        }

         if(value == 6){
            $('#huida').css('display','');
            $('#wenti').css('display','none');
            $('#dbzl').css('display','none');
            $('#dingbo').css('display','none');
            $('#ding').css('display','none');
            $('#jifen').css('display','none');
            $('#listClick1').attr('class','');
            $('#listClick4').attr('class','');
            $('#listClick2').attr('class','');
            $('#listClick13').attr('class','');
            $('#listClick9').attr('class','');
            $('#listClick6').attr('class','menu_list_on');
        }


    }
</script>

<!-- 核心 结束 -->  

<!-- 开始 -->


<!-- 结束 --> 

<!-- 版权 开始 -->
<div class="container-fluid cfh_bottom" style="background:#CCCCCC">
  <div class="container">
  </div>
  <div class="box50"></div>
</div>




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