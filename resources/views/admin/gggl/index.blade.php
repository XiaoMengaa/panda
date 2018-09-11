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
                <i class='icon-table'></i>
                <span>广告列表</span>
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
                    <li class='active'>广告</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>
            <div class='title'>广告列表</div>
            <div class='actions'>
                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                </a>
                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                </a>
            </div>
        </div>
        <div class='box-content box-no-padding'>
            <div class='responsive-table'>
                <div class='scrollable-area'>
                    <table class='table' style='margin-bottom:0;'>
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                广告名
                            </th>
                             <th>
                                广告链接
                            </th>
                             <th>
                                广告图片
                            </th>
                            <th>
                                操作
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($gggl as $v)
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['name']}}</td>
                            <td>{{$v['glink']}}</td>
                            <td><img src="{{$v['gpic']}}" width="60" ></td>
                            <td>
                                <div class="am-btn-toolbar" >
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/admin/gggl/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o" style="float:right" ></span> <button type="button">编辑</button></a>
                                        <form  action="/admin/gggl/{{$v['id']}}" method="post" style="float:left">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                       @endforeach

                    </table>
                
              
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery -->

@endsection
