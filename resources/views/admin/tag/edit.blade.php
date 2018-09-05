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
                                <span>标签</span>
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
                                       标签
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>标签</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header blue-background'>
                            <div class='title'>标签修改</div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div>
                        <div class='box-content'>
                            <form class='form form-horizontal validate-form' action="/admin/tag/{{$tag['id']}}" style='margin-bottom: 0;' / method="post">
                                 <div class="am-form-group" style="margin-left:115px">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label" style="float:left">分类:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <div class='control-group'>
                                            <select  name="cate_id" style="width:200px;height:30px">
                                                @foreach($cate as $v)
                                                <option value="{{$v['id']}}" @if($tag->cate_id == $v->id) selected @endif>{{$v['cname']}}</option>
                                                @endforeach
                                            </select>
                                     </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>标签名:</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true'  name='title' style="width:200px;height:30px" placeholder='请修改标签' value="{{$tag['title']}}" type='text' />
                                    </div>
                                </div>
                                
                                <div class='form-actions' style='margin-bottom:0'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='icon-save'></i>
                                        修改
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
