
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
                                                                <p>For more information:</p>
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
                                <div class="support-widget">
                                        <h3 class="title">支持</h3>
                                        <p class="intro">需要更多的支持吗？如果您没有找到答案，请与我们联系以获得进一步的帮助。</p>
                                </div>
                        </section>


                        <section class="widget">
                                <h3 class="title">Latest Articles</h3>
                                <ul class="articles">
                                        <li class="article-entry standard">
                                                <h4><a href="single.html">Integrating WordPress with Your Website</a></h4>
                                                <span class="article-meta">25 Feb, 2013 in <a href="#" title="View all posts in Server &amp; Database">Server &amp; Database</a></span>
                                                <span class="like-count">66</span>
                                        </li>
                                        <li class="article-entry standard">
                                                <h4><a href="single.html">WordPress Site Maintenance</a></h4>
                                                <span class="article-meta">24 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                                                <span class="like-count">15</span>
                                        </li>
                                        <li class="article-entry video">
                                                <h4><a href="single.html">Meta Tags in WordPress</a></h4>
                                                <span class="article-meta">23 Feb, 2013 in <a href="#" title="View all posts in Website Dev">Website Dev</a></span>
                                                <span class="like-count">8</span>
                                        </li>
                                        <li class="article-entry image">
                                                <h4><a href="single.html">WordPress in Your Language</a></h4>
                                                <span class="article-meta">22 Feb, 2013 in <a href="#" title="View all posts in Advanced Techniques">Advanced Techniques</a></span>
                                                <span class="like-count">6</span>
                                        </li>
                                </ul>
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
