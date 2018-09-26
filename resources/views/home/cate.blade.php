
@include('default.home_top')

<!-- Start of Page Container -->
<div class="page-container">
        <!-- Start of Page Container -->
        <div class="page-container">
                <div class="container">
                        <div class="row">

                                <!-- start of page content -->
                                <div class="span8 page-content">
                                  <section class="widget">
                                                        <div class="quick-links-widget" id="chongxin">
                                                                <h3 class="title">问题分类</h3>
                                                                <ul id="menu-quick-links" class="menu clearfix" >
                                                                @foreach($cate as $v)
                                                                <li><a href="/home/problemlist?cid={{$v->id}}">{{$v->cname}}</a></li>
                                                                @endforeach
                                                              
                                                                </ul>
                                                        </div>
                                                </section>
                                              
                                    <style type="text/css">
                                        #chongxin {
                                          border: 1px solid #d7d9dc;
                                        padding: 10px 15px 200px;
                                           }
                                       #chongxin ul li {
                                            font-size:9pt;
                                        background-color:#ACD6FF;
                                        color:#000000;
                                        text-decoration:none;
                                        display: inline;
                                      border: 1.5px solid #000000;
                                      overflow: visible;
                                      width: 11%;
                                   margin-bottom: 12px;
                                    
                                       }
                                    

                                        
                                    </style>   
                                  
                                  

                                </div>
                                <!-- end of page content -->
                <aside class="span4 page-sidebar">

                        <section class="widget">
                                <div class="support-widget" style="height: 70px">
                                    <a href="/home/center">
                                        <h3 class="title" style="float: left;">个人中心</h3>
                                        <div style="width: 80px;overflow: hidden;border-radius: 50px;margin-left: 250px;">
                                            <img src="{{Session::get('pic')}}" alt="" width="80">
                                        </div>
                                        
                                    </a>
                                        
                                </div>
                        </section>


                        <section class="widget">
                                <h3 class="title">广告展示</h3><hr>
                                <div>
                                       @foreach($gggl as $v)
                                            <tr>
                                                
                                                 <a href="{{$v['glink']}}">
                                                <td><img src="{{$v['gpic']}}"></td></a>
                                            </tr><hr>
                                       @endforeach

                                </div>
                        </section>


                        <section class="widget">
                                <h3 class="title">标签</h3>
                                <div class="tagcloud">
                                    @foreach($tags as $v)
                                    <a href="#" class="btn btn-mini">{{$v->title}}</a>
                                    @endforeach
                                </div>
                        </section>
                </aside>

                <!-- start of sidebar -->

                <!-- end of sidebar -->
        </div>
</div>
</div>
<!-- End of Page Container -->


        </div>
        <!-- End of Page Container -->

       
@include('default.home_button')
