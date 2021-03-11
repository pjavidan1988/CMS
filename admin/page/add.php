<?php
    if(isset($_POST['btn'])){
       $data=$_POST['frm'];
        addPage($data);
    }
?>
<link rel="stylesheet" href="../dist/css/persian-datepicker.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="dashbord.php?m=home&p=home">خانه</a></li>
              <li class="breadcrumb-item active">افزودن صفحه جدید</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">افزودن صفحه جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان صفحه</label>
                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان صفحه را وارد کنید">
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی</label>
                        <input type="text" class="form-control" name="frm[keywords]" placeholder="کلمات کلیدی را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" class="form-control" name="frm[description]" placeholder="توضیحات صفحه را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea id="editor1" type="text" class="form-control" name="frm[body]" placeholder="محتویات را وارد کنید"></textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="btn" class="btn btn-primary">افزودن</button>
                </div>
              </form>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<script src="../dist/js/persian-date.min.js"></script>
<script src="../dist/js/persian-datepicker.min.js"></script>


