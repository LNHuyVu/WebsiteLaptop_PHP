<?php

use App\Models\User;

$user = new User();
$id = $_REQUEST['id'];
$arr['id'] = $id;
$row = $user->user_row($arr);
$list = $user->user_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM TÀI KHOẢN</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=user" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về
                            </a>
                            <button name="CAPNHAT" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus-circle"></i> Lưu[Thêm]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="">Tên User</label>
                                <input name="data[fullname]" value="<?php echo $row['fullname'] ?>" id="fullname" type="text" class="form-control" placeholder="Nhập tên" />
                            </div>
                            <div class="mb-3">
                                <label for="">Tên tài khoản đăng nhập</label>
                                <input name="data[username]" value="<?php echo $row['username'] ?>" id="username" type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Mật khẩu</label>
                                <input name="data[password]" value="<?php echo $row['password'] ?>" id="password" type="text" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input name="data[email]" value="<?php echo $row['email'] ?>" id="email" type="text" class="form-control" placeholder="@gmail.com" />
                            </div>
                            <div class="mb-3">
                                <label for="">Số điện thoại</label>
                                <input name="data[phone]" value="<?php echo $row['phone'] ?>" id="phone" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-3">
                                <label for="roles">Phân quyền</label>
                                <select name="data[roles]" id="roles" class="form-control">
                                    <option value="1" <?php echo ($row['roles'] == 1) ? 'selected' : ''; ?>>Quản trị</option>
                                    <option value="0" <?php echo ($row['roles'] == 0) ? 'selected' : ''; ?>>Khách hàng</option>
                                    <option value="2" <?php echo ($row['roles'] == 2) ? 'selected' : ''; ?>>Nhân viên</option>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="gender">Giới tính</label>
                                <select name="data[gender]" id="gender" class="form-control">
                                    <option value="1" <?php echo ($row['gender'] == 1) ? 'selected' : ''; ?>>Nam</option>
                                    <option value="0" <?php echo ($row['gender'] == 0) ? 'selected' : ''; ?>>Nữ</option>
                                    <option value="2" <?php echo ($row['gender'] == 2) ? 'selected' : ''; ?>>Khác</option>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="hinh">Hình ảnh</label>
                                <input name="img" id="hinh" type="file" />
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2" <?php echo ($row['status'] == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
                                    <option value="1" <?php echo ($row['status'] == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                                </select>
                            </div>
                        </div>
                    </div>
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
</form>
<?php require_once("../views/backend/footer.php") ?>