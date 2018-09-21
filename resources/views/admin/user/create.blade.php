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
                                <span>用户添加</span>
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
                                        用户添加
                                    </li>
                                    <li class='separator'>
                                        <i class='icon-angle-right'></i>
                                    </li>
                                    <li class='active'>用户添加</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row-fluid'>
                   
                        <div class='box-content'>
                            <form action="/admin/user" method="post" class='form form-horizontal validate-form' style='margin-bottom: 0;' />
                                <div class='control-group'>
                                    <label class='control-label' for='validation_name'>姓名</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='2' data-rule-required='true' id='validation_name' name='username' placeholder='Name' type='text' />
                                    </div>
                                </div>
                                
                                <div class='control-group'>
                                    <label class='control-label' for='validation_password'>密码</label>
                                    <div class='controls'>
                                        <input data-rule-minlength='6' data-rule-password='true' data-rule-required='true' id='validation_password' name='password' placeholder='Password' type='password' />
                                    </div>
                                  {{csrf_field()}}

                                
                                <div class='form-actions' style='margin-bottom:0'>
                                    <button class='btn btn-primary' type='submit'>
                                        <i class='icon-save'></i>
                                        提交
                                    </button>
                                </div>
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
