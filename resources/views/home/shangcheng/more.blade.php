        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

     	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>熊猫滚滚</title>
        <link rel="stylesheet" type="text/css" href="/more/css/style.css">
		<link rel="stylesheet" type="text/css" href="/more/css/css.css" />
	   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- google fonts here -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
		
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="/xinx/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="/xinx/css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="/xinx/css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="/xinx/css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="/xinx/css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="/xinx/css/font-awesome.min.css">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="/xinx/lib/css/nivo-slider.css">
		<!-- style css -->
		<link rel="stylesheet" href="/xinx/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="/xinx/css/responsive.css">
		<!-- modernizr css -->
        <script src="/xinx/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/sanjiliandong/script/jquery.citys.js"></script>
    </head>
   

     <script type="text/javascript">
			$(function() {
				var region = $("#region");
				var address = $("#address");
				var number_this = $("#number_this");
				var name = $("#name_");
				var phone = $("#phone");
				$("#sub_setID").click(function() {
					var input_out = $(".input_style");
					for (var i = 0; i <= input_out.length; i++) {
						if ($(input_out[i]).val() == "") {
							$(input_out[i]).css("border", "1px solid red");
							
							return false;
						} else {
							$(input_out[i]).css("border", "1px solid #cccccc");
						}
					}
				});
				var span_momey = $(".span_momey");
				var b = 0;
				for (var i = 0; i < span_momey.length; i++) {
					b += parseFloat($(span_momey[i]).html());
				}
				var out_momey = $(".out_momey");
				out_momey.html(b);
				$(".shade_content").hide();
				$(".shade").hide();
				$('.nav_mini ul li').hover(function() {
					$(this).find('.two_nav').show(100);
				}, function() {
					$(this).find('.two_nav').hide(100);
				})
				$('.left_nav').hover(function() {
					$(this).find('.nav_mini').show(100);
				}, function() {
					$(this).find('.nav_mini').hide(100);
				})
				$('#jia').click(function() {
					$('input[name=num]').val(parseInt($('input[name=num]').val()) + 1);
				})
				$('#jian').click(function() {
					$('input[name=num]').val(parseInt($('input[name=num]').val()) - 1);
				})
				$('.Caddress .add_mi').mouseover(function() {
					
					$(this).css('background', 'url("/more/images/mail_1.jpg") no-repeat').siblings('.add_mi').css('background', 'url("/more/images/mail.jpg") no-repeat');
					$(this).css('background-size', '245px 130px').siblings('.add_mi').css('background-size', '245px 130px');
				})
				$('.Caddress .add_mi').click(function() {
					var jxzl = $(this).attr('nihao');
					if(confirm("确定使用该地址?")){
                          
		 　　		window.location.href='/home/dingdanguanli?address='+jxzl+'&id='+{{request()->id}};
					}
					
				});
			})
			var x = Array();

			function func(a, b) {
				x[b] = a.html();
				alert(x)
				a.css('border', '2px solid #f00').siblings('.min_mx').css('border', '2px solid #ccc');
			}

			function onclick_close() {
				var shade_content = $(".shade_content");
				var shade = $(".shade");
				if (confirm("确认关闭么！此操作不可恢复")) {
					shade_content.hide();
					shade.hide();
				}
			}

			function onclick_open() {
				$(".shade_content").show();
				$(".shade").show();
				var input_out = $(".input_style");
				for (var i = 0; i <= input_out.length; i++) {
					if ($(input_out[i]).val() != "") {
						$(input_out[i]).val("");
					}
				}
			}

			function onclick_remove(r) {
				if (confirm("确认删除么！此操作不可恢复")) {
					var out_momey = $(".out_momey");
					var input_val = $(r).parent().prev().children().eq(1).val();
					var span_html = $(r).parent().prev().prev().children().html();
					var out_add = parseFloat(input_val).toFixed(2) * parseFloat(span_html).toFixed(2);
					var reduce = parseFloat(out_momey.html()).toFixed(2)- parseFloat(out_add).toFixed(2);
					console.log(parseFloat(reduce).toFixed(2));
					out_momey.text(parseFloat(reduce).toFixed(2))
					$(r).parent().parent().remove();
				}
			}

			function onclick_btnAdd(a) {
				var out_momey = $(".out_momey");
				var input_ = $(a).prev();
				var input_val = $(a).prev().val();
				var input_add = parseInt(input_val) + 1;
				input_.val(input_add);
				var btn_momey = parseFloat($(a).parent().prev().children().html());
				var out_momey_float = parseFloat(out_momey.html()) + btn_momey;
				out_momey.text(out_momey_float.toFixed(2));
			}

			function onclick_reduce(b) {
				var out_momey = $(".out_momey");
				var input_ = $(b).next();
				var input_val = $(b).next().val();
				if (input_val <= 1) {
					alert("商品个数不能小于1！")
				} else {
					var input_add = parseInt(input_val) - 1;
					input_.val(input_add);
					var btn_momey = parseFloat($(b).parent().prev().children().html());
					var out_momey_float = parseFloat(out_momey.html()) - btn_momey;
					out_momey.text(out_momey_float.toFixed(2));
				}

			}
		</script>
    <body>

         


        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<header class="header-area">
			<div class="header-top-area hidden-xs ">
				<div class="container">
					<div class="row">
						<div class="col-sm-9">
							<div class="header-top-left">
								<ul>
									<li><a href="#">Currency : GBP</a>
										<ul>
											<li><a href="#">Dollar (USD)</a></li>
											<li><a href="#">Pound (GBP)</a></li>
										</ul>
									</li>
									<li><a href="#">English</a>
										<ul>
											<li><a href="#"><img src="/xinx/img/lang/1.jpg" alt="" /> English</a></li>
											<li><a href="#"><img src="/xinx/img/lang/2.jpg" alt="" /> اللغة العربية</a></li>
										</ul>
									</li>
									<li><a href="#">My Account</a>
										<ul>
											<li><a href="#">My account</a></li>
											<li><a href="#">My wishlist</a></li>
											<li><a href="#">checkout</a></li>
											<li><a href="#">Log in</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 text-right">
							<div class="header-top-right">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- End Header Top Area -->
			<div class="header-mid-area hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="header-mid-inner">
								<span class="header-mid-inner-icon"><i class="fa fa-truck"></i></span>
								<div class="header-mid-info">
									<span class="title-upper">Free shipping</span>
									<span class="title-capi">Free On All Products</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="header-mid-inner">
								<span class="header-mid-inner-icon"><i class="fa fa-money"></i></span>
								<div class="header-mid-info">
									<span class="title-upper">30 days money back</span>
									<span class="title-capi">Money Back 100%</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="header-mid-inner mrg-nn4">
								<span class="header-mid-inner-icon"><i class="fa fa-phone"></i></span>
								<div class="header-mid-info">
									<span class="title-upper">payment secured</span>
									<span class="title-capi">Payment Secured</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="header-mid-inner mrg-nn4">
								<span class="header-mid-inner-icon"><i class="fa fa-lock"></i></span>
								<div class="header-mid-info">
									<span class="title-upper">Phone: 0123-456-789</span>
									<span class="title-capi">Order Online Now!</span>
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
			</div> <!-- End Header Bottom Area  -->
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="mainmenu-left visible-lg  visible-md">
								<div class="product-menu-title">
									<h2>分类</h2>
								</div>
								<div class="product_vmegamenu categories-none">
									<ul>
										<li>
											<a href="#" class="hover-icon">分类</a>
											<div class="vmegamenu">
												<span>
													<a href="#" class="vgema-title">中国</a>
												</span>
												
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#" class="hover-icon">分类</a>
											<div class="vmegamenu">
												<span>
													<a href="#" class="vgema-title">中国</a>
												</span>
												
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#" class="hover-icon">分类</a>
											<div class="vmegamenu">
												<span>
													<a href="#" class="vgema-title">中国</a>
												</span>
												
											</div>
										</li>
									</ul>
									<ul>
										<li>
											<a href="#" class="hover-icon">分类</a>
											<div class="vmegamenu">
												<span>
													<a href="#" class="vgema-title">中国</a>
												</span>
												
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-9 visible-lg visible-md">
							<nav class="mainmenu">
								<ul>
									<li><a href="index.html">首页</a>
										<ul>
											<li><a href="index.html">Home Version 1</a></li>
											<li><a href="index-2.html">Home Version 2</a></li>
											<li><a href="index-3.html">Home Version 3</a></li>
											<li><a href="index-4.html">Home Version 4</a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="shop-grid.html">Shop Grid</a></li>
											<li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
											<li><a href="shop-list.html">Shop List</a></li>
											<li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
											<li><a href="product-details.html">Product Details</a></li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Single Blog</a></li>
											<li><a href="account.html">Account</a></li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="check-out.html">Checkout</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact-us.html">Contact Us</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu-area visible-sm visible-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="mobile-menu">
								<div class="mobile-menu-active">
									<ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Version 1</a></li>
                                                <li><a href="index-2.html">Home Version 2</a></li>
                                                <li><a href="index-3.html">Home Version 3</a></li>
                                                <li><a href="index-4.html">Home Version 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Single Blog</a></li>
                                                <li><a href="account.html">Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="check-out.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> 
	</head>

	<body>

		
			<div class="jubao">
			</div>
		</div>
		<div class="Caddress">
			<div class="open_new">
				<a href="/home/shangcheng/shdz"><button class="open_btn" onclick="javascript:onclick_open();">添加新地址</button></a>
			</div>
			@foreach($message as $v)
			
			<div class="add_mi" xuzong='{{$v->id}}' style="margin-bottom: 10px;" nihao="{{$v->id}}">
				<p style="border-bottom:1px dashed #ccc;line-height:28px;">{{$v['name']}}</p>
				<p> {{$v->address['sname']}}{{$v->address['cname']}}{{$v->address['zname']}}{{$v->address['xname']}}{{$v->address['xxdz']}}{{$v['phone']}}&nbsp; &nbsp;{{$v['bphone']}}</p>
				
                  <div align="left" style="float:left;width:30px;"><p>
                  	 <input type="hidden" name="aid" value="{{$v->address->id}}">
                   <a href="/home/shangcheng/edit/{{$v['id']}}" class="am-btn am-btn-default am-btn-xs am-text-secondary bianji" ><span class="am-icon-pencil-square-o"></span>编辑</a></p></div>
                  
                  <div>
                  	<a href="/home/shangcheng/delete/{{$v['id']}}" class="shanchu">删除</a>
                  </p>
              </div>
			</div>
			@endforeach
		
		</div>

	
		<div class="shade">
		</div>
		<script>
			$('.bianji').click(function(e){

				e.stopPropagation();
			});
			$('.shanchu').click(function(e){
				e.stopPropagation();
			})
		</script>
		
		
			
		
				
					

		<!-- 底部开始 -->
		<div id="down">
			<div class="down_top">
				<a href="#">关于我们</a>
				<a href="#">联系我们</a>
				<a href="#">商家入驻</a>
				<a href="#">营销中心</a>
				<a href="#">手机商城</a>
				<a href="#">友情链接</a>
				<a href="#">销售联盟</a>
				<a href="#">商城社区</a>
				<a href="#">商城公益</a>
				<a href="#" style="border-right:none">English Site</a>
			</div>
			<div class="down_center">
				<span>北京市公安局朝阳分局备案编号110105014669  |  京ICP证070359号  |  <a href="#">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>  |  新出发京零 字第大120007号</span>
				<span><a href="#">音像制品经营许可证苏宿批005号</a>  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号</span>
				<span><a href="#">网络文化经营许可证京网文[2011]0168-061号</a>  违法和不良信息举报电话：4006561155  Copyright © 2004-2014  商城JD.com 版权所有</span>
				<span>商城旗下网站：<a href="#">360TOP</a><a href="#">拍拍网</a><a href="#">网银在线</a></span>
			</div>
			<div class="down_bot">
				<img src="/more/images/bot1.gif" alt="" />
				<img src="/more/images/bot2.gif" alt="" />
				<img src="/more/images/bot3.png" alt="" />
				<img src="/more/images/bot4.png" alt="" />
			</div>
		</div>
		<!-- 底部结束 -->
	</body>

</html>