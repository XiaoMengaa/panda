<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>提问问题</title>
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
                <span>请输入您要提交的问题</span>
            </h1>
        </div>

        <div class="container">
            <form class="contact" action="/problem" method="post" enctype="multipart/form-data">
            <div class="am-form-group">
                        <div class="am-u-sm-9" style="float: right;height: 29px">
                            <select data-am-selected="{searchBox: 1}" name="cate_id" style="height:29.6px;width: 100px">
                                @foreach($cate as $v)
                                <option value="{{$v['id']}}">{{$v['cname']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="user-phone" class="am-u-sm-3 am-form-label" style="float: right">问题分类:</label>
                        
            </div>
            <div style="height: 50px;float: both;"></div>
            <div class="row clearfix">
                <div class="ctrl" style="float: right;width: 592px">
                    <input type="text" name="title">
                </div>
                <div class="lbl"  style="float:left;">
                    <label for="name">
                        您的问题:</label>
                </div>
                
            </div>
            <div class="row clearfix">
                <div class="ctrl" style="float: right;width: 592px">
                    <textarea class="form-control" rows="8" name="content"></textarea>
                </div>
                <div class="lbl"  style="float:left;">
                    <label for="name" >
                        问题介绍:</label>
                </div>
                
            </div>

             
          <div class="form-group" style="text-align: right;">
            <a href="javascript:;" class="file">请上传问题相关图片
                <input type="file" name="image" id="">
            </a>
          </div>
           
          

            <div class="row  clearfix"  style="text-align: right;">
                <div class="span10 offset2">
                    <input type="submit" name="submit" class="submit" value="提交">
                </div>
            </div>
            {{csrf_field()}}
            </form>
        </div>
    </section>
    <script>
        $(".a-upload").on("change","input[type='file']",function(){
            var filePath=$(this).val();
            if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
                $(".fileerrorTip").html("").hide();
                var arr=filePath.split('\\');
                var fileName=arr[arr.length-1];
                $(".showFileName").html(fileName);
            }else{
                $(".showFileName").html("");
                $(".fileerrorTip").html("您未上传文件，或者您上传文件类型有误！").show();
                return false 
            }
        })
    </script>

</body>
</html>

 