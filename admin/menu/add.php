<?php
    if(isset($_POST['btn'])){
       $data=$_POST['frm'];
       addMenu($data);
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
              <li class="breadcrumb-item active">افزودن منو جدید</li>
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
                <h3 class="card-title">افزودن منو جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">عنوان منو</label>
                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان منو را وارد کنید">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">آدرس منو</label>
                    <input type="text" class="form-control" name="frm[url]" placeholder="لینک منو مورد نظر را وارد کنید">
                  </div>
                  <div class="form-group">
                    <label>سر گروه</label>
                    <select class="form-control" name="frm[parent]">
                      <option value="0">سرگروه</option>
                        <?php
                        $subMenu=subMenu();
                        foreach ($subMenu as $subs){
                            echo "<option value=\"$subs[id]\">$subs[title] </option>";
                        }
                        ?>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">ترتیب نمایش</label>
                      <input type="text" class="form-control" name="frm[sort]" placeholder="ترتیب نمایش">
                  </div>
                  <label>وضعیت</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="frm[status]" value="1">  فعال
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="frm[status]" value="0" checked>  غیر فعال
                    </label>
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
