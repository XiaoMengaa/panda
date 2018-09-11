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
                                <span>友情链接修改</span>
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
                                    <li class='active'>友情链接修改</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                   
                        <div class='box-content'>
                            <form action="/admin/link/{{$link['id']}}" method="post" class='form form-horizontal validate-form' style='margin-bottom: 0;' enctype="multipart/form-data">
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>链接名称</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='name'  type='text' value="{{$link['name']}}">
                                    </div>
                                </div>
                                
                                <div class='control-group'>
                                    <label class='control-label'>链接地址</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='6' data-rule-password='true' data-rule-required='true' id='validation_password' name='url'  type='text' value="{{$link['url']}}">
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label'>链接图片</label>
                                    <div class='controls'>
                                        <img src="{{$link['lpic']}}"style="width:60px">
                                        <input data-rule-minlength='6' data-rule-password='true' data-rule-required='true' type="file" name="lpic" value="选择图片" >
                                    </div>
                                </div>
                                    
                                
                                <div class='form-actions' style='margin-bottom:0'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='icon-save'></i>
                                        提交
                                    </button>
                                </div>
                                {{csrf_field()}}
                                {{method_field('PUT')}}
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
