<?php


use App\Models\User;

$user = new User();

if (isset($_POST['REGISTER'])) {
    $data = $_POST['data'];
    $data['created_at'] = date('Y-m-d H-i-s');
    $data['created_by'] = '0';
    $data['password'] = sha1($data['password']);
    //
    $target_dir = "../public/image/users";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {
        $data['img'] = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $user->user_insert($data);
    }
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LNHV</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/layout12.css">
    <script src="../../public/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-image: url('./public/image/backgroundDN5.jpg');  background-repeat: no-repeat, no-repeat;">
    <br>
    <br>
    <div class="maincontent d-flex text-white">
        <div class="container">
        <div class="card-header text-center border border-2 mt-4 mb-4">
                    <h1>Đăng ký</h1>
                </div>
            <form style="background: none" action="index.php?option=register" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-5"><b>Thông tin cá nhân</b></h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-3">
                            <label for="name"><b>Họ và tên</b></label>
                            <input name="data[fullname]" id="name" type="text" required class="form-control" />
                        </div>
                        <div class="md-3">
                            <label for="username"><b>Tên tài khoản</b></label>
                            <input name="data[username]" id="username" type="text" required class="form-control" />
                        </div>
                        <div class="md-3">
                            <label for="password"><b>Mật khẩu</b></label>
                            <input name="data[password]" id="password" type="password" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-3">
                            <label for="phone"><b>Số điện thoại</b></label>
                            <input name="data[phone]" id="phone" type="text" required class="form-control" />
                        </div>
                        <div class="md-3">
                            <label for="email"><b>Email</b></label>
                            <input name="data[email]" id="email" type="text"  required placeholder="@gmail.com" class="form-control" />
                        </div>
                        <div class="md-3">
                            <input name="data[roles]" id="roles" type="hidden" class="form-control" value="0" ; />
                            <input name="data[status]" id="status" type="hidden" class="form-control" value="1" ; />
                        </div>
                        <br>
                        <div class="md-3">
                            <label for="hinh"><b>Hình ảnh</b></label>
                            <input type="file" name="img" id="hinh" value=""></input>
                        </div>
                        <br>
                        <div class="md-3">
                            <label  for="gender"><b>Giới tính</b></label>
                            <select name="data[gender]" id="gender" >
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <input name="REGISTER" class="w-100 bg-primary rounded-bottom" type="submit" />
            </form>

        </div>
    </div>
</body>

</html>