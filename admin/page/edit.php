<?php
ob_start();
$id=$_GET['id'];
$result=showEditPage($id);


if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    editPage($data,$id);
    header("location:dashbord.php?m=page&p=list");
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
                        <li class="breadcrumb-item active">ویرایش صفحه</li>
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
                            <h3 class="card-title"> ویرایش صفحه :  <?php echo $result['title']; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان </label>
                                    <input type="text" class="form-control" name="frm[title]" value="<?php echo $result['title'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">کلمات کلیدی</label>
                                    <input type="text" class="form-control" name="frm[keywords]" value="<?php echo $result['keywords'];?>" placeholder="کلمات کلیدی را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">توضیحات</label>
                                    <input type="text" class="form-control" name="frm[description]" value="<?php echo $result['description'];?>" placeholder="توضیحات صفحه را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">محتویات</label>
                                    <textarea id="editor1" type="text" class="form-control" name="frm[body]" ><?php echo $result['body'];?></textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
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
