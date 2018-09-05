 <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<style>

</style>
<form class="form-horizontal" action="/problem" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">提问</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">详细</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="content">
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
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
  {{csrf_field()}}
</form>
