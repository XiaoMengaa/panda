  <!-- Brands slider Area -->
        <footer class="footer-area">
            
            <div class="footer-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-10">
                            <div class="footer-widget">
                                <h4>它是如何工作的?</h4>
                                  <div class="textwidget">
                                    <p>们大多数人每天都用电脑鼠标，却从来没有停下来想想它是怎样工作的，直到有一天它变脏了，而我们又必须学会如何对它进行清洁。
                                    </p>
                                    <p>因为有梦，认真过，改变过，努力过,梦想是一个人奋斗的动力，梦想是一个人动力的源泉。幸福和欢乐在于奋斗，而最有价值的是为梦想而奋斗。有梦想，心就有了方向，有了梦想不在为过去而挣扎。 </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-10">
                            <div class="footer-widget">
                                <h4>开发者</h4>
                                  <div id="twitter_update_list">
                                        <ul>
                                                <li>樊锰</li>
                                                <li>贾旭</li>
                                                <li>韩国玺</li>
                                                <li>刘金阳</li>
                                                <li>丁博</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-3 col-sm-6 mb-10">
                            <div class="footer-widget">
                                <h4>友情链接</h4>
                                <ul>
                                        @foreach($link as $v)
                                        <li><a href="{{$v->url}}" title="Lorem ipsum dolor sit amet,">{{$v->name}}</a></li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                          <div class="col-md-3 col-sm-6 mb-10">
                            <div class="footer-widget">
                                <h4>请扫码关注我</h4>
                                <div>
                                        <img src="/image/erweima.png" style="width:60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- footer-middle-area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright">
                                <p> 2018年五个青年男女创建的一个小型网站</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="payment">
                                <a href="#">
                                    <img src="/shangcheng/img/payment.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End footer-bottom-area -->
        </footer> 
        <!-- End footer-area -->
        <!-- Modal -->
        <div class="modal animated zoomIn" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="product-details">
                            <div class="single-product">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="first-img">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="/shangcheng/img/product-view/1_1.jpg" alt="" />
                                                        <span class="new-box">new</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="second-img">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="/shangcheng/img/product-view/2_2.jpg" alt="" />
                                                        <span class="new-box">new</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="third-img">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="/shangcheng/img/product-view/3_3.jpg" alt="" />
                                                        <span class="new-box">new</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="fourth-img">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="/shangcheng/img/product-view/4_4.jpg" alt="" />
                                                        <span class="new-box">new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="product-details-menu">
                                            <li class="active"><a href="#first-img" data-toggle="tab"><img src="/shangcheng/img/product-view/1.jpg" alt="" /></a></li>
                                            <li><a href="#second-img" data-toggle="tab"><img src="/shangcheng/img/product-view/2.jpg" alt="" /></a></li>
                                            <li><a href="#third-img" data-toggle="tab"><img src="/shangcheng/img/product-view/3.jpg" alt="" /></a></li>
                                            <li><a href="#fourth-img" data-toggle="tab"><img src="/shangcheng/img/product-view/4.jpg" alt="" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="product-content">
                                            <h1 class="product-name">Faded Short Sleeves T-shirt</h1>
                                            <p class="productreference">
                                                <label>Reference: </label>
                                                <span class="editable" content="demo_1">demo_1</span>
                                            </p>
                                            <p id="product-condition">
                                                <label>Condition: </label>
                                                <span class="editable">New product</span>
                                            </p>
                                            <div class="product-price">
                                                <h2>
                                                    £ 19.81 
                                                    <span>tax incl.</span>
                                                </h2>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="box-info-product clearfix">
                                                <form action="#">
                                                    <div class="quantity-wanted-p">
                                                        <label for="quantity-wanted">Quantity</label>
                                                        <input type="number" id="quantity-wanted" min="1" name="qty" value="1" />
                                                    </div>
                                                    <div class="product-action">
                                                        <ul>
                                                            <li class="cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart</a></li>
                                                        </ul>
                                                    </div>
                                                    <ul class="usefull-link">
                                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send to a friend</a></li>
                                                        <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i>Print</a></li>
                                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to wishlist</a></li>
                                                        <li>
                                                            <div class="size">
                                                                <label>Size</label>
                                                                <select>
                                                                    <option value="">S</option>
                                                                    <option value="">M</option>
                                                                    <option value="">L</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                            <div class="color-list-container">
                                                <h5>Color</h5>
                                                <ul>
                                                    <li><a href="#" id="color_one" class="color_pick"></a></li>
                                                    <li><a href="#" id="color_two" class="color_pick"></a></li>
                                                </ul>
                                            </div>
                                            <span class="quantity-available">296 Items</span>
                                            <span class="availability"> In stock </span>
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a></li>
                                                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Share</a></li>
                                                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i>google+</a></li>
                                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i>Pinterest </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-top"><i class="fa fa-angle-up"></i></div>
        
        
        
        
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="/shangcheng/js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="/shangcheng/js/bootstrap.min.js"></script>
        <!-- ajax mails JS
        ============================================ -->
        <script src="/shangcheng/js/ajax-mail.js"></script>
        <!-- owl.carousel js -->
        <script src="/shangcheng/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="/shangcheng/js/jquery.meanmenu.min.js"></script>
        <!-- jquery-ui js -->
        <script src="/shangcheng/js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="/shangcheng/js/wow.min.js"></script>
        <!-- nivo-slider js -->
        <script src="/shangcheng/lib/js/jquery.nivo.slider.pack.js"></script>
        <!-- nivo-slider activate js -->
        <script src="/shangcheng/lib/js/nivo-active.js"></script>
        <!-- jquery countdown js -->
        <script src="/shangcheng/js/jquery.countdown.min.js"></script>
        <!-- jquery waypoints js -->
        <script src="/shangcheng/js/waypoints.min.js"></script>
        <!-- jquery counterup js -->
        <script src="/shangcheng/js/jquery.counterup.min.js"></script>
        <!-- plugins js -->
        <script src="/shangcheng/js/plugins.js"></script>
        <!-- main js -->
        <script src="/shangcheng/js/main.js"></script>
    </body>
</html>
