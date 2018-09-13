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
                <span>商品列表</span>
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
                    <li class='active'>列表</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class='pull-right'>
                <ul class='breadcrumb'>

        
                    

                </ul>
            </div>
<div class="am-u-sm-12 am-u-md-6">
            </div>
<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>
            <div class='title'>商品列表</div>
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
                           
                            <th class="table-id">ID</th>
                            <th class="table-id">商品名称</th>
                            <th class="table-title">商品分类</th>
                            <th class="table-title">商品图片</th>
                            <th class="table-title">商品详情</th>
                            <th class="table-title">商品定价财富值</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                     <tbody>
                        @foreach($shangpin as $v)
                        <tr>
                           
                            <td>{{$v['id']}}</td>
                            <td>{{$v['cname']}}</td>
                            <td>{{$v->spcate['sname']}}</td>
                            <td><img src="{{$v['cpic']}}" width="80px"></td>
                            <td>{{$v['cdetails']}}</td>
                            <td>{{$v['money']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/admin/shangpin/{{$v['id']}}/edit"><span class="am-icon-pencil-square-o"></span><button type="button"> 编辑</button></a>
                                        <form style="float:left" action="/admin/shangpin/{{$v['id']}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button><span class="am-icon-trash-o"></span>删除</button> 
                                        </form> 

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery -->

@endsection
