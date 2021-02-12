<?php
ob_start();
$settings=settings();

if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $oldPic=$settings['logo'];
    editSettings($data,'logo',$oldPic);
    header("location:dashbord.php?m=settings&p=edit");
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
                        <li class="breadcrumb-item"><a href="../dashbord.php?m=index&p=index">خانه</a></li>
                        <li class="breadcrumb-item active">ویرایش تنظیمات</li>
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
                            <h3 class="card-title"> ویرایش تنظیمات :  <?php echo $settings['title'];?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان </label>
                                    <input type="text" class="form-control" name="frm[title]" placeholder="عنوان را وارد کنید" value="<?php echo $settings['title'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">توضیحات</label>
                                    <input type="text" class="form-control" name="frm[description]" placeholder="توضیحات" value="<?php echo $settings['description'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">حق کپی رایت</label>
                                    <input type="text" class="form-control" name="frm[copyright]"  value="<?php echo $settings['copyright'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">نام کپی رایت</label>
                                    <input type="text" class="form-control" name="frm[copyright_name]"  value="<?php echo $settings['copyright_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">لینک کپی رایت</label>
                                    <input type="text" class="form-control" name="frm[copyright_link]"  value="<?php echo $settings['copyright_link'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">تلفن</label>
                                    <input type="text" class="form-control" name="frm[tel]"  value="<?php echo $settings['tel'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">فکس</label>
                                    <input type="text" class="form-control" name="frm[fax]"  value="<?php echo $settings['fax'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ایمیل</label>
                                    <input type="text" class="form-control" name="frm[email]"  value="<?php echo $settings['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">آدرس</label>
                                    <input type="text" class="form-control" name="frm[address]"  value="<?php echo $settings['address'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">درباره ما</label>
                                    <textarea type="text" class="form-control" name="frm[aboutus]" ><?php echo $settings['aboutus'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">فیسبوک</label>
                                    <input type="text" class="form-control" name="frm[facebook]"  value="<?php echo $settings['facebook'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">اینستاگرام</label>
                                    <input type="text" class="form-control" name="frm[instagram]"  value="<?php echo $settings['instagram'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">تلگرام</label>
                                    <input type="text" class="form-control" name="frm[telegram]"  value="<?php echo $settings['telegram'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">واتس آپ</label>
                                    <input type="text" class="form-control" name="frm[whatsapp]"  value="<?php echo $settings['whatsapp'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">متن لوگو</label>
                                    <input type="text" class="form-control" name="frm[logotype]"  value="<?php echo $settings['logotype'];?>">
                                </div>
                                <div class="form-group pt-4">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> اضافه کردن تصویر
                                        <input type="file" name="logo" id="input-b6" class="file">
                                    </div>
                                    <img src="<?php echo $settings['logo'];?>" width="60">
                                    <p class="help-block">حداکثر 32MB</p>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="btn" class="btn btn-primary">ویرایش</button>
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
