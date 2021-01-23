<?php
    if(isset($_POST['btn'])){
       $data=$_POST['frm'];
       addProduct($data);
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
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان محصول</label>
                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان منو را وارد کنید">
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
                  <div class="form-group">
                      <label for="exampleInputFile">ارسال فایل</label>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                          </div>
                      </div>
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
