<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>jQuery Contact Form Plugin: FFForm</title>
    <link href="/wenti/css/demo.css" rel="stylesheet" type="text/css">
    <script src="/wenti/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <!--Framework-->
    <script src="/wenti/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/wenti/js/jquery-ui.js" type="text/javascript"></script>
    <!--End Framework-->
     <script src="/wenti/js/jquery.ffform.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#form').ffform({ animation: 'flip', submitButton: '#submit', validationIndicator: '#validation', errorIndicator: '#error', successIndicator: '#success', 'fields': [{ 'id': 'name', required: true, requiredMsg: 'Name is required', type: 'alpha', validate: true, msg: 'Invalid Name' }, { 'id': 'email', required: true, requiredMsg: 'E-Mail is required', type: 'email', validate: true, msg: 'Invalid E-Mail Address' }, { 'id': 'phone', required: false, type: 'custom', validate: false, msg: 'Invalid Phone #' }, { 'id': 'message', required: false, type: 'text', validate: false, msg: ''}] });
        });
    </script>
    <style type="text/css">
        .file {
            position: relative;
            display: inline-block;
            background: #D0EEFF;
            border: 1px solid #99D3F5;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #1E88C7;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
        }
        .file:hover {
            background: #AADFFD;
            border-color: #78C3F3;
            color: #004974;
            text-decoration: none;
        }


    </style>
</head>
<body style="">
   
    <section id="getintouch" class="bounceIn animated">
        <div class="container" style="border-bottom: 0;">
            <h1>
                <span>请回复您的评论</span>
            </h1>
        </div>
        <div class="container">
            <form class="contact" action="/append" method="post" id="form">
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
            <div style="height: 50px;float: both;"></div>
            <div class="row clearfix">
                <div class="ctrl" style="float: right;width: 570px">
                    <textarea name="content" cols="30" rows="10"></textarea>
                </div>
                <div class="lbl"  style="float:left;">
                    <label for="name">
                        回复详情:</label>
                </div>
                
            </div>
       
            <div class="row  clearfix"  style="text-align: right;">
                <div class="span10 offset2">
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="hidden" name="pid" value="{{$pid}}">
                    <input type="submit" class="submit" value="提交">
                </div>
            </div>
            {{csrf_field()}}
            </form>
        </div>
    </section>
    
</body>
</html>

 