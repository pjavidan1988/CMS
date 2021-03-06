<?php
include_once 'include/functions.php';
    if(isset($_POST['btn'])){
        include_once 'include/contact.php';
        $data=$_POST['frm'];
        addContact($data);
    }

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

	
	<!-- Start breadcrumb ====
    	======================================= -->
   	<div class="breadcrumb">
   		<!-- container -->
		<div class="container">
			<h1>تماس</h1>
			<ol class="item-breadcrumb">
	            <li><a href="index.html">صفحه اصلی</a></li>
	            <li>تماس</li>     
            </ol>
		</div>
		<!-- /container -->
   	</div>
    <!-- End breadcrumb ====
    	======================================= -->


	<!-- Start contact ====
    	======================================= -->
	<div class="page-contact">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="heading-contact text-center">
						<h2 class="text-uppercase">تماس گرفتن با ما</h2>
						<p>
							چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. 
						</p>
					</div>
				</div>
                <div class="col-md-5">
                    <div class="tab-content features skin1">
                        <div id="tab_contact1" class="tab-pane fade in active">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab_contact2" class="tab-pane fade">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab_contact3" class="tab-pane fade">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab_contact4" class="tab-pane fade">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab_contact5" class="tab-pane fade">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab_contact6" class="tab-pane fade">
                            <div class="items_group clearfix">
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_phone.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>تماس بگیرید</h4>
                                        <p>
                                            خیلی راحت با ما تمای بگیرید با 0123456789,<br/>
                                            شنبه تا پنجشنبه، 8 صبح تا 22 شب
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_mail.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>برایمان بنویسید</h4>
                                        <p>
                                            ایمیل خود را به آدرس <strong><a href="mailto:info@email.com">info@email.com</a> ارسال کنید</strong>,
                                            <br/>خیلی زود باهاتون تماس می گیریم.
                                        </p>
                                    </div>
                                </div>
                                <div class="features_list list_item clearfix">
                                    <div class="features-images">
                                        <img src="assets/images/icon_contact_map.png" alt="">
                                    </div>
                                    <div class="features-description">
                                        <h4>ملاقات با ما</h4>
                                        <p>
                                            به آدرس <strong>ایران، تهران، میدان آزادی</strong> بیاید و حضوری ما رو ملاقات کنید.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-md-7">
					<div class="row">
						<form method="post" id="commentform" class="comment-form" novalidate="">
							<div class="form-group col col-md-6"> 
								<input type="text" name="frm[name]" class="form-control" placeholder="نام : " id="author" value="" aria-required="true">
							</div>
                            <div class="form-group col col-md-6">
                                <input type="text" name="frm[lastname]" class="form-control" placeholder="نام خانوادگی: " id="author" value="" aria-required="true">
                            </div>
							<div class="form-group col col-md-6"> 
								<input type="text" name="frm[email]" class="form-control" placeholder="آدرس ایمیل: " id="email" value="" aria-required="true">
							</div>
							<div class="form-group col col-md-6">
                                <input type="text" name="frm[phone]" class="form-control" placeholder="شماره تماس شما: " id="phone" value="" aria-required="true">
                            </div>
                            <div class="form-group col col-md-12">
                                <input type="text" name="frm[subject]" class="form-control" placeholder="موضوع : " id="author" value="" aria-required="true">
                            </div>
							<div class="form-group  col col-md-12">
								<textarea rows="8" id="comment" class="form-control" placeholder="پیام . . . *" name="frm[text]" aria-required="true"></textarea>
							</div>
							<div class="form-submit col col-md-12">
								<input name="btn" type="submit" id="submit" class="btn btn-primary" value="ارسال">
								<input type="hidden" name="comment_post_ID" value="" id="comment_post_ID"> 
								<input type="hidden" name="comment_parent" id="comment_parent" value="">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-12">
					<div class="map pt-40 pb-40">
						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30601359607!2d-74.25987105452268!3d40.69714940585523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1527841460700" allowfullscreen>
	            		</iframe>
	            	</div>
				</div>

				
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- End contact ====
    	======================================= -->
	
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