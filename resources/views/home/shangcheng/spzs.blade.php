@include('home.shangpin_top')
            <div class="header-bottom-area" style="padding:0px">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-3 col-xs-12">
                            <div class="logo pad-logo final-mrg" >
                                <a href="index.html"><img src="/image/panda.jpg" alt="" width="120px" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <div class="header-cart-search-box clearfix">
                                <!-- cart-total start -->
                                <div class="cart-total">
                                    <ul>
                                        <li>
                                            <a href="/home/dhjl/create">
                                                <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> 
                                                <span class="cart-no">我的订单</span>
                                            </a>
                                            <div class="mini-cart-content">
                                               
                                                <div class="clear"></div>
                                                <div class="cart-img-details">                                          
                                                    <div class="cart-img-photo">
                                                        <a href="#"><img src="/shangcheng/img/product/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-img-contaent">
                                                        <a href="#"><h4>Printed...</h4></a>
                                                        <span>£50.00</span>
                                                    </div>
                                                    <div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-inner-bottom">
                                                    <p class="total">Total: <span class="amount">£ 56.28</span></p>
                                                    <div class="clear"></div>
                                                    <p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- cart-total end -->
                                <div class="header-search-box">
                                    <form action="#">
                                        <div class="pos-select-box">
                                            <select>
                                                <option value="">所有类别</option>
                                            @foreach($sp as $v)
                                                <option value="">{{$v['sname']}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="search-box">
                                            <input type="text" name="sname" placeholder="输入商品关键字..." />
                                            <button><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Bottom Area  -->
            <div class="mainmenu-area find">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mainmenu-left visible-lg  visible-md">
                                <div class="product-menu-title">
                                    <h2>所有类别</h2>
                                </div>
                                @foreach($sp as $v)
                                <div class="product_vmegamenu">
                                    <ul>
                                        <li>
                                            <a href="/home/shangpin/{{$v['id']}}">{{$v['sname']}}</a>
                                        </li>
                                    </ul> 
                               @endforeach  
                               </div>   
                           </div>
                       </div>
                   </div>  
               </div>
           </div>

                             
        </header> 
        <!-- End Header Area -->
        <!-- home slider start -->
        <div class="slider-container mrgn-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <!-- Slider Image -->
                        <div class="slider">
                            <div id="mainSlider" class="nivoSlider slider-image">
                                <img src="/shangcheng/img/slider/1.jpg" alt="main slider" title="#htmlcaption1"/>
                                <img src="/shangcheng/img/slider/2.jpg" alt="main slider" title="#htmlcaption2"/>
                            </div>
                            <!-- Slider Caption 1 -->
                            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                                <div class="slider-progress"></div> 
                                <div class="slide1-text">
                                    <div class="middle-text desc1">
                                        <div class="cap-title wow zoomInLeft" data-wow-duration="0.9s" data-wow-delay="0s">
                                            <p class="title-1">字幕</p>
                                        </div>  
                                        <div class="cap-title wow zoomInLeft" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <p class="title-2">字幕</p>
                                        </div>  
                                        <div class="cap-title wow zoomInLeft hidden-xs" data-wow-duration="1.3s" data-wow-delay=".5s">
                                            <p class="title-3">字 <br>字幕</p>
                                        </div>
                                        <div class="cap-readmore wow zoomInLeft" data-wow-duration="1.4s" data-wow-delay=".7s">
                                            <a href="/home/spxx/1">立即购买</a>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                            <!-- Slider Caption 2 -->
                            <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                                <div class="slider-progress"></div>
                                <div class="slide1-text">
                                    <div class="middle-text desc2">
                                        <div class="cap-title wow zoomInLeft" data-wow-duration="0.9s" data-wow-delay="0s">
                                            <p class="title-1">字幕</p>
                                        </div>  
                                        <div class="cap-title wow zoomInLeft" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <p class="title-2">字幕</p>
                                        </div>  
                                        <div class="cap-title wow zoomInLeft hidden-xs" data-wow-duration="1.3s" data-wow-delay=".5s">
                                            <p class="title-3">字幕<br>字幕</p>
                                        </div>
                                        <div class="cap-readmore wow zoomInLeft" data-wow-duration="1.4s" data-wow-delay=".7s">
                                            <a href="/home/spxx/2">立即购买</a>
                                        </div>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home slider end -->
        <div class="favourite-area mrgn-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Our Favourites</h2>
                        </div>
                       
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="men">
                                <div class="favourite-product">
                                    <div class="row">
                                        <div class="favourite-carousel"> 
                                            @foreach($spb as $v)
                                            <div class="col-md-9" style="float:right">
                                               
                                                <div class="single-product" >
                                                    <div class="product-img">
                                                        <a href="/home/spxx/{{$v['id']}}">
                                                            <img src="{{$v['cpic']}}" width="150" />
                                                            <span class="new-box">新款</span>
                                                        </a>
                                                     
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="product-name">
                                                            <a href="#">{{$v['cname']}}</a>
                                                        </h5>
                                                        <div class="product-ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="product-ratings">
                                                            {{$v['cdetails']}}
                                                        </div>
                                                        <div class="product-price">
                                                            <h2>
                                                                所需财富值:{{$v['money']}}
                                                            </h2>
                                                        </div>
                                                        <div class="product-action">
                                                            <ul>
                                                                <li class="cart"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>兑换</a></li>
                                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            @endforeach
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="women">
                                <div class="favourite-product">
                                    <div class="row">
                                        <div class="favourite-carousel">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="/shangcheng/img/product/1.jpg" alt="" />
                                                            <span class="new-box">new</span>
                                                        </a>
                                                      
                                                    
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
        </div> 
        <!-- End Favourite Area -->
      
        <!-- End Banner Area -->
@include('home.shangpin_foot')
