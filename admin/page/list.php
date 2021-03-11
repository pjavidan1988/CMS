<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dashbord.php?m=home&p=home"">خانه</a></li>
                        <li class="breadcrumb-item active">لیست صفحات</li>
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
                <h3 class="card-title"> لیست صفحات</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>عنوان</th>
                                    <th>کلمات کلیدی</th>
                                    <th>توضیحات</th>
                                    <th> محتویات</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $listPage=listPageAdmin();
                                    foreach($listPage as $val):
                                ?>
                                <tr>
                                    <td><?php echo $val['title']; ?></td>
                                    <td><?php echo $val['keywords']; ?></td>
                                    <td><a href="dashbord.php?m=page&p=detail_description&id=<?php echo $val['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-newspaper-o"></i></a></td>
                                    <td><a href="dashbord.php?m=page&p=detail_body&id=<?php echo $val['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-newspaper-o"></i></a></td>
                                    <td><a href="dashbord.php?m=page&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="dashbord.php?m=page&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash"></i></a></td>
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