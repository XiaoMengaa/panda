
@include('default.home_top')

<!-- Start of Page Container -->
<div class="page-container">
<div class="container">
        <div class="row">

                <!-- start of page content -->
                <div class="span8 page-content">

                        <article class=" page type-page hentry clearfix">
                                <h2><i>精品回答</i></h2>
                                <hr>
                                <p>知无不言，言无不尽，百人誉之不加密，百人毁之不加疏。</p>
                        </article>

                        <div class="faqs clearfix">
                                @foreach($problem as $v)
                                <article class="faq-item active">
                                        <span class="faq-icon"></span>
                                        <h3 class="faq-question">
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


                <!-- start of sidebar -->
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



                        <section class="widget"><h3 class="title">站长推荐</h3>
                                <ul>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet,">Advanced Techniques</a> </li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet,">Designing in WordPress</a></li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet,">Server &amp; Database</a></li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet, ">Theme Development</a></li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet,">Website Dev</a></li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet,">WordPress for Beginners</a></li>
                                        <li><a href="#" title="Lorem ipsum dolor sit amet, ">WordPress Plugins</a></li>
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
                <!-- end of sidebar -->
        </div>
</div>
</div>
<!-- End of Page Container -->


@include('default.home_button')
