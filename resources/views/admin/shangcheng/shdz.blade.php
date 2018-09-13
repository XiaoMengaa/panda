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
                <span>收货列表</span>
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
                    <li class='active'>收货地址</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class='row-fluid'>
    <div class='span12 box bordered-box blue-border' style='margin-bottom:0;'>
        <div class='box-header blue-background'>
            <div class='title'>收货地址列表</div>
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
                                用户ID
                            </th>
                             <th>
                               收货人昵称
                            </th>
                             <th>
                                收货人电话
                            </th>
                            <th>
                                收货人备用电话
                            </th>
                            <th>
                                收货状态
                            </th>
                            <th>
                                省名
                            </th>
                            <th>
                                市名
                            </th>
                            <th>县名</th>
                            <th>乡名</th>
                            <th>详细地址</th>
                            <th>操作</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($message as $v)
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['user_id']}}</td>
                            <td>{{$v['name']}}</td>
                            <td>{{$v['phone']}}</td>
                            <td>{{$v['bphone']}}</td>
                            <td>{{$v['addstate']}}</td>
                            <td>{{$v->address['sname']}}</td>
                            <td>{{$v->address['cname']}}</td>
                            <td>{{$v->address['xname']}}</td>
                            <td>{{$v->address['zname']}}</td>
                            <td>{{$v->address['xxdz']}}</td>
                            <td>
                                <div class="am-btn-toolbar" >
                                    <div class="am-btn-group am-btn-group-xs">
                                    
                                        <form  action="/admin/shangcheng/shdz/{{$v['id']}}" method="post" style="float:left">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <input type="hidden" name="aid" value="{{$v->address->id}}">
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
