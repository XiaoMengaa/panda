 <!-- Start of Footer -->
                <footer id="footer-wrapper">
                        <div id="footer" class="container">
                                <div class="row">

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">它是如何工作的?</h3>
                                                        <div class="textwidget">
                                                                <p>他们大多数人每天都用电脑鼠标，却从来没有停下来想想它是怎样工作的，直到有一天它变脏了，而我们又必须学会如何对它进行清洁。
                                                                </p>
                                                                <p>因为有梦，认真过，改变过，努力过,梦想是一个人奋斗的动力，梦想是一个人动力的源泉。幸福和欢乐在于奋斗，而最有价值的是为梦想而奋斗。有梦想，心就有了方向，有了梦想不在为过去而挣扎。 </p>
                                                        </div>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget"><h3 class="title">友情链接</h3>
                                                        <ul>
                                                                @foreach($link as $v)
                                                                <li><a href="{{$v->url}}" title="Lorem ipsum dolor sit amet,">{{$v->name}}</a></li>
                                                                @endforeach
                                                        </ul>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">开发者</h3>
                                                        <div id="twitter_update_list">
                                                                <ul>
                                                                        <li>樊锰</li>
                                                                        <li>贾旭</li>
                                                                        <li>韩国玺</li>
                                                                        <li>刘金阳</li>
                                                                        <li>丁博</li>
                                                                </ul>
                                                        </div>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">请扫码关注我</h3>
                                                        <div>
                                                                <img src="/image/erweima.png" style="width:60%">
                                                        </div>
                                                </section>
                                        </div>

                                </div>
                        </div>
                        <!-- end of #footer -->

                        <!-- Footer Bottom -->
                        <div id="footer-bottom-wrapper">
                                <div id="footer-bottom" class="container">
                                        <div class="row">
                                                <div class="span6">
                                                        <p class="copyright">
                                                                2018年五个青年男女创建的一个小型网站
                                                        </p>
                                                </div>
                                                <div class="span6">
                                                        <!-- Social Navigation -->
                                                        <ul class="social-nav clearfix">
                                                                <li class="linkedin"><a target="_blank" href="#"></a></li>
                                                                <li class="stumble"><a target="_blank" href="#"></a></li>
                                                                <li class="google"><a target="_blank" href="#"></a></li>
                                                                <li class="deviantart"><a target="_blank" href="#"></a></li>
                                                                <li class="flickr"><a target="_blank" href="#"></a></li>
                                                                <li class="skype"><a target="_blank" href="skype:#?call"></a></li>
                                                                <li class="rss"><a target="_blank" href="#"></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"></a></li>
                                                                <li class="facebook"><a target="_blank" href="#"></a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- End of Footer Bottom -->

                </footer>
                <!-- End of Footer -->

                <a href="#top" id="scroll-top"></a>

                <!-- script -->
<script type='text/javascript' src='/home/js/jquery-1.8.3.min.js'></script>
                <script type='text/javascript' src='/home/js/jquery.easing.1.3.js'></script>
                <script type='text/javascript' src='/home/js/prettyphoto/jquery.prettyPhoto.js'></script>
                <script type='text/javascript' src='/home/js/jflickrfeed.js'></script>
                <script type='text/javascript' src='/home/js/jquery.liveSearch.js'></script>
                <script type='text/javascript' src='/home/js/jquery.form.js'></script>
                <script type='text/javascript' src='/home/js/jquery.validate.min.js'></script>
                <script type='text/javascript' src='/home/js/custom.js'></script>

        </body>
</html>