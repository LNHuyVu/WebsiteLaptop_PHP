<?php

use App\Models\Slider;

$slider = new Slider(); //Tạo đối tượng 
$list = $slider->slider_list(['status' => 'index']);
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
                        <strong class="text-danger">Slider</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=slider&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=slider&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <th class="text-center" style="width:20px">#</th>
                        <th>Khuyến mãi</th>
                        <th>Vị trí</th>
                        <th class="text-center" style="width:20px">Hình ảnh</th>
                        <th>Thứ tự</th>
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
                                <td><?php echo $row['position'] ?></td>
                                <td>
                                    <img src="../public/image/sliders/<?php echo $row['img']; ?>" alt="<?php echo $row['img'] ?>" class="img-fluid">
                                </td>
                                <td><?php echo $row['orders'] ?></td>
                                <td class="text-center"><?php echo $row['created_at'] ?></td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 1) : ?>
                                        <a href="index.php?option=slider&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">
                                            <i class="fas fa-toggle-on"></i>
                                        </a>
                                    <?php else : ?>
                                        <a href="index.php?option=slider&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa-toggle-off"></i>
                                        </a>
                                    <?php endif; ?>
                                    <a href="index.php?option=slider&cat=update&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=slider&cat=view&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="index.php?option=slider&cat=deltrash&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
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
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<?php require_once("../views/backend/footer.php") ?>