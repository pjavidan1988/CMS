<?php
ob_start();
$id=$_GET['id'];
$result=showEditNews($id);


if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $oldPic=$result['img'];
    editNews($data,$id,'img',$oldPic);
    header("location:dashbord.php?m=news&p=list");
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
                            <h3 class="card-title"> ویرایش خبر :  <?php echo $result['title']; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان خبر</label>
                                    <input type="text" class="form-control" name="frm[title]" value="<?php echo $result['title'];?>">
                                </div>
                                <div class="form-group">
                                    <label> تاریخ :</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="date" name="frm[date]" class="form-control ltr" value="<?php echo $result['date'];?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">متن خبر</label>
                                    <textarea id="editor1" type="text" class="form-control" name="frm[text]" ><?php echo $result['text'];?></textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>دسته بندی</label>
                                    <select class="form-control" name="frm[news_cat]">
                                        <?php
                                        $newsCat=newsCat();
                                        foreach ($newsCat as $val){
                                            echo "<option value=\"$val[id]\" ";
                                                if($result['news_cat']==$val['id']){
                                                    echo " selected";
                                                }
                                            echo ">$val[title] </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group pt-4">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> اضافه کردن تصویر
                                        <input type="file" name="img" id="input-b6" class="file">
                                    </div>
                                        <img src="<?php echo $result['img'];?>" width="60">
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
