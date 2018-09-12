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
                                <span>商品添加</span>
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
                                        商品
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                    <div class='span12 box'>
                        <div class='box-header blue-background'>
                            <div class='title'>商品添加</div>
                            <div class='actions'>
                                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                                </a>
                                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                                </a>
                            </div>
                        </div>
                        <div class='box-content'>
                            <form class='form form-horizontal validate-form' action="/admin/shangpin" method="post" style='margin-bottom: 0;' enctype="multipart/form-data" />
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>商品名称:</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='cname' placeholder='输入商品名称' type='text' />
                                    </div>
                                </div>



                
                                
                                 <div class="am-form-group" style="margin-left:115px">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label" style="float:left">商品类别:&nbsp;</label>
                                        <div class='control-group'>
                                            <select  name="spcate_id" style="width:200px;height:30px">
                                               @foreach($spcate as $v)
                                                <option value="{{$v['id']}}">{{$v['sname']}}</option>
                                                @endforeach
                                            </select>
                                     </div>
                                </div>

                         
                               

                               <div class='control-group'>
                                    <label class='control-label' for='validation_name'>商品定价财富值:</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='money' type='text' />
                                    </div>
                                </div>


                                 <div class='control-group'>
                                    <label class='control-label' for='validation_name'>商品详情:</label>
                                    <div class='controls'>
                                        <textarea cols="3" rows="3" name="cdetails"></textarea>
                                    </div>
                                </div>


                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>商品图片:</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='cpic' type='file' />
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
