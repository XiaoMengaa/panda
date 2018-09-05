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
                <span>用户列表</span>
            </h1>

            <div class='pull-right'>
                <ul class='breadcrumb'>

                <form accept-charset="UTF-8" action="" class="navbar-search pull-right hidden-phone" method="get" action="/admin/user"><div style="margin:350;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <button class="btn btn-link icon-search" name="button" type="submit"></button>
                    <input autocomplete="off" class="search-query span2" id="q_header" name="username" placeholder="搜索" type="text" value="">
                </form>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>

            <div class='title'>用户列表</div>
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
                            <th class="table-title">用户名</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td class="am-hide-sm-only">{{$v['username']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        
                                        <a href="/admin/user/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span><button  type="button">编辑</button> </a>
                                               

                                        <form style="float:left" action="/admin/user/{{$v['id']}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>


                                    </div>

                                </div>
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
                     {{ $users->appends(request()->all())->links() }}
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
