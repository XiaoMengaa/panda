
@include('default.home_top')

<!-- Start of Page Container -->
<div class="page-container">
        <!-- Start of Page Container -->
        <div class="page-container">
                <div class="container">
                        <div class="row">

                                <!-- start of page content -->
                                <div class="span8 page-content">

                                        <div class="faqs clearfix">
                                                @foreach($problem as $v)
                                                <article class="faq-item active">
                                                        <span class="faq-icon" style="float: left;margin-top: 10px"></span>
                                                        <h3 style="padding: 0px;margin: 0px;">
                                                                <a href="/home/problem/{{$v->id}}">{{$v->title}}</a>
                                                        </h3>
                                                        <div class="faq-answer">
                                                                <p>{{$v->content}}</p>
                                                                <ul>
                                                                        <li><a title="WordPress" href="http://codex.wordpress.org/WordPress">WordPress</a></li>
                                                                        <li><a title="WordPress Semantics" href="http://codex.wordpress.org/WordPress_Semantics">WordPress Semantics</a></li>
                                                                        <li><a title="About WordPress" href="http://codex.wordpress.org/About_WordPress">About WordPress</a></li>
                                                                </ul>
                                                        </div>
                                                </article>
                                                @endforeach
                                        </div>

                                </div>
                                <!-- end of page content -->
                 <aside class="span4 page-sidebar">

                                                 <section class="widget">
                                                        <div class="support-widget" style="height: 75px">
                                                            <a href="/home/center">
                                                                <h3 class="title" style="float: left;">个人中心</h3>
                                                                <div style="width: 80px;overflow: hidden;border-radius: 50px;margin-left: 250px;height:80px;">
                                                                    <img src="{{Session::get('pic')}}" alt="" width="80" height="80">
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
