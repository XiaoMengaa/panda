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
                <span>问题列表</span>
            </h1>


            <div class='pull-right'>
                <ul class='breadcrumb'>

                <form accept-charset="UTF-8" class="navbar-search pull-right hidden-phone" method="get" action="/problem"><div style="margin:350px;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <button class="btn btn-link icon-search" name="button" type="submit"></button>
                    <input autocomplete="off" class="search-query span2" id="q_header" name="title" placeholder="搜索" type="text" value="" />
                </form>
                        
                    
                    


                </ul>
            </div>
        </div>
    </div>
</div>

<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>

            <div class='title'>问题列表</div>
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
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <th class="table-title">问题</th>
                            <th class="table-content">详细</th>
                            <th class="table-image">附带图片</th>
                            <th class="table-state">状态</th>
                            <th class="table-browse">浏览次数</th>
                            <th class="table-browse">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($problem as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td class="am-hide-sm-only">{{$v['title']}}</td>
                            <td class="am-hide-sm-only">{{$v['content']}}</td>
                            <td><img src="{{$v['image']}}" width="80" ></td>
                            <td class="am-hide-sm-only">{{$v['state']}}</td>
                            <td class="am-hide-sm-only">{{$v['browse']}}</td>
                            
                            <td>
                                <form style="float:left" action="/problem/{{$v['id']}}" method="post">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                   </table>
                <style>
                    .pagination{
                        padding-left:0;
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
                <div class="am-cf">
                    <div class="am-fr">
                     {{ $problem->appends(request()->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery -->

@endsection
