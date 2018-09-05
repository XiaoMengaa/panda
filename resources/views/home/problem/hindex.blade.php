
@include('default.home_top')

                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <article class=" page type-page hentry clearfix">
                                                        <h1 class="post-title"><a href="#">FAQs</a></h1>
                                                        <hr>
                                                        <p>WordPress is open source web software that you can install on your web server to create your website, blog, community or network. WordPress started out as a tool for blogging, but has evolved into a full-fledged Content Management System (CMS), capable of powering websites, networks and communities.</p>
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
                                                                <h3 class="title">Support</h3>
                                                                <p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>
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



                                                <section class="widget"><h3 class="title">Categories</h3>
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
                                                        <h3 class="title">Tags</h3>
                                                        <div class="tagcloud">
                                                                <a href="#" class="btn btn-mini">basic</a>
                                                                <a href="#" class="btn btn-mini">beginner</a>
                                                                <a href="#" class="btn btn-mini">blogging</a>
                                                                <a href="#" class="btn btn-mini">colour</a>
                                                                <a href="#" class="btn btn-mini">css</a>
                                                                <a href="#" class="btn btn-mini">date</a>
                                                                <a href="#" class="btn btn-mini">design</a>
                                                                <a href="#" class="btn btn-mini">files</a>
                                                                <a href="#" class="btn btn-mini">format</a>
                                                                <a href="#" class="btn btn-mini">header</a>
                                                                <a href="#" class="btn btn-mini">images</a>
                                                                <a href="#" class="btn btn-mini">plugins</a>
                                                                <a href="#" class="btn btn-mini">setting</a>
                                                                <a href="#" class="btn btn-mini">templates</a>
                                                                <a href="#" class="btn btn-mini">theme</a>
                                                                <a href="#" class="btn btn-mini">time</a>
                                                                <a href="#" class="btn btn-mini">videos</a>
                                                                <a href="#" class="btn btn-mini">website</a>
                                                                <a href="#" class="btn btn-mini">wordpress</a>
                                                        </div>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

               
@include('default.home_button')
