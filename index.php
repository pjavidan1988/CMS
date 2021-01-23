<?php
    include_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="robots" content="noindex, follow" />

	<title>قالب HTML انرکاس</title>

	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

	<!-- font-awesome CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

	<!-- preloader CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/preloader.css"> 

	<!-- slider-pro CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slider-pro.css">

	<!-- slick CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">

	<!-- main CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- google font CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<!-- =====================================
    	==== Start header -->
	<!-- header-desktop -->
	<header class="header">
		<div class="topbar pt-30 pb-30">
			<div class="container d-flex justify-content-between align-items-center">
				<div class="top-bar">
					<div class="header-language item-dropdown">
						<a href="#" class="top-bar__item">انگلیسی
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="content-dropdown">
							<li class="active"><a href="#">انگلیسی</a></li>
							<li><a href="#">فرانسوی</a></li>
							<li><a href="#">عربی</a></li>
						</ul>
					</div>
					<div class="header-currency item-dropdown">
						<a href="#" class="top-bar__item">دلار آمریکا
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="content-dropdown">
							<li><a href="#"><span class="symbol">€</span>یورو</a></li>
							<li class="active"><a href="#"><span class="symbol">$</span>دلار آمریکا</a></li>
							<li><a href="#"><span class="symbol">£</span>GBP</a></li>
						</ul>
					</div>
				</div>
				<div class="otf-flex-item"></div>
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<img src="assets/images/logo.png" alt=""> 
						</a>
					</div>
					<!-- /Logo -->
				</div>
				<div class="otf-flex-item"></div>
				<div class="site-header -icon">
					<!-- acount -->
					<div class="site-header__account">
			            <a href="account.html" class="account-btn">
			            	<img src="assets/images/icon_account.png" alt=""> 
			            </a>
					</div>
					<!-- search -->
					<div class="site-header__search">
			            <div class="ps-search-btn">
			              	 <i class="fa fa-search" aria-hidden="true"></i>
			            </div>
			            <div class="ps-search">
						    <div class="ps-search__content">
						     	<a class="ps-search__close" href="#"><span></span></a>
						     	<h3 class="search_title">کلیدواژه خود را وارد کنید</h3>
						        <form method="get" class="searchform" action="#">
									<div class="wiget-search input-group">
										<input name="s" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="جستجو . . ."> 

										<span class="input-group-addon input-large btn-search"> 
										 	<span class="fa fa-search"></span>
										 	<input type="submit" class="fa" value=""> 
										 </span>
									</div>
								</form>
						    </div>
				    	</div>
					</div>
				    <!-- cart -->
			      	<div class="site-header__cart item-dropdown">
				        <a href="cart.html" class="site-header__cart-toggle">
				          	<span class="cartcount">3</span>
				           	<i class="fa fa-shopping-basket" aria-hidden="true"></i> 
				            <span class="cartcost"><span class="money" data-currency-usd="$129.58">130 ه ت</span></span>
				        </a>
				        <div class="widget_shopping_cart_content  content-dropdown">
							 <div class="cart_list ">
							    <div class="media widget-product">
							      <div class="media-left">
								      <a href="product_single.html" class="image pull-left">
									      <img src="assets/images/product/product_1.jpg" alt=""> 
									  </a>
							      </div>
							      <div class="cart-main-content media-body">
								      	<h3 class="name">
									      <a href="product_single.html">
									      	نسخه استاندارد ورزشی
									      </a>
								      	</h3>
								     	 <p class="cart-item">
								      		<span class="quantity">2 × <span class="price-amount amount">100<span class="price-currencySymbol">ه ت</span></span></span>  
								      	 </p>
								      <a href="#" class="remove" title="Remove this item">×</a>
							      </div>
							    </div>
							    <div class="media widget-product">
							      <div class="media-left">
								      <a href="product_single.html" class="image pull-left">
									      <img src="assets/images/product/product_2.jpg" alt=""> 
									  </a>
							      </div>
							      <div class="cart-main-content media-body">
								      <h3 class="name">
									      <a href="product_single.html">
									      	نسخه پریمیوم محدود
									      </a>
								      </h3>
								      <p class="cart-item">
								      <span class="quantity">1× <span class="price-amount amount">50<span class="price-currencySymbol">ه ت</span></span></span>           </p>
								      <a href="#" class="remove" title="Remove this item">×</a>
							      </div>
							    </div>
							     <div class="media widget-product">
							      <div class="media-left">
								      <a href="product_single.html" class="image pull-left">
									      <img src="assets/images/product/product_3.jpg" alt=""> 
									  </a>
							      </div>
							      <div class="cart-main-content media-body">
								      <h3 class="name">
									      <a href="product_single.html">
									      	نسخه محدود طلایی
									      </a>
								      </h3>
								      <p class="cart-item">
								      <span class="quantity">2 × <span class="price-amount amount">100<span class="price-currencySymbol">ه ت</span></span></span>           </p>
								      <a href="#" class="remove" title="Remove this item">×</a>
							      </div>
							    </div>
							 </div>
							  <p class="total"><strong>جمع کل:</strong>
							     <span class="price-amount amount">
							    <span class="price-currencySymbol">ه ت</span>450</span>
							  </p>
							  <p class="buttons clearfix">
								  <a href="checkout.html" class="btn check-out btn-primary btn-normal pull-right">پرداخت</a>
								  <a href="cart.html" class="btn view-cart btn-default btn-normal pull-left">مشاهده سبد خرید</a>
						 	 </p>
						</div>
			        </div>
		        </div>
		    </div>
		</div>
	    <!-- header-main -->
	    <div class="header-main pb-10 pt-10">
	    	<div class="container">
			    <nav id="nav" class="navbar">
					<!--  Main navigation  -->
                    <?php
                    $row=listMenuDefault();
                    if($row):
                    ?>
					<ul class="main-nav nav navbar-nav navbar-right">
                        <?php
                            foreach ($row as $val):
                        ?>
						<li class="dropdown active">
							<a href="<?php echo $val['url']; ?>">
                                <?php echo $val['title']; ?>
                            </a>

                            <?php
                            $rows=listSubMenuDefault($val['id']);
                            if($rows):
                            ?>
							<ul class="dropdown-menu">
                            <?php
                            foreach ($rows as $value):
                                ?>
				            	<li>
                                    <a href="<?php echo $value['url']; ?>">
                                        <?php echo $value['title']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
			            	</ul>
                            <?php endif; ?>
						</li>
                        <?php
                            endforeach;
                        ?>
					</ul>
                    <?php endif; ?>
					<!-- /Main navigation -->
				</nav>
	    	</div>
	    </div>
	    <!-- /header-main -->
	</header>
	<!-- /header-desktop -->
	<!-- header-mobile -->
	<div class="header-mobile">
		<div class="header-mobile-top">
	        <div class="top-bar">
				<div class="header-language item-dropdown">
					<a href="#" class="top-bar__item">انگلیسی
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="content-dropdown">
						<li class="active"><a href="#">انگلیسی</a></li>
						<li><a href="#">فرانسوی</a></li>
						<li><a href="#">عربی</a></li>
					</ul>
				</div>
				<div class="header-currency item-dropdown">
					<a href="#" class="top-bar__item">دلار آمریکا
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="content-dropdown">
						<li><a href="#"><span class="symbol">€</span>یورو</a></li>
						<li class="active"><a href="#"><span class="symbol">$</span>دلار آمریکا</a></li>
						<li><a href="#"><span class="symbol">£</span>GBP</a></li>
					</ul>
				</div>
			</div>
			<div class="site-header -icon">
				<!-- search -->
					<div class="site-header__search">
			            <div class="ps-search-btn">
			              	 <i class="fa fa-search" aria-hidden="true"></i>
			            </div>
			            <div class="ps-search">
						    <div class="ps-search__content">
						     	<a class="ps-search__close" href="#"><span></span></a>
						     	<h3 class="search_title">کلیدواژه خود را وارد کنید</h3>
						        <form method="get" class="searchform" action="#">
									<div class="wiget-search input-group">
									 <input name="s" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="جستجو . . ."> 

									 <span class="input-group-addon input-large btn-search"> 
									 	<span class="fa fa-search"></span>
									 	<input type="submit" class="fa" value=""> 
									 </span>
									</div>
								</form>
						    </div>
					    </div>
					</div>
				<!--end search -->
		    </div>
	    </div>
		
		<nav class="navbar">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- logo -->
		      <div class="navbar-brand">
		      	<a class="logo" href="index.php"><img src="assets/images/logo.png" alt=""> </a>
		      </div>
		      <!-- logo -->
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			       <li class="active dropdown">
			          	<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">صفحه اصلی <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				          	<li><a href="../v2/index.html">صفحه اصلی 2</a></li>
				            <li><a href="../v3/index.html">صفحه اصلی 3</a></li>
			         	</ul>
		       		</li>
			        <li class="dropdown">
			          	<a href="product_grid.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pمحصولات <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				          	<li><a href="product_grid.php">محصولات شبکه ای</a></li>
			            	<li><a href="product_list.html">محصولات لیستی</a></li>
			                <li><a href="product_sidebar.html">محصولات با سایدبار</a></li>
			            	<li><a href="product_single.html">ادامه مطلب محصول</a></li>
			         	</ul>
		       		</li>
		       		<li class="dropdown">
			          	<a href="#l" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">صفحات<span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="faq.html">سؤالات متداول</a></li>
					        <li><a href="404.html">خطای 404</a></li>
			         	</ul>
		       		</li>
		       		 <li class="dropdown">
			          	<a href="blog.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">وبلاگ<span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="blog.html">وبلاگ شبکه ای</a></li>
			                <li><a href="blog_list.html">وبلاگ لیستی</a></li>
			            	<li><a href="blog_single.html">ادامه مطلب وبلاگ</a></li>
			         	</ul>
		       		</li>
		       		<li><a href="contact.html">تماس</a></li>
		      	</ul>
		    </div>
		</nav>
	</div>
	<div class="footer-mobile-bar">
		<ul class="columns-2">
			<li class="my-account">
				<a class="my-accrount-footer" href="account.html">
					<i class="fa fa-user-o" aria-hidden="true"></i>
				</a>          
			</li>
			<li class="cart">
				<a class="footer-cart-contents" href="cart.html" title="مشاهده سبد خریدتان">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<span class="count">1</span>
				</a>
			</li>
		</ul>
    </div>
	<!-- End header ====
    	======================================= -->

	
	<!-- =====================================
    	==== Start slider -->
	<section class="section-main-slider">
		<div class="main-slider my-slider slider-pro skin2" id="my-slider-1" data-slider-width="100%" data-slider-height="670">
		    <div class="sp-slides">
		        <!-- Slide 1 -->
		       	<div class="sp-slide section-bg" style="background-image:url(assets/images/slider/home3_slider1.jpg)">
		           		<span class="sp-layer main-slider__img" data-horizontal="250" data-vertical="100"  data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
							<img class="img-responsive" src="assets/images/slider/home3_slider1.png" height="593" alt="">
						</span>

						<div class="sp-layer main-slider__text btn-sale text-white font-bold section-bg hidden-xs hidden-sm" data-horizontal="50%" data-vertical="140"  data-show-transition="up" data-hide-transition="right" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200" style="background-image:url(assets/images/slider/home3_slider1_3.png)">
		                    <span class="btn-sale__title"> فقط </span>
							<span class="btn-sale__price">59 ه ت</span>
				        </div>


				        <h2 class="sp-layer main-slider__title font-italic" data-horizontal="10%" data-vertical="120" data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
							فروشگاه محصولات طبیعی
						</h2>
						<h2 class="sp-layer main-slider__title color-primary font-bold hidden-md" data-horizontal="29%" data-vertical="210" data-show-transition="up" data-hide-transition="right" data-show-duration="900" data-show-delay="900" data-hide-delay="900">
							مراقیت پوست
						</h2>
				        <div class="sp-layer main-slider__text" data-horizontal="21%" data-vertical="320"  data-show-transition="up" data-hide-transition="right" data-show-duration="1000" data-show-delay="1000" data-hide-delay="1000">
				            <p class="hidden-xs">
				           		لورم ایپسوم متنی ساختگی با تولید سادگی نامفهوم ازست<br/>
								این متنی ساختگیست
							</p>
				            <div class="main-slider__btn-group">
				                <a class="mt-40 btn btn-features btn-primary btn-radius" href="product_grid.php">حالا بخرید <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </a>
				            </div>
				        </div>
				        <span class="sp-layer main-slider__img" data-horizontal="80%" data-vertical="500"  data-show-transition="up" data-hide-transition="right" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200">
							<img class="img-responsive" src="assets/images/slider/home3_slider1_8.png" height="87" width="198" alt="">
						</span>
				</div>
		        <!-- end sp-slide -->


		        <!-- Slide 2-->
		       	<div class="sp-slide section-bg" style="background-image:url(assets/images/slider/home3_slider2.jpg)">
			        <h2 class="sp-layer main-slider__title font-italic text-center" data-horizontal="50%" data-vertical="120" data-show-transition="up" data-hide-transition="center" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
						فروشگاه محصولات طبیعی
					</h2>
					<h2 class="sp-layer main-slider__title color-primary font-bold  text-center" data-horizontal="50%" data-vertical="210" data-show-transition="up" data-hide-transition="center" data-show-duration="900" data-show-delay="900" data-hide-delay="900">
						مراقبت پوست
					</h2>
			        <div class="sp-layer main-slider__text text-center" data-horizontal="50%" data-vertical="310"  data-show-transition="up" data-hide-transition="center" data-show-duration="1000" data-show-delay="1000" data-hide-delay="1000">
			            <p class="hidden-xs">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. <br/>
							چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
			            <div class="main-slider__btn-group">
			                <a class="mt-40 btn btn-features btn-primary btn-radius" href="product_grid.php">حالا بخرید <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </a>
			            </div>
			        </div>
			        <div class="sp-layer main-slider__text btn-sale text-white font-bold section-bg hidden-xs hidden-sm" data-horizontal="20%" data-vertical="120"  data-show-transition="up" data-hide-transition="left" data-show-duration="1200" data-show-delay="1200" data-hide-delay="1200" style="background-image:url(assets/images/slider/home3_slider1_3.png)">
		                    <span class="btn-sale__title"> فقط </span>
							<span class="btn-sale__price">59 ه ت</span>
				        </div>
				</div>
		        <!-- end sp-slide -->
		    </div>
		</div>
	</section>
	<!-- End slider ====
    	======================================= -->

	<!-- =====================================
    	==== Start features-banner  -->
	<section class="features-banner section-bg pt-120 pb-60 clearfix" style="background-image:url(assets/images/bg_0.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-6 pb-60">
					<div class="features-heading">
			            <img class="features-heading__image" src="assets/images/feature/icon_feature.png" alt="">
						<h2 class="features-heading__title">انرکاس چیست؟</h2>
						<p class="features-heading__description">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ<br/>
							و با استفاده از طراحان گرافیک است. <br/>
							چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
						</p>
					</div>
					<a class="btn btn-primary btn-radius btn-features" href="about.html">مشاهده بیشتر <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </a>
				</div>
				<div class="col-md-6 pb-60">
					<img src="assets/images/banner1.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================
    	==== End features-banner  -->


    <!-- =====================================
    	==== Start features-skin  -->
	<section class="features skin1 features-skin section-bg pt-100 pb-40 clearfix" style="background-image:url(assets/images/bg_1.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-3"></div>
				<div class="col-md-6 col-sm-9">
					<div class="features-heading">
			            <img class="features-heading__image" src="assets/images/feature/icon_feature.png" alt="">
						<h2 class="features-heading__title">مراقبت از پوست با محصولات طبیعی</h2>
						<p class="features-heading__description">
							هیج چیز قادر نیست روایت قدرت را به استواری و صلابت خود آن بیان کند. قدرت همانند دلیل و منطق (حتی قبل از توسل به قهر و خشونتی که در اختیار دارد) روشن و قانع کننده است!
						</p>
					</div>
				   	<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_1.png" alt="">
						</div>
						<div class="features-description">
							<h4>بدون مواد شیمیایی، 100% طبیعی</h4>
							<p>
								معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند
							</p>
						</div>
					</div>	
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_2.png" alt="">
						</div>
						<div class="features-description">
							<h4>کملا خالص</h4>
							<p>
								تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد
							</p>
						</div>
					</div>	
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_3.png" alt="">
						</div>
						<div class="features-description">
							<h4>بهترین محصول آرایش سال</h4>
							<p>
								چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند
							</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================
    	====End features-skin  -->


	 <!-- =====================================
    	==== Start features-step  -->
	<section class="features skin1 features-step section-bg pt-100 pb-100 clearfix" style="background-image:url(assets/images/bg_4.jpg)">
		<div class="container">
			<div class="features-heading">
	            <img class="features-heading__image" src="assets/images/feature/icon_feature.png" alt="">
				<h2 class="features-heading__title">روش استفاده از انرکاس</h2>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-9">
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/step/home3_step_1.png" alt="">
						</div>
						<div class="features-description">
							<h4>قدم اول: پاکسازی</h4>
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
							</p>
						</div>
					</div>
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/step/home3_step_2.png" alt="">
						</div>
						<div class="features-description">
							<h4>قدم دوم: مرطوب کردن</h4>
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
							</p>
						</div>
					</div>
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/step/home3_step_3.png" alt="">
						</div>
						<div class="features-description">
							<h4>قدم سوم: تبریک</h4>
							<p>
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-3">
				</div>
			</div>
		</div>
	</section>
	 <!-- =====================================
    	==== End features-step  -->


	<section class="features skin1 bg-feature2 section-bg pt-100 pb-60 clearfix" style="background-image:url(assets/images/bg_2.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6">
					<div class="features-heading pb-60">
			            <img class="features-heading__image" src="assets/images/feature/icon_feature.png" alt="">
						<h2 class="features-heading__title">فواید اصلی انرکاس</h2>
					</div>
				   	<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_4.png" alt="">
						</div>
						<div class="features-description">
							<h4>کاملا طبیعی</h4>
							<p>
								آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
							</p>
						</div>
					</div>	
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_5.png" alt="">
						</div>
						<div class="features-description">
							<h4>صرفه جویی</h4>
							<p>
								آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
							</p>
						</div>
					</div>	
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/feature/icon_feature_6.png" alt="">
						</div>
						<div class="features-description">
							<h4>فعال در تمام مراحل</h4>
							<p>
								آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
							</p>
						</div>
					</div>	
				</div>
				
			</div>
		</div>
	</section>

	 <!-- =====================================
    	==== Start testimonials  -->
	<section class="testimonials pt-100 clearfix">
		<div class="container">
			<div class="row">
				<div class="features-heading pb-60 text-center">
		            <img class="features-heading__image" src="assets/images/feature/icon_feature.png" alt="">
					<h2 class="features-heading__title">مشتریان ما می گویند</h2>
				</div>
				<div class="testimonials_content text-center">
	 				<div class="owl-carousel owl-theme" data-pagination="true" data-nav="flase" data-items="3" data-large="3" data-medium="3" data-smallmedium="2" data-extrasmall="1" data-verysmall="1" data-autoplay="true">
			            <div class="item">
			             	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials1.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                <div class="testimonials__name">الکس مک کو</div>
				                <div class="testimonials__job">موسس و مدیر </div>
				            </div>
			            </div>
			            <div class="item">
			            	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials2.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                 <div class="testimonials__name">آماندا میتم</div>
				                <div class="testimonials__job">مدیر محصول</div>
				            </div>
			            </div>
			            <div class="item">
			            	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials3.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                <div class="testimonials__name">دنیل مور</div>
				                <div class="testimonials__job">دنیل مور</div>
				            </div>
			            </div>
			            <div class="item">
			            	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials2.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                 <div class="testimonials__name">آماندا میتم</div>
				                <div class="testimonials__job">مدیر محصول</div>
				            </div>
			            </div>
			            <div class="item">
			            	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials3.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                <div class="testimonials__name">دنیل مور</div>
				                <div class="testimonials__job">دنیل مور</div>
				            </div>
			            </div>
			            <div class="item">
			             	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials1.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                <div class="testimonials__name">الکس مک کو</div>
				                <div class="testimonials__job">موسس و مدیر </div>
				            </div>
			            </div>
			            <div class="item">
			            	<div class="testimonial_item">
				            	<img src="assets/images/testimonials/testimonials2.png" alt="">
				                <div class="testimonials__content">
				                	آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
								</div>
				                 <div class="testimonials__name">آماندا میتم</div>
				                <div class="testimonials__job">مدیر محصول</div>
				            </div>
			            </div>
			        </div>
	 			</div>
			</div>
		</div>
	</section>
	<!-- =====================================
    	==== End testimonials  -->

    <!-- =====================================
    	==== Start features-policy  -->
	<section class="features features-policy clearfix mt-20 mb-60">
		<div class="container">
			<div class="row">
				<div class="features-border">
					<div class="col-md-3 col-sm-6">
					   	<div class="features_list text-center pb-40">
							<div class="features-images">
								<img src="assets/images/feature/icon_feature_7.png" alt="">
							</div>
							<div class="features-description">
								<h4>ارسال رایگان</h4>
								<p>
									ارسال رایگان
								</p>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
					   	<div class="features_list text-center pb-40">
							<div class="features-images">
								<img src="assets/images/feature/icon_feature_8.png" alt="">
							</div>
							<div class="features-description">
								<h4>نمونه رایگان</h4>
								<p>
									با هر سفارش*
								</p>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
					   	<div class="features_list text-center pb-40">
							<div class="features-images">
								<img src="assets/images/feature/icon_feature_9.png" alt="">
							</div>
							<div class="features-description">
								<h4>تخفیف های ویژه</h4>
								<p>
									در تمام طول سال
								</p>
							</div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
					   	<div class="features_list text-center pb-40">
							<div class="features-images">
								<img src="assets/images/feature/icon_feature_10.png" alt="">
							</div>
							<div class="features-description">
								<h4>پشتیبانی آنلاین 7/24</h4>
								<p>
									پشتیبانی باور نکردنی
								</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================
    	==== End features-policy  -->

	 <!-- =====================================
    	====Start product-feature  -->
	<section class="product-feature section-bg section-bg-fix pt-160 pb-160 clearfix" style="background-image:url(assets/images/bg_3.jpg)">
		<div class="container">
	 		<div class="feature-product text-white">
	 			<div class="col-md-6">
	 				<div class="feature-product__images">
			 		 	<img src="assets/images/product_feature.png" alt="">
			 		</div>
			 	</div>
	 			<div class="col-md-6">
					<h2 class="feature-product__title">کرم روشن کننده پوست با استاندارد سیب سبز</h2>
					<p class="feature-product__description">
						چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند
					</p>
					<div class="product-feature__meta">
						<div class="product-price">
							<span class="amout">
								<span class="money" data-currency-usd="80 ه ت ">80 ه ت </span>
								<span class="old-price">109 ه ت </span>
							</span>
						</div>
						<a href="product_single.html" class="btn btn-primary btn-radius btn-features">اضافه به سبد خرید<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =====================================
    	==== End product-feature -->

	<!-- =====================================
    	====Start instagram  -->
	<div class="widget-instagram-feed pt-80 clearfix">
		<div class="container">
	        <ul class="instagram-content clearfix">            
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_1.jpg" alt="">  
					</a> 
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_2.jpg" alt="">   
					</a>
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_3.jpg" alt="">  
					</a> 
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_4.jpg" alt="">  
					</a> 
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_5.jpg" alt="">  
					</a> 
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
				<li class="item">
					<a href="#">
						<img src="assets/images/instagram/instagram_6.jpg" alt="">   
					</a>
					<div class="insta-info">
						<div class="insta-meta">
							<span><i class="fa fa-heart-o" aria-hidden="true"></i>(5)</span>
							<span><i class="fa fa-comments-o" aria-hidden="true"></i>(10)</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
   	<!-- =====================================
    	==== End instagram -->


 	<!-- =====================================
    	==== Start footer -->
    <footer class="site-footer site-footer-3 clearfix">
    	<div class="site-footer__main section-bg" style="background-image:url(assets/images/bg_footer.jpg)">
	    	<div class="container">
	    		<div class="col-md-5 col-sm-6 col-xs-12 footer-block pb-30">
		    		 <img src="assets/images/logo.png" alt=""> 
		    		 <p class="address pt-30">دفتر ما: ایران، تهران، تهران بزرگ، میدان آزادی. . .<br/>
						تلفن: 09123456789<br/>
						پست الکترونیک: email@email.com
					</p>
					<ul class="social pt-10">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
		    	</div>
		    	<div class="col-md-2 col-sm-6 col-xs-12 footer-block pb-30">
	    			<h3 class="widget-title">لینک های مفید</h3>
	    			<ul>
	    				<li><a href="about.html">درباره ما</a></li>
	    				<li><a href="contact.html">تماس با ما</a></li>
	    				<li><a href="blog.html">اخبار</a></li>
	    				<li><a href="account.html">حساب من</a></li>
	    				<li><a href="faq.html">سؤالات متداول</a></li>
	    				<li><a href="account.html">ثبت نام</a></li>
	    			</ul>
		    	</div>

		    	<div class="col-md-2 col-sm-6 col-xs-12 footer-block pb-30">
	    			<h3 class="widget-title">فروشگاه مرکزی</h3>
	    			<ul>
	    				<li><a href="product_sidebar.html">پاک کننده ها و تینر ها</a></li>
	    				<li><a href="product_sidebar.html">سرم ها و تقویت کننده ها</a></li>
	    				<li><a href="product_sidebar.html">مراقبت روزانه</a></li>
	    				<li><a href="product_sidebar.html">مراقبت شبانه</a></li>
	    				<li><a href="product_sidebar.html">مراقبت چشم</a></li>
	    				<li><a href="product_sidebar.html">ضد آفتاب</a></li>
	    			</ul>
		    	</div>
		    	<div class="col-md-3 col-sm-6 col-xs-12 footer-block pb-30">
		    		<h3 class="widget-title">ارتباط با ما</h3>
		    		<div class="features skin1">
		    			<div class="features_list">
							<div class="features-images">
								<img src="assets/images/icon_mail.png" alt="">
							</div>
							<div class="features-description">
								<h4>از ما سؤالی دارید؟</h4>
								<p>
									email.example@gmail.com
								</p>
							</div>
						</div>
						<div class="features_list">
							<div class="features-images">
								<img src="assets/images/icon_phone.png" alt="">
							</div>
							<div class="features-description">
								<h4>1800-1314-1009</h4>
								<p>
									1800-1314-1009
								</p>
							</div>
						</div>
		    		</div>
		    		<div class="payment pt-20">
		        		<img src="assets/images/payment.png" alt="">
		        	</div>
		    	</div>
		    </div>
	   </div>
	  <div class="site-footer__copyright">
	   		<div class="container">
	    		<div class="copyright pull-right">
	        		© 1398. تمامی حقوق برای ما محفوظ است.<a href="#" target="_blank">انرکاس</a>
	        	</div>
	       </div>
	   </div>
    </footer>
    <!-- =====================================
    	==== End footer -->

   	<!-- back-to-top-->
    <div id="back-to-top"></div>
    <!-- back-to-top -->
     

    <!-- =====================================
    	====Start preloader -->
    <div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
    <!-- =====================================
    	==== End preloader -->

 	<!-- =====================================
    	====Start all js here -->

	<!-- jquery js-->
   	<script src="assets/js/jquery.min.js"></script>

	<!-- bootstrap js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- slick js-->
	<script src="assets/js/slick.min.js"></script>

	<!-- spritespin js-->
	<script src="assets/js/jquery-ui.min.js"></script>

	<!-- sliderPro js-->
	<script src="assets/js/jquery.sliderPro.min.js"></script>

    <!-- waypoints js-->
    <script src="assets/js/jquery.waypoints.js"></script>

	<!-- counterup js-->
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- custom js-->
	<script src="assets/js/custom.js"></script>
	<!-- =====================================
    	==== End all js herej -->
     
</body>
</html>