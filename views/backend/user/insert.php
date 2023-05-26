<?php

use App\Models\User;

$user = new User();
$list = $user->user_list(['status' => 'index']);
// $username = '';
// //$stroders = '';
// foreach ($list as $item) {
//     $username .= "<option value='" . $item['id'] . "'>" . $item['username'] . "</option>";
//     //$stroders .= "<option value='" . $item['orders'] . "'>Sau:" . $item['name'] . "</option>";
// }
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

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
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
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
                                <input name="data[fullname]" id="fullname" type="text" required class="form-control" placeholder="Nhập tên" />
                            </div>
                            <div class="mb-3">
                                <label for="">Tên tài khoản đăng nhập</label>
                                <input name="data[username]" id="username" type="text" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="password">Mật khẩu</label>
                                <input name="data[password]" id="password" type="password" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input name="data[email]" id="email" type="text" required class="form-control" placeholder="@gmail.com" />
                            </div>
                            <div class="mb-3">
                                <label for="">Số điện thoại</label>
                                <input name="data[phone]" id="phone" type="text" required class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-3">
                                <label for="username">Phân quyền</label>
                                <select name="data[roles]" id="roles" required class="form-control">
                                    <option value="1">Quản trị</option>
                                    <option value="0">Khách hàng</option>
                                    <option value="2">Nhân Viên</option>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="gender">Giới tính</label>
                                <select name="data[gender]" id="gender" class="form-control">
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                    <option value="2">Khác</option>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="hinh">Hình ảnh</label>
                                <input type="file" name="img" id="hinh"></input>
                            </div>
                            <!-- <div class="md-3">
                                <label for="img">Hinh</label>
                                <input type="text" id="img" name="img"></input>
                            </div> -->
                            <br>
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
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