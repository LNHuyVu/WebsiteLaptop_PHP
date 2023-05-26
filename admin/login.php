<?php
session_start();

require_once("../vendor/autoload.php");

use App\Models\User;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/all.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url('../public/image/backgroundDN6.jpg');  background-repeat: no-repeat, no-repeat;">
    <?php
    if (isset($_POST['DANGNHAP'])) {
        $user = new User();
        $str_error = '';
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        //$data['password'] = $password;
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $data['email'] = $username;
        } else {
            $data['username'] = $username;
        }
        $data['status'] = 1;
        $data['roles'] = 1;
        $row = $user->user_row($data);
        if ($row != null) {
            if ($password == $row['password']) {
                // $_SESSION['useradmin'] = $username;
                // $_SESSION['userid'] = $row['id'];
                // $_SESSION['fullname'] = $row['fullname'];
                if ($row['roles'] == 1) {
                    $_SESSION['useradmin'] = $username;
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['fullname'] = $row['fullname'];
                    header("location: index.php");
                } else {
                    $_SESSION['usercustomer'] = $username;
                    $_SESSION['usercustomerid'] = $row['id'];
                    $_SESSION['customerfullname'] = $row['fullname'];
                    header("location: ../../index.php");
                }
            } else {
                $str_error = "Mật khẩu không chính xác";
            }
        } else {
            $str_error = 'Tài khoản này không tồn tại';
        }
    }
    if (isset($_POST['DANGKY'])) {
        header("location: ../../index.php?option=register");
    }
    ?>
    <div class="container12">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-danger " style="background: none">
                <div class="card-header text-center bg-light">
                    <h1>Đăng nhập</h1>
                </div>
                <div class="card-body">
                    <!-- <p class="login-box-msg text-white"><b>Thông tin đăng nhập</b></p> -->

                    <form action="" name="frm1" method="post">
                        <div class="input-group mb-3">
                            <input name="username" type="text" class="form-control" placeholder="Tên đăng nhập hoặc email">
                            <!-- <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div> -->
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
                            <!-- <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button name="DANGNHAP" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <button name="DANGKY" type="submit" class="btn btn-success btn-block">Tạo tài khoản</button>
                            </div>
                        </div>
                        <div class="text-center">
                            <i class="fas fa-redo"></i>
                            <a href="../index.php" style="text-decoration: none; color: #000"><b>Quay lại</b></a>
                        </div>
                        <div class="row">
                            <div class="col-12 bg-danger">
                                <?php echo isset($str_error) ? $str_error : ''; ?>
                            </div>
                        </div>
                    </form>
                    <!-- /.social-auth-links -->


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>

    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
</body>

</html>