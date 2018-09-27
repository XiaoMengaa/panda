@include('default.home_top')
                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <!-- Basic Home Page Template -->
                                                <div class="row separator">
                                                        <section class="span4 articles-list">
                                                                <h3>热门问题</h3>
                                                                <ul class="articles">
                                                                    @foreach($problem as $v)
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="/home/problem/{{$v->id}}">{{$v->title}}</a></h4>
                                                                                <span class="article-meta">{{mb_substr($v -> created_at,0,10)}} @foreach($v->tags as $val)<a href="/home/problemlist?tid={{$val->id}}"> {{$val->title}}</a> @endforeach</span>
                                                                                
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                        </section>


                                                        <section class="span4 articles-list">
                                                                <h3>高悬赏</h3>
                                                                <ul class="articles">
                                                                    @foreach($problem1 as $v)
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="/home/problem/{{$v->id}}" style="float: left;">{{$v->title}}</a></h4>
                                                                                <span> &nbsp;悬赏:{{$v -> reward}}</span>
                                                                                <span class="article-meta">{{mb_substr($v -> created_at,0,10)}} @foreach($v->tags as $val)<a href="/home/problemlist?tid={{$val->id}}"> {{$val->title}}</a> @endforeach</span>
                                                                                
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                        </section>
                                                </div>
                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
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
                                                        <div class="quick-links-widget">
                                                                <h3 class="title">问题分类</h3>
                                                                <ul id="menu-quick-links" class="menu clearfix">
                                                                @foreach($cate as $v)
                                                                        <li><a href="/home/problemlist?cid={{$v->id}}">{{$v->cname}}</a></li>
                                                                @endforeach
                                                                <li><a href="/home/cate">更多分类</a></li>
                                                                </ul>
                                                        </div>
                                                </section>

                                               <section class="widget">
                                                        <h3 class="title">问题标签</h3>
                                                        <div class="tagcloud">
                                                            @foreach($tags as $v)
                                                            <a href="/home/problemlist?tid={{$v->id}}" class="btn btn-mini">{{$v->title}}</a>
                                                            @endforeach
                                                        </div>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

@include('default.home_button')