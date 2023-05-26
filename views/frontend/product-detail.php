<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="oo66sXzM"></script>
<?php
session_start();

use App\Models\Product;

$product = new Product();

$id = $_REQUEST['id'];
$row = $product->product_row($id);
//Lấy sản phẩm cùng loại
use App\Models\Category;

$category = new Category();

//echo $cat['id'];
$slug = $row['catid'];
$listproduct = $product->product_list();
?>
<script>
    function plusminus_number($id) {
        // $id=>value
        $var = document.getElementById($id).value;
        $tong = document.getElementById('result-number').value;
        if ($var == 0) {
            $tong--;
            if ($tong < 1)
                $tong = 1;
            document.getElementById('result-number').value = $tong;
        }
        if ($var == 1) {
            $tong++;
            if ($tong > 50)
                $tong = 50;
            document.getElementById('result-number').value = $tong;
        }
    }
</script>
<!-- Thiết kế giao diện trang chi tiết sản phẩm -->
<?php require_once('views/frontend/header.php'); ?>
<?php if ($row['catid'] != 20 && $row['catid'] != 19 && $row['catid'] != 17 && $row['catid'] != 12 && $row['catid'] != 16 && $row['catid'] != 15 && $row['catid'] != 18 && $row['catid'] != 12) : ?>
    <section class="detail d-flex">
        <div class="container">
            <table class="">
                <thead>
                    <tr>
                        <th class="text-center headercontent">
                            <h2>Laptop <?php echo $row['name'] ?></h2>
                        </th>
                        <th class="text-center">
                            <div class="text-center">
                                <h3>Giá: <?php echo number_format($row['price']) ?>đ </h3>
                                <div class="fb-like" data-href="https://developers.facebook.com/localhost//index.php?option=product&id=<?php echo ($row['slug']) ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="views/frontend/cart.php" method="post" class="w-100 h-100 ">
                            <td>
                                <img src="public/image/<?php echo $row['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                                <h4>Số lượng</h4>
                                <div class="d-flex justifly-content-center">
                                    <button id="minus-number" onclick="plusminus_number(id);" value="0" type="button" class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    <input id="result-number" style="width: 100px;" type="number" max="50" min="1" name="soluong" value="1">
                                    <button id="plus-number" onclick="plusminus_number(id);" value="1" type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                </div>
                                <br>
                                <div>
                                    <li><i class="fas fa-exchange"></i> Hư gì đổi nấy 12 tháng tại 3125 siêu thị toàn quốc (miễn phí tháng đầu)
                                    </li>
                                    <li><i class="fas fa-shield-alt"></i> Bảo hành chính hãng laptop 1 năm tại các trung tâm bảo hành hãng
                                    </li>
                                    <li><i class="fab fa-accusoft"></i></i>Bộ sản phẩm gồm: Sách hướng dẫn, Thùng máy, Cáp ( Type C )
                                    </li>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <div class="text-center rounded border border-primary border-2 bg-primary">
                                        <h5 class="bg-white">Mua online giảm giá sốc</h5>
                                        <div class="bg-light">
                                            <b>Chỉ còn <b class="text-danger"><?php echo number_format($row['pricesale'] - 500000) ?>đ</b></b>
                                        </div>
                                    </div>
                                    <span>Giá khuyến mãi dự kiến áp dụng đến 23:00 15/6, không áp dụng trả góp lãi suất đặt biệt(0%, 0.5%, 1%,)
                                    </span>
                                    <br>
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <!-- <form action="views/frontend/cart.php" method="post" class="w-100 h-100 "> -->
                                        <!-- <input type="hidden" name="soluong" value="1"> -->
                                        <input type="hidden" name="tensp" value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="gia" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="hinh" value="<?php echo $row['img']; ?>">
                                        <div class="w-100">
                                            <input type="submit" class="w-100 rounded-pill border border-1 text-white w-100 p-1 m-0" name="addcart" style="background: #fb6e2e; height:54px" value="Mua ngay">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="d-flex">
                                        <button class="w-50 rounded-pill border border-1 text-white" style="background: #2f80ed">
                                            MUA TRẢ GÓP <br>
                                            Duyệt hồ sơ trong 5 phút
                                        </button>
                                        <button class="w-50 rounded-pill border border-1 text-white" style="background: #2f80ed">
                                            TRẢ GÓP 0% QUA THẺ <br>
                                            Visa, Mastercard, JCB, Amex
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <span>Gọi điện đặt mua <a href="#" class="text-primary">18001060</a> (7:30-22:00)</span>
                                    </div>
                                </div>
                                <div class="rounded border border-success border-3">
                                    <h3>Cấu hình Laptop <?php echo $row['name'] ?></h3><br>
                                    <h4><?php echo $row['detail'] ?></h4>
                                </div>
                            </td>
                        </form>
                    </tr>
            </table>

        </div>
    </section>
