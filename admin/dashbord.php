<?php
ob_start();
include_once '../include/functions.php';
include_once '../include/menu.php';
if(!isset($_SESSION['username'])){
    header('location:index.php?login=first');
    ob_end_flush();
}
$activePage = "dashbord.php?m=menu&p=list";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="dist/css/custom-style.css">
  <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="dashbord.php?m=home&p=home" class="nav-link">خانه</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">تماس</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-comments-o"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      حسام موسوی
                      <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                    </h3>
                    <p class="text-sm">با من تماس بگیر لطفا...</p>
                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      پیمان احمدی
                      <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                    </h3>
                    <p class="text-sm">من پیامتو دریافت کردم</p>
                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      سارا وکیلی
                      <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                    </h3>
                    <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
                <span class="float-left text-muted text-sm">3 دقیقه</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
                <span class="float-left text-muted text-sm">12 ساعت</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-file ml-2"></i> 3 گزارش جدید
                <span class="float-left text-muted text-sm">2 روز</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fa fa-th-large"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
          <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="dashbord.php?m=home&p=home" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                      صفحه اصلی
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                      مدیریت منوها
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <?php $list="dashbord.php?m=menu&p=list" ?>
                      <a href="dashbord.php?m=menu&p=list" class="nav-link active" >
                        <i class="fa fa-list nav-icon"></i>
                        <p>لیست منوها</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashbord.php?m=menu&p=add" class="nav-link active">
                        <i class="fa fa-plus-square-o nav-icon "></i>
                        <p>افزودن منو جدید</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-clipboard"></i>
                        <p>
                              دسته بندی محصولات
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=product_cat&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست دسته بندی ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashbord.php?m=product_cat&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن دسته بندی جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            مدیریت محصولات
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=product&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست محصولات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashbord.php?m=product&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن محصول جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-file-text"></i>
                        <p>
                            دسته بندی اخبار
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=news_cat&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست دسته بندی ها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashbord.php?m=news_cat&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن دسته بندی جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-newspaper-o"></i>
                        <p>
                            مدیریت اخبار
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=news&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست دسته بندی ها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashbord.php?m=news&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن خبر جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-phone"></i>
                        <p>
                              مدیریت تماس ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=contact&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست تماس ها </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                              تنظیمات
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=settings&p=edit" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>تنظیمات صفحه اصلی</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th-large"></i>
                        <p>
                            مدیریت ویجت ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=widget&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست ویجت اول</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=widget1&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست ویجت دوم</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=widget&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن ویجت اول جدید</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=widget1&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن ویجت دوم جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-slack"></i>
                        <p>
                              مدیریت لوگو
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=logo&p=list" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p> لوگو</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-file-image-o"></i>
                        <p>
                              مدیریت صفحات
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashbord.php?m=page&p=list" class="nav-link active">
                                <i class="fa fa-list nav-icon"></i>
                                <p>لیست صفحات </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashbord.php?m=page&p=add" class="nav-link active">
                                <i class="fa fa-plus-square-o nav-icon"></i>
                                <p>افزودن صفحه جدید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">متفاوت</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-archive"></i>
                    <p>مستندات</p>
                  </a>
                </li>
                <li class="nav-header">برچسب‌ها</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-circle-o text-danger"></i>
                    <p class="text">مهم</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-circle-o text-warning"></i>
                    <p>هشدار</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-circle-o text-info"></i>
                    <p>اطلاعات</p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->

      <section class="wrapper">
          <?php
              $m=$_GET['m'];
              $p=$_GET['p'];
              include_once "$m/$p.php";
          ?>
      </section>

      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>CopyLeft &copy; 2021 <a href="https://github.com/pjavidan1988">Peyman Javidan</a>.</strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>
</html>
