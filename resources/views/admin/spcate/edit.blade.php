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
                                <span>商品分类</span>
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
                                 
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>商品分类</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header blue-background'>
                            <div class='title'>分类修改</div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div>
                        <div class='box-content'>
                            <form class='form form-horizontal validate-form' action="/admin/spcate/{{$spfl['id']}}" style='margin-bottom: 0;' / method="post">
                                <br>
                             
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>分类名:</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' value="{{$spfl->sname}}"  name='sname' style="width:200px;height:30px" placeholder='请输入分类名' type='text' />
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
                <div class='group-header'>
                    <div class='row-fluid'>
                        <div class='span6 offset3'>
                            <div class='text-center'>
@endsection
                                
<!-- / jquery -->

