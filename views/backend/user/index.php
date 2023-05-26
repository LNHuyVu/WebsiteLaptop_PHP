<?php

use App\Models\User;

$user = new User(); //Tạo đối tượng 
$list = $user->user_list(['status' => 'index']);
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
                        <strong class="text-danger">TÀI KHOẢN</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=user&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=user&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-busered" id="myTable">
                    <thead>
                        <th class="text-center" style="width:20px">#</th>
                        <th>Tên</th>
                        <th style="width:50px">Hình ảnh</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Quyền</th>
                        <th>Chức năng</th>
                        <th>ID</th>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row) : ?>

                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox" />
                                </td>
                                <td><?php echo $row['fullname'] ?></td>
                                <td>
                                    <img src="../public/image/users/<?php echo $row['img']; ?>" alt="<?php echo $row['img'] ?>" class="img-fluid">
                                </td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php if ($row['roles'] == 1) {
                                        echo 'Quan tri';
                                    } elseif ($row['roles'] == 0)
                                        echo 'Khach hang';
                                        else {
                                            echo 'Nhan vien';
                                        }
                                    ?></td>
                                <td class="text-center">
                                    <?php if ($row['status'] == 1) : ?>
                                        <a href="index.php?option=user&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">
                                            <i class="fas fa-toggle-on"></i>
                                        </a>
                                    <?php else : ?>
                                        <a href="index.php?option=user&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                            <i class="fas fa-toggle-off"></i>
                                        </a>
                                    <?php endif; ?>
                                    <a href="index.php?option=user&cat=update&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=user&cat=deltrash&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
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