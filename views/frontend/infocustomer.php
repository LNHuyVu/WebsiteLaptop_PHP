<?php
session_start();

use App\Models\User;

$user = new User;
$id = $_SESSION['usercustomerid'];
$row = $user->user_row(['id' => $id]);

?>
<?php require_once("views/frontend/header.php") ?>
<section class="maincontent">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">First</th>
                            <th scope="col">Last</th> -->
                            <td scope="col" colspan="2">
                                <h3 class="text-center">Thông tin khách hàng</h3>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tên</td>
                            <td><?php echo $row['fullname'] ?></td>
                        </tr>
                        <tr>
                            <td>Giới tính</td>
                            <td>
                                <?php if ($row['gender'] == 1) : ?>
                                    Nam
                                <?php else : ?>
                                    Nữ
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><?php echo $row['phone'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <td colspan="2" class="d-flex">
                        <div class="border border-3 rounded bg-success text-center"><a href="#" class="text-white p-3"><b>Thiết lập mật khẩu</b></a></div>
                        <br>
                        <div class="border border-3 rounded bg-primary text-center"><a href="#" class="text-white p-3"><b>Tài khoản liên kết</b></a></div>
                    </td>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../public/image/users/<?php echo $row['img'] ?>" class="w-100 h-100" alt="">
            </div>
        </div>
    </div>
</section>
<?php require_once("views/frontend/footer.php") ?>