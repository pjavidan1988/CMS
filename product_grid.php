<?php
include_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>قالب HTML انرکاس</title>

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

		<!-- =====================================
    	==== Start header -->

	<!-- Header desktop -->
	<header class="header section-bg" style="background-image:url(assets/images/bg_header.jpg)">
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
				            <a class="top-bar__item" href="account.html">
				            	<i class="fa fa-lock" aria-hidden="true"></i>
				            	ورود
				            </a>
			            	<div class="content-dropdown left">
								<div class="account-inner ">
								    <div class="login-form-head">
								      	<span class="login-form-title">ورود به حساب</span>
						      	<span class="pull-left">
								     	 	<a class="register-link" href="#" title="Register">ایجاد حساب کاربری</a>
								     	 </span>
								    </div>
								    <form class="opal-login-form-ajax" data-toggle="validator" role="form">
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
							<a class="logo" href="index.html"><img src="assets/images/logo.png" alt=""></a> 
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
							<a href="<?php echo $val['url']; ?>"><?php echo $val['title']; ?></a>
                            <?php
                            $rows=listSubProductDefault($val['id']);
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
										      	Reebok Strength Gloves
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
										      	Bodymax contest weight
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
	<!-- /Headerdesktop -->

	<!-- header-mobile -->
	<div class="header-mobile section-bg" style="background-image:url(assets/images/bg_header.jpg)">
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
		      	<a class="logo" href="index.html"><img src="assets/images/logo.png" alt=""> </a> 
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
    <!-- /header-mobile -->
    
	<!-- End header ====
    	======================================= -->

	
	<!-- =====================================
    	==== Start breadcrumb -->
   	<div class="breadcrumb">
   		<!-- container -->
		<div class="container">
			<h1>محصولات</h1>
			<ol class="item-breadcrumb">
	            <li><a href="index.html">صفحه اصلی</a></li>
	            <li>دسته 1</li>     
            </ol>
		</div>
		<!-- /container -->
   	</div>
    <!-- =====================================
    	==== End breadcrumb -->


	<!-- =====================================
    	====Start archive-product -->
	<div class="archive-product">
		<!-- Container -->
		<div class="container">
			<!-- product-shorting -->
			<div class="product-shorting d-flex align-items-center justify-content-between">
				<div class="grid-list-view">
                    <ul class="nav tabs-area">
                        <li class="active">
                        	<a data-toggle="tab" href="#grid-view">
                            	<i class="fa fa-th"></i>
                            </a>
                        </li>
                        <li>
                        	<a data-toggle="tab" href="#list-view" class="">
                        		<i class="fa fa-list-ul"></i>
                        	</a>
                        </li>
                    </ul>
                    <span class="show-items">نمایش 1 تا 9</span>
                </div>
                <div class="toolbar-sorter">
                    <select name="orderby" class="orderby">
						<option value="menu_order" selected="selected">مرتب سازی پیش فرض</option>
						<option value="popularity">مرتب سازی براساس محبوبیت</option>
						<option value="rating">مرتب سازی براساس میانگین نمره</option>
						<option value="date">میانگین بر اساس جدیدترین</option>
						<option value="price">مرتب سازی براساس قیمت صعودی</option>
						<option value="price-desc">مرتب سازی براساس قیمت نزولی</option>
					</select>
                </div>
            </div>
            <!--/product-shorting -->


            <!-- tab-content -->
            <div class="tab-content">
            	<div id="grid-view" class="tab-pane fade in active">
					<div class="product products-grid">
						<div class="row row-products">
                            <?php
                            $product=listProductDefault();
                            foreach ($product as $value):
                            ?>
				 			<div class="col-md-4 col-sm-6">
				 				<div class="product-block" data-publish-date="">
									<div class="product-image product_1">
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
									</div><!-- /.product-image -->
									<div class="product-meta">
										<span class="product-rating" data-rating="">
											<span class="star-rating">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</span>
										</span>
										<!-- end rating -->
										<h4 class="product-name">
											<a href="product_single.html" title="">
                                                <?php echo $value['title']?>
											</a>
										</h4>
										<div class="product-price">
											<span class="amout">
												<span class="money" data-currency-usd="$700.00"><?php echo $value['productprice']?></span>
											</span>
											<a href="product_single.html" class="add_to_cart_button">اضافه به سبد خرید</a>
										</div>
									</div><!-- /.product-meta -->
								</div>
				 			</div>
                            <?php endforeach; ?>
				 		</div>
				 	</div>
				</div>
				<div id="list-view" class="tab-pane fade">
				 	<div class="product products-list">
						<div class="row row-products">
                            <?php
                            $product=listProductDefault();
                            foreach ($product as $value):
                            ?>
				 			<div class="col-md-12">
				 				<div class="product-block">
				 					<div class="row">
					 					<div class="col-md-4 col-lg-4 col-sm-4">
					 						<div class="product-image product_1">
												<div class="product-thumbnail">
													<a href="#" title="">
														<img class="product-featured-image" src="admin/<?php echo $value['img']?>" alt="">
													</a>
												</div>
											</div><!-- /.product-image -->
						 			    </div>
						 				<div class="col-md-8 col-lg-8 col-sm-8">
											<div class="product-meta">
												<span class="product-rating" data-rating="">
													<span class="star-rating">
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</span>
												</span>
												<!-- end rating -->
												<h4 class="product-name">
													<a href="product_single.html" title="">
                                                        <?php echo $value['title']?>
													</a>
												</h4><!-- /.product-product -->

												<div class="product-price">
													<span class="amout">
														<span class="money" data-currency-usd="$700.0"><?php echo $value['productprice']?></span>
													</span>
												</div><!-- /.product-price -->
												<div class="excerpt">
                                                    <?php echo $value['text']?>
							                    </div>
							                    <div class="product-footer">
													<a href="cart.html" class="btn btn-primary">اضافه به سبد خرید<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
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
											</div><!-- /.product-meta -->
										</div>
									</div>
								</div>
				 			</div>
                            <?php endforeach; ?>
				 		</div>
			 		</div>
				</div>
			</div>
			<!-- /tab-content -->
			
			<!-- pagination -->
			<nav class="pagination clearfix">
				<ul class="page-numbers">
					<li><a class="prev page-numbers" href="#"><i class="fa fa-angle-right " aria-hidden="true"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
					<li><a class="page-numbers" href="#">2</a></li>
					<li><a class="page-numbers" href="#">3</a></li>
					<li><a class="page-numbers" href="#">4</a></li>
					<li><a class="page-numbers" href="#">5</a></li>
					<li><a class="next page-numbers" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
				</ul>
			</nav>
			<!-- /pagination -->
	 	</div>
	</div>
	<!-- =====================================
    	====End archive-product -->
	

 	<!-- =====================================================================
    	==== Start footer -->
   	<footer class="site-footer site-footer-2 clearfix">
    	<div class="site-footer__main">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-sm-12 col-xs-12 footer-block">
			    		<img src="assets/images/logo.png" alt="">
			    		<p class="address pt-30">دفتر ما: ایران، تهران، تهران بزرگ، میدان آزادی. . .<br>
							تلفن: 09123456789<br>
							پست الکترونیک: email@email.com
						</p>
			    	</div>
			    	<div class="col-md-3 col-sm-6 col-xs-12 footer-block footer-1">
		    			<h3 class="widget-title">لینک های مفید</h3>
		    			<ul>
		    				<li><a href="about.html">درباره ما</a></li>
		    				<li><a href="contacts.php">تماس با ما</a></li>
		    				<li><a href="blog.html">وبلاگ</a></li>
		    				<li><a href="account.html">حساب من</a></li>
		    				<li><a href="product_grid.html">فروشگاه</a></li>
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
		    		<div class="copyright col-md-4 col-sm-6">
		        		© 1398. تمامی حقوق برای ما محفوظ است.<a href="#" target="_blank">انرکاس</a>
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