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
                                            <a href="/home/center">
                                                <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> 
                                                <span class="cart-no">我的订单</span>
                                            </a>
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
                            <div style="float:right;width:280px;height: 200px ;margin-right:100px">
                                <span style="font-size:25px";>
                                    <p style="font-size:25px">【熊猫商城】&nbsp;{{$spb['cname']}}</p>
                                    <br>
                                <div class="product-ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <br><br>
                                <div class="product-ratings">
                                    <b style="font-size:20px">所需财富值:</b><b style="color:red;font-size:40px">{{$spb['money']}}</b>
                                </div>
                                <br><br><br><br><br><br><br><br><br>
                                 <div class="cap-readmore wow zoomInLeft" data-wow-duration="1.4s" data-wow-delay=".7s">
                                            <a href="/home/shangcheng/more">立即兑换</a>
                                        </div>  
                                </span>

                            </div>
                        
                            <div > 
                                
                                <img src="{{$spb['cpic']}}" width="450" />
                                
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
                            <h2>可能你喜欢的</h2>
                        </div>
                       
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="men">
                                <div class="favourite-product">
                                    <div class="row">
                                        <div class="favourite-carousel"> 
                                            @foreach($spxx as $v)
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
                                                        <div class="product-ratings" style="width:170px;height:80px ;overflow: hidden">
                                                            {{$v['cdetails']}}
                                                        </div>
                                                        <div class="product-price">
                                                            <h2>
                                                                所需财富值:{{$v['money']}}
                                                            </h2>
                                                        </div>
                                                        <div class="product-action">
                                                            <ul>
                                                                <li class="cart"><a href="/home/shangcheng/more"><i class="fa fa-shopping-cart" aria-hidden="true"></i>兑换</a></li>
                                                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               <hr>
                                            </div>
                                            @endforeach
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
           
        </div> 
         <div style="float:right;width:500px;margin-right:500px">
                <span style="font-size:40px">
                    商品详情
                    <hr>
                </span>
                <p style="font-size:20px">
                    {{$spb['cdetails']}}
                </p>
            </div>
        <!-- End Favourite Area -->
      
        <!-- End Banner Area -->
@include('home.shangpin_foot')
