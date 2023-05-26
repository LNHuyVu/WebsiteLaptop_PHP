<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LNHV</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="stylesheet" href="public/css/layout12.css">
    <script src="../../public/js/bootstrap.bundle.min.js"></script>
    <!-- -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="OCNnqmMi"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="ebkiObW5"></script>
    <!-- Thông báo -->
    <!-- <script src = "//cdn.jsdelivr.net/npm/sweetalert2@11" > </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })
    </script> -->
</head>

<body>
    <!-- Section Header -->
    <section class="topbar bg-header d-flex justify-content-center">
        <div class="container ">
            <nav class="navbar navbar-light bg-header">
                <div class="container-fluid float-start">
                    <div class="col-md-3 text-center">
                        <img src="public/image/logo/LOGOLTW.png" alt="" width="85px" height="50px">

                    </div>
                    <form action="index.php?option=search" method="GET" class="d-flex">
                        <input name="search" class="form-control me-2 menu-search" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                        <button class="btn btn-outline-success menu-submit h-90" type="submit">Tìm kiếm</button>
                    </form>
                    <div class="col-md-1">
                        <i class="fa-solid fa-cart-shopping"></i><a href="views/frontend/cart.php"> Giỏ hàng</a>
                    </div>
                    <div class="col-md-1.5">
                        <?php if (isset($_SESSION['usercustomer'])) : ?>
                            <a href="index.php?option=infocustomer"><i class="fa-solid fa-circle-user"></i><?php echo $_SESSION['customerfullname']; ?></a>
                            <br>
                            <a href="../../admin/logoutcustomer.php">Đăng xuất</a>
                        <?php else : ?>
                            <i class="fa-solid fa-circle-user"></i><a href="/admin/login.php">
                                Đăng nhập
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <?php require_once('views/frontend/mod_mainmenu.php') ?>