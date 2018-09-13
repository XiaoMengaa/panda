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
                                <span>兑换记录修改</span>
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
                                        兑换
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>兑换记录修改</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                   
                        <div class='box-content'>
                            <form action="/admin/dhjl/{{$dh['id']}}" method="post" class='form form-horizontal validate-form' style='margin-bottom: 0;' enctype="multipart/form-data">
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>用户:</label>
                                    <div class='controls'>
                                        <span style="font-size:20px">{{$dh->user['username']}}</span>
                                    </div>
                                </div>
                                
                                <div class='control-group'>
                                    <label class='control-label'>商品:</label>
                                    <div class='controls'>
                                        <input style="height: 30px" data-rule-password='true' data-rule-required='true' id='validation_password' name='commodity_id'  type='text' value="{{$dh['commodity_id']}}">
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label'>所需财富值:</label>
                                    <div class='controls'>
                                        <input style="height: 30px" data-rule-password='true' data-rule-required='true' type="text" name="money" value="{{$dh['rstate']}}" >
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label'>状态:</label>
                                    <div class='controls'>
                                        <input name="rstate" type="radio" @if($dh) @if($dh->rstate == "0") checked @endif @endif value="0" />未收货
                                       <input name="rstate" type="radio" @if($dh) @if($dh->rstate == "1") checked @endif @endif value="1" />已收货
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
