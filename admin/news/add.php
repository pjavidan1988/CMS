<?php
    if(isset($_POST['btn'])){
       $data=$_POST['frm'];
       $folder="news-".rand();
       $img=uploader('img',"img/news/",$folder,"news");
        addNews($data,$img);
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
              <li class="breadcrumb-item active">افزودن خبر جدید</li>
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
                <h3 class="card-title">افزودن خبر جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان خبر</label>
                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان خبر را وارد کنید">
                  </div>
                  <div class="form-group">
                      <label> تاریخ :</label>

                      <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                          </div>
                          <input type="date" name="frm[date]" class="form-control ltr">
                      </div>
                      <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">متن خبر</label>
                    <textarea type="text" class="form-control" name="frm[text]" placeholder="متن خبر را وارد کنید"></textarea>
                  </div>
                  <div class="form-group">
                    <label>دسته بندی</label>
                    <select class="form-control" name="frm[news_cat]">
                        <?php
                        $newsCat=newsCat();
                        foreach ($newsCat as $val){
                            echo "<option value=\"$val[id]\">$val[title] </option>";
                        }
                        ?>
                    </select>
                  </div>
                  <div class="form-group pt-4">
                      <div class="btn btn-default btn-file">
                          <i class="fa fa-paperclip"></i>اضافه کردن تصویر
                          <input type="file" name="img" id="input-b6" class="file">
                      </div>
                      <p class="help-block">حداکثر 32MB</p>
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


