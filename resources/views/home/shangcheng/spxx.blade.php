@include('home.shangpin_top')
            <div class="header-bottom-area" style="padding:0px">
                <div class="container">

                        <div class="col-md-3 col-xs-12">
                            <div class="logo pad-logo final-mrg" >
                               <img src="/image/panda.jpg" alt="" width="120px" />
                            </div>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <div class="header-cart-search-box clearfix">
                                <div class="header-search-box">
                                    <form action="/home/shangcheng">
                                        <div class="pos-select-box">
                                            <select>
                                                <option value="">所有类别</option>
                                            @foreach($sp as $v)
                                                <option value="">{{$v['sname']}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="search-box">
                                            <input type="text" name="cname" placeholder="输入商品关键字..." />
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
                     <div onMouseMove="login_but_bg(1)" onMouseOut="login_but_bg(2)" style="float:right;width:50px;height:30px;margin-top:12px;font-size: 20px" ><a href="/home/shangcheng" target="_self" style="color:white;">首页</a></div>
                    <div class="row" >
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
                                    <p style="font-size:25px">&nbsp;{{$spb['cname']}}&nbsp;</p>
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
                                <br><br><br><br><br>
                                @if($user->wealths['riches'] < $spb['money'])
                                <div class="cap-readmore wow zoomInLeft" >
                                            <p href="#" style="color:red">对不起,您的财富值不足!</p>
                                        </div> 
                                @else
                                   <div class="cap-readmore wow zoomInLeft" data-wow-duration="1.4s" data-wow-delay=".7s">
                                            <a href="/home/shangcheng/more?id={{$spb['id']}}" style="background-color:#ddd">立即兑换</a>
                                        </div>  
                            
                                @endif
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
                            <h2>可能您还喜欢</h2>
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
                                                                <li class="cart"><a href="/home/spxx/{{$v['id']}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>兑换</a></li>
                                                            
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
                   <img src="{{$spb['cpic']}}" width="300px"> 
                <div style="float:right;width:400px;margin-right:380px;margin-top:40px">

                <span style="font-size:40px">
                    <h3 style="color:#333333">
                    商品详情
                    </h3>
                    <hr>
                    <p style="font-size:20px">
                    {{$spb['cdetails']}}
                </p>
                </span>
                
                </div>
            </div>
        </div> 
        <!-- End Favourite Area -->
      
        <!-- End Banner Area -->
@include('home.shangpin_foot')
