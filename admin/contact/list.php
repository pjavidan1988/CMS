<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dashbord.php?m=home&p=home"">خانه</a></li>
                        <li class="breadcrumb-item active">لیست محصولات</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"> لیست تماس ها</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>نام </th>
                                    <th> نام خانوادگی</th>
                                    <th> ایمیل</th>
                                    <th> موضوع</th>
                                    <th> متن تماس</th>
                                    <th> تلفن</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $listContact=listContactAdmin();
                                    foreach($listContact as $val):
                                ?>
                                <tr>
                                    <td><?php echo $val['name']; ?></td>
                                    <td><?php echo $val['lastname']; ?></td>
                                    <td><?php echo $val['email']; ?></td>
                                    <td><?php echo $val['subject']; ?></td>
                                    <td><?php echo $val['text']; ?></td>
                                    <td><?php echo $val['phone']; ?></td>
                                    <td><a href="dashbord.php?m=contact&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->