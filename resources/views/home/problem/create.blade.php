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
</head>
<body style="">
   
    <section id="getintouch" class="bounceIn animated">
        <div class="container" style="border-bottom: 0;">
            <h1>
                <span>GET STARTED NOW — IT'S FREE!</span>
            </h1>
        </div>
        <div class="container">
            <form class="contact" action="#" method="post" id="form">
            <div class="row clearfix">
                <div class="lbl">
                    <label for="name">
                        提问</label>
                </div>
                <div class="ctrl">
                    <input type="text"  name="title" >
                </div>
            </div>
            <div class="row clearfix">
                <div class="lbl">
                    <label for="email">
                        详细</label>
                </div>
                <div class="ctrl">
                    <input type="text"  name="content">
                </div>
            </div>

            <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="cate_id">
                                @foreach($cate as $v)
                                <option value="{{$v['id']}}">{{$v['cname']}}</option>
                                @endforeach
                            </select>
                        </div>
           </div>
             
          <div class="form-group">
                <label class="col-sm-2 control-label" for="text">上传图片</label>
                <div class="col-sm-6">
                    <tr> 
                      <td><input class="common-text" name="image" size="50"  type="file">
                      </td>
                    </tr>
                    <br/>
                    <p class="help-block"><span><i class="fa fa-info-circle"></i> 图片大小2M以内</span></p>
                </div>
          </div>
           
          
         <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox">匿名
                  </label>
                </div>
              </div>
        </div>

            <div class="row  clearfix">
                <div class="span10 offset2">
                    <input type="submit" name="submit" id="submit" class="submit" value="提交">
                </div>
            </div>
            </form>
        </div>
    </section>
</body>
</html>

 