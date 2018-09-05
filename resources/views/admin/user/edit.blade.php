@extends('admin.index')
@section('content')
<section id='content'>
    <div class='container-fluid'>
        <div class='row-fluid' id='content-wrapper'>
            <div class='span12'>
                <div class='row-fluid'>
                    <div class='span12'>
                        <div class='page-header'>
                            <h1 class='pull-left'>
                                <i class='icon-ok'></i>
                                <span>用户编辑</span>
                            </h1>
                            <div class='pull-right'>
                                <ul class='breadcrumb'>
                                    <li>
                                        <a href="index.html"><i class='icon-bar-chart'></i>
                                        </a>
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li>
                                        Forms
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>用户编辑</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                   
                        <div class='box-content'>
                            <form action="/admin/user/{{$user['id']}}" method="post" class='form form-horizontal validate-form' style='margin-bottom: 0;' />
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>姓名</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' id='validation_name' name='username' placeholder='Name' type='text' value="{{$user['username']}}" />
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>性别</label>
                                    <div class='controls'>
                                       <input name="sex" type="radio" @if($udetails) @if($udetails->sex == "m") checked @endif @endif value="m" />男       
                                        <input name="sex" type="radio"  @if($udetails) @if($udetails->sex == "w") checked @endif @endif value="w" />女
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' data-rule-required='true' for='validation_name'>头像</label>
                                    <div class='controls'>
                                        <input type="file" name="pic" id="file"  /><img src="@if($udetails) 
                                        {{$udetails->pic}}@endif">
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>简介</label>
                                    <div class='controls'>
                                        <textarea id="txtCon" rows="6" cols="9"  name="synopsis"value="">@if($udetails){{$udetails->synopsis}}@endif</textarea>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>手机号</label>
                                    <div class='controls'>
                                        <input data-rule-required='true'   id='' name='phone' placeholder='Name' type='text' maxlength="11" value="@if($udetails){{$udetails->phone}}@endif" />
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>邮箱</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='email' placeholder='Name' type='text' value="@if($udetails){{$udetails->email}}@endif"/>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>权限</label>
                                    <div class='controls'>
                                        <input name="jurisdiction" type="radio" @if($udetails) @if($udetails->jurisdiction == "1") checked @endif @endif value="1" />管理员      
                                        <input name="jurisdiction" type="radio"@if($udetails) @if($udetails->jurisdiction == "2") checked @endif @endif value="2" />普通用户
                                    </div>
                                </div>
                                
                                {{method_field('PUT')}}                         
                                  {{csrf_field()}}
                            
                                <div class='form-actions' style='margin-bottom:0'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='icon-save'></i>
                                        提交
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>




@endsection