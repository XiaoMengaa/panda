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
                <span>标签列表</span>
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
                    <li class='active'>标签</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="am-u-sm-12 am-u-md-6">
            </div>
<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>
            <div class='title'>标签列表</div>
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
                            <th class="table-title">标签名</th>
                            <th class="table-set">操作</th>
                        </tr>
                        </thead>
                     <tbody>
                        @foreach($tag as $v)
                        <tr>
                           
                            <td>{{$v['id']}}</td>
                            <td class="am-hide-sm-only">{{$v['title']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/admin/tag/{{$v['id']}}/edit"><span class="am-icon-pencil-square-o"></span><button type="button"> 编辑</button></a>
                                        <form style="float:left" action="/admin/tag/{{$v['id']}}" method="post">
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
                      <style>
					.pagination{
					    padding-left: 0;
					    margin: 1.5rem 0;
					    list-style: none;
					    color: #999;
					    text-align: center;
					    padding: 0;
					}

					.pagination li{
						display: inline-block;
					}

					.pagination li a, .pagination li span{
						color: #23abf0;
					    border-radius: 3px;
					    padding: 6px 12px;
					    position: relative;
					    display: block;
					    text-decoration: none;
					    line-height: 1.2;
					    background-color: #fff;
					    border: 1px solid #ddd;
					    border-radius: 0;
					    margin-bottom: 5px;
					    margin-right: 5px;
					}

					.pagination .active span{
						color: #23abf0;
					    border-radius: 3px;
					    padding: 6px 12px;
					    position: relative;
					    display: block;
					    text-decoration: none;
					    line-height: 1.2;
					    background-color: #fff;
					    border: 1px solid #ddd;
					    border-radius: 0;
					    margin-bottom: 5px;
					    margin-right: 5px;
					    background: #23abf0;
					    color: #fff;
					    border: 1px solid #23abf0;
					    padding: 6px 12px;
					}
				</style>
                    </table>
                    {{$tag->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery -->

@endsection
