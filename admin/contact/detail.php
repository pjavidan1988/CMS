<?php
ob_start();
$id=$_GET['id'];
$result=showDetailContact($id);

if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    header("location:dashbord.php?m=contact&p=list");
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
                        <li class="breadcrumb-item active">نمایش متن تماس</li>
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
                            <h3 class="card-title"> موضوع :  <?php echo $result['subject']; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="card-body">
                                    <p type="text" name="frm[text]" ><?php echo $result['text'];?></p>
                                    <label for="exampleInputEmail1"> ایمیل :</label>
                                    <h6 type="text" name="frm[email]" ><?php echo $result['email'];?></h6>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="btn" class="btn btn-primary">بازگشت</button>
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
