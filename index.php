<?php
    include_once 'include/functions.php';
    $settings=settings();
    $logo=logo();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $settings['description'];?>">

	<title>
        <?php
        echo $settings['title'];
        ?>
    </title>

	<!-- preloader CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/preloader.css"> 
	<!-- slider-pro CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slider-pro.css">
	<!-- slick CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">

	<!-- Main Style CSS CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
    <!-- font-awesome CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

	 <!-- Fonts --> 
	<link href='https://fonts.googleapis.com/css?family=Yantramanav:300,400,500,700,900' rel='stylesheet' type='text/css'>
</head>
		
<body>
	<!-- =====================================================================
    	==== Start header -->

		<!-- header-desktop -->
	<header class="header home2">
		<!-- top-bar -->
		<div class="topbar">
			<div class="container">
				<div class="top-bar">
			        <div class="top-bar__left pull">
			        	<div class="top-bar-register">
				            <a class="top-bar__item" href="account.html">
				            	<i class="fa fa-user-o" aria-hidden="true"></i>
				            	ثبت نام
				            </a>
				        </div>
			            <div class="top-bar-account">
				            <a class="top-bar__item" href="#">
				            	<i class="fa fa-lock" aria-hidden="true"></i>
				            	ورود
				            </a>
			            	<div class="content-dropdown left">
								<div class="account-inner ">
								    <div class="login-form-head">
								      	<span class="login-form-title">ورود به حساب</span>
						      	<span class="pull-right">
								     	 	<a class="register-link" href="account.html" title="Register">Create an Account</a>
								     	 </span>
								    </div>
								    <form class="opal-login-form-ajax" data-toggle="validator">
								        <p>
								        <label>نام کاربری یا ایمیل<span class="required">*</span></label>
								        <input name="username" type="text" required="" placeholder="نام کاربری">
								        </p>
								        <p>
								        <label>رمز عبور <span class="required">*</span></label>
								        <input name="password" type="password" required="" placeholder="رمز عبور">
								        </p>
								        <button type="submit" data-button-action="" class="btn btn-primary btn-block">ورود</button>
								        <input type="hidden" name="action" value="">
								        <input type="hidden" id="security-login" name="security-login" value="">
								        <input type="hidden" name="login" value="">
								    </form>
								    <div class="login-form-bottom">
								      		<a href="#" class="lostpass-link" title="رمز عبور خود را فراموش کرده اید؟">رمز عبور خود را فراموش کرده اید؟</a>
								    </div>          
								</div>
							</div>     
			        	</div>
			        </div>
			        <div class="top-bar__right">
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
		        </div>
			</div>
			<!-- /Container -->
	    </div>
	    <!-- /top-bar -->

	    <!-- header-main -->
	    <div class="header-main pb-30">
	    	<div class="container">
			    <nav id="nav" class="navbar">
			    	<div class="nav-collapse">
						<span></span>
					</div>
					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a class="img" href="index.html"><img src="admin/<?php echo $logo['img'];?>" width="100px" height="100px" alt=""></a>
						</div>
						<!-- /Logo -->
					</div>
					<!--  Main navigation  -->
					<div class="otf-flex-item"></div>
					<?php
                    $row=listMenuDefault();
                    if($row):
                    ?>
					<ul class="main-nav nav navbar-nav navbar-right">
						<?php
                            foreach ($row as $val):
                        ?>
						<li class="dropdown">
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
					<div class="otf-flex-item"></div>
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
							<!-- cart -->
				      	<div class="site-header__cart item-dropdown">
					        <a href="cart.html" class="site-header__cart-toggle">
					          	<span class="cartcount">3</span>
					           	<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					            <span class="cartcost"><span class="money" data-currency-usd="0 ه ت ">0 ه ت </span></span>
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
										      	نوشیدنی انرژی زا ورزشی
										      </a>
									      	</h3>
									     	 <p class="cart-item">
									      		<span class="quantity">2 × <span class="price-amount amount">250<span class="price-currencySymbol"> ه ت </span></span></span>  
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
										      	نوشیدنی انرژی زا ورزشی
										      </a>
									      </h3>
									      <p class="cart-item">
									      <span class="quantity">2 × <span class="price-amount amount">250<span class="price-currencySymbol"> ه ت </span></span></span>           </p>
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
										      	نوشیدنی انرژی زا ورزشی
										      </a>
									      </h3>
									      <p class="cart-item">
									      <span class="quantity">2 × <span class="price-amount amount">200<span class="price-currencySymbol"> ه ت </span></span></span>           </p>
									      <a href="#" class="remove" title="Remove this item">×</a>
								      </div>
								    </div>
								 </div>
								  <p class="total"><strong>جمع کل:</strong>
								     <span class="price-amount amount">
								    <span class="price-currencySymbol"> ه ت </span>700</span>
								  </p>
								  <p class="buttons clearfix">
								  <a href="cart.html" class="btn view-cart btn-default btn-normal pull-right">مشاهده سبد خرید</a>
								  <a href="#" class="btn check-out btn-primary btn-normal pull-left">پرداخت</a>
							 	 </p>
							</div>
				        </div>
			        </div>
				</nav>
	    	</div>
	    </div>
	    <!-- /header-main -->
	</header>
		<!--/header-desktop -->

		<!-- header-mobile -->
	<div class="header-mobile home2">
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
		      	<a class="logo" href="index.html"><img src="admin/<?php echo $logo['img'];?>" width="120px" height="120px" alt=""> </a>
		      </div>
		      <!-- logo -->
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                $row=listMenuDefault();
                if($row):
                ?>
		      	<ul class="nav navbar-nav">
                    <?php
                    foreach ($row as $val):
                    ?>
			        <li class="active dropdown">
			          	<a href="<?php echo $val['url']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $val['title']; ?><span class="caret"></span></a>
                        <?php
                        $rows=listSubMenuDefault($val['id']);
                        if($rows):
                        ?>
			          	<ul class="dropdown-menu">
                            <?php
                            foreach ($rows as $value):
                            ?>
				          	<li><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></li>
                            <?php endforeach; ?>
			         	</ul>
                        <?php endif; ?>
		       		</li>
                    <?php
                    endforeach;
                    ?>
		      	</ul>
                <?php endif; ?>
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
    	<!--/header-mobile -->

	<!-- =====================================================================
    	==== End header -->

	<!-- =====================================================================
    	==== Start slider -->
	<div class="section-main-slider">
		
	    <div class="main-slider my-slider slider-pro" id="my-slider-1" data-slider-width="100%" data-slider-height="925">
		    
		        <div class="sp-slides text-white">
		           <!-- Slide 1 -->
		           	<div class="sp-slide section-bg" style="background-image:url(assets/images/home2_bg_header.jpg)">

					    <div class="container">
					        <h2 class="sp-layer main-slider__title" data-horizontal="800" data-vertical="290" data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
                                <?php echo $settings['main_slider_title'];?>
							</h2>
							<h2 class="sp-layer main-slider__title font-bold" data-horizontal="600" data-vertical="380" data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="800" data-hide-delay="800">
                                <?php echo $settings['main_slider_title2'];?>
							</h2>
					        <div class="sp-layer main-slider__text" data-horizontal="600" data-vertical="500"  data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="1200" data-hide-delay="1200">
					            <p>
                                    <?php echo $settings['main_slider_text'];?>
								</p>
					            <div class="main-slider__btn-group">
					                <a class="btn btn-features btn-primary mt-60" href="product_list.html">هم اکنون بخرید <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
					                </a>
					            </div>
					        </div>
					        <span class="sp-layer main-slider__img" data-horizontal="0" data-vertical="120" data-width="45%" data-show-transition="up" data-hide-transition="right" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
									<img class="img-responsive" src="assets/images/slider/image_slider1.png" height="612" width="759" alt="">
							</span>
					    </div>
					</div>
		            <!-- end sp-slide -->
		        </div>
		    
	        <!-- end sp-slides -->
	    </div>
	    <!-- end main-slider -->
	
    </div>
	<!-- =====================================================================
    	==== End slider -->
	
    <!-- =====================================================================
    	==== Start feature-icon-absolute  -->
	<div class="features feature-icon-absolute clearfix text-center">
		<div class="container">
			<div class="row">
                <?php
                $widget=listWidgetDefault();
                foreach ($widget as $value):
                ?>
				<div class="col-md-3 col-sm-6 features_content">
					<div class="features_list">
						<div class="features-images">
							<img src="admin/<?php echo $value['img']?>" width="50" height="60"  alt="">
						</div>
						<div class="features-description">
							<h4><?php echo $value['title'];?></h4>
							<p><?php echo $value['text'];?></p>
						</div>
					</div>
				</div>
                <?php
                    endforeach;
                ?>
			</div>
		</div>
	</div>
	<!-- =====================================================================
    	==== End feature-icon-absolute  -->

    <!-- =====================================================================
    	==== Start feature-counter -->
	<div class="features skin1 feature-counter section-bg clearfix" style="background-image:url(assets/images/home2_bg1.jpg)">
    	<div class="container">
    		<div class="features-heading pb-50">
				<h2 class="features-heading__title">چرا ما رو انتخاب کنید</h2>
				<p class="features-heading__description">
						لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
					<br/>
					و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
					<br/>در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
				</p>
			</div>
    		<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/counter/icon_counter1.png" alt="">
						</div>
						<div class="features-description">
							<span class="counter">3,568</span>
							<p>
								مشتریان راضی
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/counter/icon_counter2.png" alt="">
						</div>
						<div class="features-description">
							<span class="counter">785</span>
							<p>
								مشتریان راضی
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="features_list">
						<div class="features-images">
							<img src="assets/images/counter/icon_counter3.png" alt="">
						</div>
						<div class="features-description">
							<span class="counter">90</span><span>+</span>
							<p>
								مشتریان راضی
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- =====================================================================
    	==== End feature-counter -->

     <!-- =====================================================================
    	==== Start features-taste -->
	<div class="features skin1 features-taste section-bg text-white clearfix  pt-100 pb-100" style="background-image:url(assets/images/home2_bg2.jpg)">
		<div class="container">
			<div class="features-heading">
				<h2 class="features-heading__title">ترکیب های متفاوت</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="features_list pt-50 pb-50">
						<div class="features-images">
							<img src="assets/images/icon-feature5.png" alt="">
						</div>
						<div class="features-description">
							<h4>کافئین</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
						</div>
					</div>
					<div class="features_list  pt-50 pb-50">
						<div class="features-images">
							<img src="assets/images/icon-feature6.png" alt="">
						</div>
						<div class="features-description">
							<h4>ویتامین</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
						</div>
					</div>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-4">
					<div class="features_list  pt-50 pb-50">
						<div class="features-images">
							<img src="assets/images/icon-feature7.png" alt="">
						</div>
						<div class="features-description">
							<h4>فولیک اسید</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
						</div>
					</div>
					<div class="features_list  pt-50 pb-50">
						<div class="features-images">
							<img src="assets/images/icon-feature8.png" alt="">
						</div>
						<div class="features-description">
							<h4>گلیسین</h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- =====================================================================
    	==== End features-taste -->
    
     <!-- =====================================================================
    	==== Start product -->
	<div class="products pt-60 pb-100">
	     <div class="container">

	     	<div class="row">
	     		<div class="col-md-4 pt-40">
	     			<div class="text-center">
		     			<div class="features-heading skin2">
							<h2 class="features-heading__title">ویژه امروز</h2>
						</div>
						<div class="product_deal product-skin2">
							<div class="product-block">
								<div class="product-image ">
									<div class="product-thumbnail">
										<a href="product_single.html" title="">
											<img class="product-featured-image" src="assets/images/product/product_deal.jpg" alt="">
										</a>
									</div>
								</div>
								<div class="product-meta">
									<div class="deal-clock"></div>

									<h4 class="product-name">
										<a href="product_single.html" title="">نسخه استاندارد ورزشی</a>
									</h4>

									<div class="product-price">
										<span class="amout">
											<span class="money" data-currency-usd="14 ه ت">14 ه ت</span>
										</span>
									</div>
									<div class="product-footer">
										<a href="cart.html" class="btn btn-primary">اضافه به سبد خرید<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
									</div>
								</div><!-- /.product-meta -->
							</div>
					    </div>
					</div>
	     		</div>

				<div class="col-md-8  pt-40">
					<div class="features-heading skin2">
						<h2 class="features-heading__title">آخرین محصولات</h2>
					</div>
					<ul class="columns-4 text-center product-skin2">
                        <?php
                        $product=listProductDefault();
                        foreach ($product as $value):
                        ?>
						<li class="item-product">
							<div class="product-block">
								<div class="product-image ">
									<div class="product-thumbnail">
										<a href="product_single.html" title="">
											<img class="product-featured-image" src="admin/<?php echo $value['img']?>" alt="">
										</a>
									</div>
									<div class="product-actions">
										<a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="اضافه به لیست مورد علاقه">
										<i class="fa fa-heart-o"></i>
										</a>
										<a href="" data-id="" class="btn product-quick-view btn-quickview" title="نگاه سریع">
										    <i class="fa fa-eye"></i>
										</a>
										<a href="" data-id="" class="btn product-quick-compare btn-compare" title="مقایسه">
										    <i class="fa fa-retweet"></i>
										</a>
									</div>
								</div>
								<div class="product-meta">
									<h4 class="product-name">
										<a href="product_single.html" title=""><?php echo $value['title']?></a>
									</h4>
									<div class="product-price">
											<span class="amout">
												<span class="money" data-currency-usd="7 ه ت"><?php echo $value['productprice']?></span>
											</span>
											<a href="product_single.html" class="add_to_cart_button">اضافه به سبد خرید</a>
                                    </div>
								</div>
							</div>
						</li>
                        <?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	 <!-- =====================================================================
    	==== End product -->

	<!-- =====================================================================
    	==== Start newsletter -->
	<div class="contact-form pt-100 pb-250">
		<div class="container">
	    	<div class="row">
	    		<div class="contact-form-container">
		    		<div class="col-md-6 col-sm-12">
		    			<div class="contact-form_heading text-uppercase">
		    				<span>10% تخفیف ویژه برای</span>
		    				<h4>اولین سفارش</h4>
		    			</div>
		    		</div>
		    		<div class="col-md-6 col-sm-12">
						<div class="newsletter">
							<p class="newsletter-description">برای خوش آمدگویی به تمام مشتریان جدیدمان کد تخفیف داریم<br/> که می توانید برای دریافت 10% تخفیف ویژه اولین سفارش استفاده کنید.</p>
							<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="form-horizontal">
								<div class="newsletter-form">
									<div class="input-group">
										<input class="form-control" type="email" name="EMAIL" placeholder="آدرس ایمیل شما" required="">
									  	<span class="input-group-btn">
										  	<button type="submit" class="search-submit btn">
										        <span class="fa fa-paper-plane-o" aria-hidden="true"></span>
										   	</button>
									  	</span>
								    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- =====================================================================
    	==== End newsletter -->

	<!-- =====================================================================
    	==== Start gallery -->
	<div class="gallery feature-absolute pb-80">
	    <div class="container">
	    	<ul class="gallery-content">
	    		<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images1.jpg" title="">
				        	<img src="assets/images/gallery/images1.jpg" alt="">
				        	<div class="insta-info">
							     <i class="fa fa-search-plus"></i>
				        	</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images2.jpg" title="">
				        	<img src="assets/images/gallery/images2.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images3.jpg" title="">
				        	<img src="assets/images/gallery/images3.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images4.jpg" title="">
				        	<img src="assets/images/gallery/images4.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images5.jpg" title="">
				        	<img src="assets/images/gallery/images5.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images6.jpg" title="">
				        	<img src="assets/images/gallery/images6.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images7.jpg" title="">
				        	<img src="assets/images/gallery/images7.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images8.jpg" title="">
				        	<img src="assets/images/gallery/images8.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images9.jpg" title="">
				        	<img src="assets/images/gallery/images9.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
								</div>
						 </a>		        
				    </div>
				</li>
				<li class="gallery-item">
				    <div class="popup-gallery">
				        <a class="gallery-item-img" href="assets/images/gallery/large/images10.jpg" title="">
				        	<img src="assets/images/gallery/images10.jpg" alt="">
				        	<div class="insta-info">
								<i class="fa fa-search-plus"></i>
							</div>
				        </a>		        
				    </div>
				</li>
	    	</ul>
	    </div>
	</div>
	<!-- =====================================================================
    	==== End gallery -->

	<!-- =====================================================================
    	==== Start blog -->
	<div class="blog clearfix">
	     <div class="container">
	     	<div class="features-heading skin2">
				<h2 class="features-heading__title">اخبار جدید</h2>
			</div>

	     	<div class="row">

                <?php
                    $news=listNewsDefault();
                    foreach ($news as $value):
                ?>
		     	<div class="col-md-4 col-sm-4">
					<div class="blog-grid">
						<article class="post">
							<div class="blog-img">
								<img class="img-responsive" src="admin/<?php echo $value['img']?>" alt="">
							</div>
							<div class="blog-content">
								
								<span class="post-date"><i class="fa fa-calendar"></i>  <?php echo $value['date']?>  </span>
								<h3 class="post-title"><a href="#"><?php echo $value['title'];?></a></h3>
								<p>
                                    <?php echo $value['text'];?>
								</p>
								<div class="entry-meta">
									<span class="author"> توسط <a href="#">علی عمادزاده</a></span>
									<span class="comment"><a href="#">0</a>نظرات</span>
									<span class="like">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										پسندیدن<a href="#"> 2 </a></span>
								</div>
							</div>
						</article>
					</div>
				</div>
                <?php
                    endforeach;
                ?>
			</div>
	     </div>
	 </div>
	<!-- =====================================================================
    	==== End blog -->


	<!-- =====================================================================
    	==== Start footer -->
   	<footer class="site-footer site-footer-2 clearfix">
    	<div class="site-footer__main">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-sm-12 col-xs-12 footer-block">
			    		<img src="admin/<?php echo $logo['img'];?>" width="120px" height="120px">
			    		<p class="address pt-30" name="">دفتر ما: <?php echo $settings['address'];?><br>
							پست الکترونیک: <?php echo $settings['email'];?><br>
                            تلفن : <?php echo $settings['tel'];?>
						</p>
			    	</div>
			    	<div class="col-md-3 col-sm-6 col-xs-12 footer-block footer-1">
		    			<h3 class="widget-title">لینک های مفید</h3>
		    			<ul>
		    				<li><a href="about.html">درباره ما</a></li>
		    				<li><a href="contacts.php">تماس با ما</a></li>
		    				<li><a href="blog.html">اخبار</a></li>
		    				<li><a href="account.html">حساب من</a></li>
		    				<li><a href="faq.html">سؤالات متداول</a></li>
		    				<li><a href="account.html">ثبت نام</a></li>
		    			</ul>
			    	</div>
			    	
			    	<div class="col-md-3 col-sm-6 col-xs-12 footer-block footer-3">
			    		<h3 class="widget-title">زمان ارائه خدمت</h3>
		    			<ul>
		    				<li>
		    					<span>دوشنبه :</span>
		    					<span>9am - 5pm</span>
		    				</li>
		    				<li>
		    					<span>سه شنبه:</span>
		    					<span>9am - 1pm</span>
		    				</li>
		    				<li>
		    					<span>چهارشنبه :</span>
		    					<span>9am - 5pm</span>
		    				</li>
		    				<li>
		    					<span>پنجشنبه :</span>
		    					<span>9am - 1pm</span>
		    				</li>
		    				<li>
		    					<span>جمعه :</span>
		    					<span>9am - 1pm</span>
		    				</li>
		    				<li>
		    					<span>شنبه -  یکشنبه:</span>
		    					<span>تعطیل</span>
		    				</li>
		    			</ul>
			    	</div>
			    </div>
		    </div>
	   </div>
	   <div class="site-footer__copyright">
	   		<div class="container">
	   			<div class="copyright_container">
	   				<div class="col-md-4 col-sm-6">
			   			<ul class="social">
							<li>
								<a href="<?php echo $settings['facebook'];?>"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="<?php echo $settings['instagram'];?>"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="<?php echo $settings['telegram'];?>"><i class="fa fa-telegram"></i></a>
							</li>
							<li>
								<a href="<?php echo $settings['whatsapp'];?>"><i class="fa fa-whatsapp"></i></a>
							</li>
						</ul>
					</div>
		    		<div class="copyright col-md-4 col-sm-6">
                        <?php echo $settings['copyright'];?>  <a href="<?php echo $settings['copyright_link'];?>" target="_blank">  <?php echo $settings['copyright_name'];?></a>
		        	</div>
		        	<div class="payment col-md-4 col-sm-12">
		        		<img src="assets/images/payment.png" alt="">
		        	</div>
	        	</div>
	       </div>
	   </div>
	</footer>
	<!-- =====================================================================
    	==== End footer -->

   <!-- Back to top -->
    <div id="back-to-top"></div>
    <!--/Back to to -->

    <!-- =====================================================================
    	====Start Preloader -->
    <div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- =====================================================================
    	====End Preloader -->


	<!-- =====================================
    	====Start all js here -->

	<!-- jquery js-->
   	<script src="assets/js/jquery.min.js"></script>

	<!-- bootstrap js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- slick js-->
	<script src="assets/js/slick.min.js"></script>

	<!-- jquery-ui js-->
	<script src="assets/js/jquery-ui.min.js"></script>

	<!-- sliderPro js-->
	<script src="assets/js/jquery.sliderPro.min.js"></script>

	<!-- deal js-->
	<script src="assets/js/fastclick.min.js"></script>
	<script src="assets/js/timber.js"></script>

	<!-- Magnific js-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!-- counter js-->
    <script src="assets/js/jquery.waypoints.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- main js-->
	<script src="assets/js/custom.js"></script>
	
	<!-- =====================================
    	==== End all js here -->

   
</body>
</html>