<?php else : ?>
    <section class="detail d-flex">
        <div class="container">
            <table class="">
                <thead>
                    <tr>
                        <th class="text-center headercontent">
                            <h2><?php echo $row['name'] ?></h2>
                        </th>
                        <th class="text-center">
                            <div class="text-center">
                                <h3>Giá: <?php echo number_format($row['price']) ?>đ </h3>
                                <div class="fb-like" data-href="https://developers.facebook.com/localhost" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="views/frontend/cart.php" method="post" class="w-100 h-100 ">
                            <td>
                                <img src="public/image/<?php echo $row['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                                <h4>Số lượng</h4>
                                <div class="d-flex justifly-content-center">
                                    <button id="minus-number" onclick="plusminus_number(id);" value="0" type="button" class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    <input id="result-number" style="width: 100px;" type="number" max="50" min="1" name="soluong" value="1">
                                    <button id="plus-number" onclick="plusminus_number(id);" value="1" type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                </div>
                                <br>
                                <div>
                                    <li>
                                        <i class="fas fa-exchange"></i> Hư gì đổi nấy 12 tháng tại 3125 siêu thị toàn quốc (miễn phí tháng đầu)
                                    </li>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <div class="text-center rounded border border-primary border-2 bg-primary">
                                        <h5 class="bg-white">Mua online giảm giá sốc</h5>
                                        <div class="bg-light">
                                            <b>Chỉ còn <b class="text-danger"><?php echo number_format($row['pricesale'] - 10000) ?>đ</b></b>
                                        </div>
                                    </div>
                                    <span>Giá khuyến mãi dự kiến áp dụng đến 23:00 15/6, không áp dụng trả góp lãi suất đặt biệt(0%, 0.5%, 1%,)
                                    </span>
                                    <br>
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <!--  -->
                                    <div>
                                        <!-- <input class="w-100 rounded-pill border border-1 text-white" type="submit" name="addcart" style="background: #fb6e2e">
                                    <h3>Mua ngay</h3>
                                    </input> -->
                                        <!-- <input type="hidden" name="soluong" value="1"> -->
                                        <input type="hidden" name="tensp" value="<?php echo $row['name']; ?>">
                                        <input type="hidden" name="gia" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="hinh" value="<?php echo $row['img']; ?>">
                                        <div>
                                            <input type="submit" class="w-100 rounded-pill border border-1 text-white w-100 p-1 m-0" name="addcart" style="background: #fb6e2e; height:54px" value="Mua ngay">
                                        </div>

                                    </div> <br>
                                    <div class="d-flex">
                                        <button class="w-50 rounded-pill border border-1 text-white" style="background: #2f80ed">
                                            MUA TRẢ GÓP <br>
                                            Duyệt hồ sơ trong 5 phút
                                        </button>
                                        <button class="w-50 rounded-pill border border-1 text-white" style="background: #2f80ed">
                                            TRẢ GÓP 0% QUA THẺ <br>
                                            Visa, Mastercard, JCB, Amex
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <span>Gọi điện đặt mua <a href="#" class="text-primary">18001060</a> (7:30-22:00)</span>
                                    </div>
                                </div>
                                <div class="rounded border border-success border-3">
                                    <h3><?php echo $row['name'] ?></h3><br>
                                    <h4><?php echo $row['detail'] ?></h4>
                                </div>
                            </td>
                        </form>
                    </tr>
            </table>

        </div>
    </section>
<?php endif; ?>
<!--  -->
<div class="commetnfb">
    <div class="container">
        <div class="fb-comments" data-href="http://localhost/index.php" data-width="750" data-numposts="5"></div>
        <!-- <div class="fb-comments" data-href="https://www.facebook.com/photo?fbid=970510040504538&amp;set=a.191170631771820&amp;comment_id=385218890047936" data-width="" data-numposts="5"></div> -->
    </div>
</div>
<!--  -->
<section class="maincontent w-100 d-flex justify-content-center">
    <div class="container">
        <div class="headercontent">
            <h3>Có thể bạn quan tâm</h3>
        </div>
        <div class="container p-2 bd-highlight">
            <?php foreach ($listproduct as $pro) : ?>
                <?php if (($pro['catid'] == $slug) && ($pro['name'] != $row['name'])) : ?>
                    <div class="card bg-card" style="width: 270px;">
                        <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>">
                            <img src="public/image/<?php echo $pro['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><a href="index.php?option=product&id=<?php echo $pro['slug']; ?>"><?php echo $pro['name']; ?></a></h5><br>
                            <p class="card-text-product"><?php echo $pro['detail']; ?></p>
                            <span><b>Giá: <?php echo number_format($pro['price']); ?>₫</b></span>
                            <div classs="d-flex justify-content-center">
                                <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>" style="float: left" class="btn btn-primary ">Xem thêm</a>
                                &nbsp;
                                <form action="views/frontend/cart.php" method="post" style="float: left">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="tensp" value="<?php echo $pro['name']; ?>">
                                    <input type="hidden" name="gia" value="<?php echo $pro['price']; ?>">
                                    <input type="hidden" name="hinh" value="<?php echo $pro['img']; ?>">
                                    <input type="submit" class="btn btn-success " name="addcart" style="float: left; margin-left: 5px" value="Thêm vào giỏ">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require_once('views/frontend/footer.php'); ?>