<?php

use App\Models\Topic;

$topic = new Topic(); //Tạo đối tượng 
$list = $topic->topic_list(['status' => '0']);
?>



<?php require_once("../views/backend/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <div class="row">
                    <div class="col-md-6">
                        <strong class="text-danger">THÙNG RÁC DANH MỤC BÀI VIẾT</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=topic" class="btn btn-sm btn-info">
                            <i class="fas fa-arrow-left"></i> Quay về
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-btopiced" id="myTable">
                    <thead>
                        <th class="text-center" style="width:20px">#</th>
                        <th>Chủ đề</th>
                        <th>Slug</th>
                        <th>Sắp xếp</th>
                        <th>Ngày tạo</th>
                        <th>Chức năng</th>
                        <th>ID</th>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox" />
                                </td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['slug'] ?></td>
                                <td><?php echo $row['orders'] ?></td>
                                <td class="text-center"><?php echo $row['created_at'] ?></td>
                                <td class="text-center">
                                    <a href="index.php?option=topic&cat=retrash&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    <a href="index.php?option=topic&cat=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                                <td class="text-center"><?php echo $row['id'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once("../views/backend/footer.php") ?>