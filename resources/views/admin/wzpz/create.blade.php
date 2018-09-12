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
                                <span>商品网站配置</span>
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
                                        配置
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>商品网站配置</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header blue-background'>
                            <div class='title'>配置</div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div>
                        <div class='box-content'>
                            <form class='form form-horizontal validate-form' action="/admin/spwzsz" method="post" enctype="multipart/form-data" />
                                <div class='control-group'>
                                    <label class='control-label' >商品网站logo:</label>

                                    <div class='controls'> 
                                    <img src="@if($spwzsz) 
                                        {{$spwzsz->logo}}@endif" style="width: 50px">
                                        <input name='logo' value="{{$spwzsz['logo']}}"  type='file' />
                                    </div>
                                </div>  
                                <div class='control-group'>
                                    <label class='control-label' >商品网站简介:</label>
                                    <div class='controls'>
                                        <input name='jieshao' value="{{$spwzsz['jieshao']}}"  type='text'  style="height: 25px"/>
                                    </div>
                                </div>
                                 <div class='control-group'>
                                    <label class='control-label' >商品网站标题:</label>
                                    <div class='controls'>
                                        <input name='title' value="{{$spwzsz['title']}}"  type='text' style="height: 25px" />
                                    </div>
                                </div>
                                 <div class='control-group'>
                                     <label class='control-label'>商品网站开关</label>
                                    <div class='controls'>
                                       <input name="switch" type="radio" @if($spwzsz) @if($spwzsz->switch == "0") checked @endif @endif value="0" />开
                                       <input name="switch" type="radio" @if($spwzsz) @if($spwzsz->switch == "1") checked @endif @endif value="1" />关
                                    </div>
                                </div>
                                
                                   
                                </div>
                                <div class='form-actions' style='margin-bottom:0'>
                                    <button  class='btn btn-primary' type='submit'>
                                        <i class='icon-save'></i>
                                        提交
                                    </button>
                                </div>
                                {{csrf_field()}}
           
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection