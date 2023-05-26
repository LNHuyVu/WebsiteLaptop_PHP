<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//Xóa hết sản phẩm trong giỏ hàng;
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//Xóa từng sản phẩm
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//Lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinh = $_POST['hinh']; //0
    $tensp = $_POST['tensp']; //1
    $gia = $_POST['gia']; //2
    $soluong = $_POST['soluong']; //3

    //kiểm tra sp có trong giỏ hàng hay không?
    $kiemtra = 0; //Kiểm tra sản phẩm đã tồn tại trong giỏ hàng => cập nhật số lượng?
    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $kiemtra = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    if ($kiemtra == 0) {
        $sanpham = [$hinh, $tensp, $gia, $soluong];
        $_SESSION['giohang'][] = $sanpham;
        //var_dump($_SESSION['giohang']);
    }
}

//Biến tổng thanh toán
function showgiohang()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $thanhtien = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $thanhtien;
                echo '
                <tr>
                        <td scope="row"><input name="checkid" type="checkbox" /></td>
                        <td>
                            <img src="../../public/image/' . $_SESSION['giohang'][$i][0] . '" alt="" style="width: 40%; height: 40%" />
                            <span>
                                <h6 class="d-flex"><a href="#">' . $_SESSION['giohang'][$i][1] . '</a></h6>
                            </span>
                        </td>
                        <td>' . number_format($_SESSION['giohang'][$i][2]) . 'đ</td>
                        <td>
                            <div class="buttons_added">
                                <input aria-label="quantity" max="100" min="1" name="" type="number" value="' . $_SESSION['giohang'][$i][3] . '">
                            </div>
                        </td>
                        <td>' . number_format($thanhtien) . 'đ</td> 
                        <td>
                            <div class="col-md-12 text-right">
                                <a href="cart.php?delid=' . $i . '" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>Xóa
                                </a>
                            </div>
                        </td>
                    </tr>
                ';
            }
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                echo '
                        <tr>
                            <td></td>
                            <td></td>
                            <td >
                                <h3>Tổng đơn hàng: </h3>
                            </td>
                            <td></td>
                            <td>
                                <h3 class="text-right w-100 h-100">' . number_format($tong) . 'đ</h3>
                            </td>
                            <td>
                                <form action="../../index.php?option=thanhtoan" method="post" >
                                    <button class="ms-auto p-2 bd-highlight rounded-pill border border-warning bg-warning but2" name="THANHTOAN"><b>Thanh toán</b></button>
                                    <input type="hidden" name="tensp" value="' . $_SESSION['giohang'][$i][1] . '">
                                    <input type="hidden" name="gia" value="' . $_SESSION['giohang'][$i][2] . '">
                                    <input type="hidden" name="soluong" value="' . $_SESSION['giohang'][$i][3] . '">
                                </form>
                            </td>
                        </tr>
                        ';
            }
        }
    } else {
        echo ('<h3 class="text-center">Giỏ hàng rỗng!</h3>');
    }
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
</head>

<body>

    <!-- Section Header -->
    <section class="topbar bg-header d-flex justify-content-center">
        <div class="container ">
            <nav class="navbar navbar-light bg-header text-center">
                <div class="container-fluid float-start d-flex justify-content-around">
                    <div class="col-md-1.5">
                        <a href="../../index.php"><i class="fas fa-home-alt"></i>Trang chủ</a>
                    </div>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    <form action="../../index.php?option=search" method="GET" class="d-flex">
                        <input name="search" class="form-control me-2 menu-search" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                        <button class="btn btn-outline-success menu-submit h-90" type="submit">Tìm kiếm</button>
                    </form>
                    <div class="col-md-1.5">
                        <?php if (isset($_SESSION['usercustomer'])) : ?>
                            <a href="../../index.php?option=infocustomer"><i class="fa-solid fa-circle-user"></i><?php echo $_SESSION['customerfullname']; ?></a>
                            <br>
                            <a href="../../admin/logoutcustomer.php">Đăng xuất</a>
                        <?php else : ?>
                            <i class="fa-solid fa-circle-user"></i><a href="../../admin/login.php"> Đăng nhập</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <section class="header">
        <div class="container">
            <div class="col-md-3">
                <img src="../../public/image/11111.png" alt="" width="102px" height="60px">
                <h3><b class="text-danger">Giỏ hàng</b></h3>
            </div>
        </div>
    </section>
    <section class="mainmenu d-flex">
        <div class="container">
            <table class="table bg-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th style="width: 400px" scope="col">Sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php showgiohang() ?>
            </table>
            <!--  -->
            <div class="container d-flex justify-content-center">

                <div class="border border-3 rounded bg-danger"><a href="cart.php?delcart=1" class="text-white p-5"><b>Xóa giỏ hàng</b></a></div>

                <div style="width: 10px"></div>
                <div class="border border-3 rounded bg-success"><a href="../../index.php" class="text-white p-3"><b>Tiếp tục mua hàng hàng</b></a></div>
            </div>
            <!--  -->
            <div class="maincontent list p-2 bd-highlight w-100">
                <div class="headercontent">
                    <h3>Có thể bạn quan tâm</h3>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>