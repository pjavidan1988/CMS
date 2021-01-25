<?php
    if(isset($_POST['btn'])){
       $data=$_POST['frm'];
       $folder="pro-".rand();
       $img=uploader('img',"img/product/",$folder,"product");
        addProduct($data,$img);
    }
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="dashbord.php?m=home&p=home">خانه</a></li>
              <li class="breadcrumb-item active">افزودن محصول جدید</li>
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
                <h3 class="card-title">افزودن محصول جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان محصول</label>
                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان محصول را وارد کنید">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">توضیحات</label>
                    <textarea type="text" class="form-control" name="frm[text]" placeholder="توضیحات درباره محصول را بنویسید"></textarea>
                  </div>
                  <div class="form-group">
                    <label>دسته بندی</label>
                    <select class="form-control" name="frm[procat]">
                      <option value="0">سرگروه</option>
                        <?php
                        $proCat=proCat();
                        foreach ($proCat as $val){
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
