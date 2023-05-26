<?php
session_start();

use App\Models\Category;
use App\Models\Product;

$product = new Product();
$category = new Category();
$listcat = $category->category_parentid(4);
$listcat11 = $category->category_slug('phu-kien-cao-cap');


//var_dump($listcat);
?>
<?php require_once('views/frontend/header.php'); ?>
<section class="header">
    <div class="container">
        <?php require_once('views/frontend/mod_slider.php') ?>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="list bg-white ">
            <ul class="aa">
                <li class="border border-warning">
                    <img src="public/image/Dohoa.png" alt="">
                    <a href="#">Đồ họa - Kỹ thuật</a>
                </li>
                <li class="border border-primary">
                    <img src="public/image/Mongnhe.png" alt="">
                    <a href="#">Cao cấp - Sang trọng</a>
                </li>
                <li class="border">
                    <img src="public/image/Hoctap.png" alt="">
                    <a href="#">Học tập - Văn phòng</a>
                </li>
                <li class="border border-danger">
                    <img src="public/image/Gaming.png" alt="">
                    <a href="#">Gaming</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- <div class="none" style="height:100px;">
            </div> -->
    <div class="container d-flex justify-content-center">
        <div class="alignment-option bg-white">
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Hãng
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">DELL</a></li>
                    <li><a class="dropdown-item" href="#">HP</a></li>
                    <li><a class="dropdown-item" href="#">MSI</a></li>
                    <li><a class="dropdown-item" href="#">Lenovo</a></li>
                    <li><a class="dropdown-item" href="#">Acer</a></li>
                    <li><a class="dropdown-item" href="#">Asus</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    CPU
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Core i3</a></li>
                    <li><a class="dropdown-item" href="#">Core i5</a></li>
                    <li><a class="dropdown-item" href="#">Core i7</a></li>
                    <li><a class="dropdown-item" href="#">Core i9</a></li>
                    <li><a class="dropdown-item" href="#">Ryzen 3</a></li>
                    <li><a class="dropdown-item" href="#">Ryzen 5</a></li>
                    <li><a class="dropdown-item" href="#">Ryzen 7</a></li>
                    <li><a class="dropdown-item" href="#">Ryzen 9</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Màn hình
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Khoảng 12 inch</a></li>
                    <li><a class="dropdown-item" href="#">Khoảng 15 inch</a></li>
                    <li><a class="dropdown-item" href="#">Khoảng 17 inch</a></li>
                    <li><a class="dropdown-item" href="#">Trên 17 inch</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Ổ cứng
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">SSD</a></li>
                    <li><a class="dropdown-item" href="#">HDD</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Dung lượng
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">128GB</a></li>
                    <li><a class="dropdown-item" href="#">256GB</a></li>
                    <li><a class="dropdown-item" href="#">512GB</a></li>
                    <li><a class="dropdown-item" href="#">1TB</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Nhu cầu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Đồ họa - Kỹ Thuật</a></li>
                    <li><a class="dropdown-item" href="#">Cao cấp - Sang trọng</a></li>
                    <li><a class="dropdown-item" href="#">Học tập - Văn phòng</a></li>
                    <li><a class="dropdown-item" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle btnson" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Sắp xếp
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Mới nhất</a></a></li>
                    <li><a class="dropdown-item" href="#">Bán chạy nhất</a></li>
                    <li><a class="dropdown-item" href="#">Giá từ thấp đến cao</a></li>
                    <li><a class="dropdown-item" href="#">Giá từ cao tới thấp</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Section Maincontent -->
<div class="container khuyenmai" style="height:150px;">

</div>
<section class="maincontent w-100 d-flex justify-content-center">
    <div class="container">
        <div class="sliderbar" style="width: 20%;">
            <ul class="list-group">
                <li class="list-group-item active text-center" aria-current="true">
                    Danh mục
                    <i class="fa-solid fa-list"></i>
                </li>
                <!-- Bảng danh mục -->
                <?php foreach ($listcat as $cat) : ?>
                    <li class="list-group-item"><a href="index.php?option=product&cat=<?php echo $cat['slug']; ?>"><?php echo $cat['name']; ?></a></li>
                <?php endforeach; ?>
                <li class="list-group-item"><a href="index.php?option=product&cat=phu-kien-cao-cap">Phụ kiện cao cấp</a></li>
            </ul>
            <div class="thuonghieu">
                <a href="index.php?option=product&cat=laptop-lenovo"><img src="public/image/logo-lenovo-149x40.png" alt="..."></a>
                <a href="index.php?option=product&cat=laptop-msi"><img src="public/image/logo-msi-149x40.png" alt="..."></a>
                <a href="index.php?option=product&cat=laptop-acer"><img src="public/image/logo-acer-149x40.png" alt="..."></a>
                <a href="index.php?option=product&cat=laptop-dell"><img src="public/image/logo-dell-149x40.png" alt="..."></a>
                <a href="index.php?option=product&cat=laptop-asus"><img src="public/image/logo-asus-149x40.png" alt="..."></a>
                <a href="index.php?option=product&cat=laptop-hp"><img src="public/image/logo-hp-149x40-1.png" alt="..."></a>
            </div>
            <div class="marketing">
                <img src="public/image/ptlaptop2.jpg" alt="" class="slider-img">
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/image/mkt1.jpg" class="d-block img-carsouel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/image/mkt2.jpg" class="d-block img-carsouel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/image/mkt3.jpg" class="d-block img-carsouel" alt="...">
                    </div>
                </div>
            </div>
            <div class="marketing">
                <img src="public/image/ptlaptop1.jpg" alt="" class="slider-img">
            </div>
            <div class="phukien">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/image/ptphukien11.jpg" class="d-block img-carsouel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/ptphukien22.jpg" class="d-block img-carsouel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/ptphukien44.jpg" class="d-block img-carsouel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/ptphukien33.jpg" class="d-block img-carsouel" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/ptphukien55.jpg" class="d-block img-carsouel" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="marketing">
                <img src="public/image/phukien3.jpg" alt="" class="slider-img">
            </div>
            <div class="marketing">
                <img src="public/image/case.gif" alt="" style="width:223px;height:223px">
            </div>
        </div>
        <!-- < require_once('views/frontend/mod_maincontent.php') ?> -->


        <!--  -->
        <div class="container list p-2 bd-highlight" style="width: 80%;">
            <?php foreach ($listcat as $cat) : ?>
                <?php
                $catlistid = array();
                $catlistid[] = $cat['id'];
                //echo $cat['id'];
                $listcat1 = $category->category_parentid($cat['id']);

                if (count($listcat1)) {
                    foreach ($listcat1 as $cat1) {
                        $catlistid[] = $cat1['id'];
                        $listcat2 = $category->category_parentid($cat1['id']);
                        if (count($listcat2)) {
                            foreach ($listcat2 as $cat2) {
                                $catlistid[] = $cat2['id'];
                            }
                        }
                    }
                }
                //print_r($catlistid);
                $listproduct = $product->product_home($catlistid, 4);
                //var_dump($listproduct)
                ?>
                <div style="float: left">
                    <div class="headercontent d-flex justify-content-between">
                        <h3><?php echo $cat['name']; ?></h3>
                        <div class="text-bottom"><a href="http://localhost/index.php?option=product&cat=<?php echo ($cat['slug']) ?>">Xem thêm <i class="fas fa-angle-double-right text-bottom"></i></a></div>
                    </div>
                    <div class="container p-2 bd-highlight">
                        <?php foreach ($listproduct as $pro) : ?>
                            <div class="card bg-card" style="width: 210px;">
                                <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>">
                                    <img src="public/image/products/<?php echo $pro['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="index.php?option=product&id=<?php echo $pro['slug']; ?>"><?php echo $pro['name']; ?></a></h5><br>
                                    <p class="card-text"><?php echo $pro['detail']; ?></p>
                                    <span><b>Giá: <?php echo number_format($pro['price']); ?>₫</b></span>
                                    <div classs="d-flex justify-content-center">
                                        <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>" style="float: left" class="btn btn-primary a-buy-text">Xem thêm</a>
                                        &nbsp;
                                        <form action="views/frontend/cart.php" method="post" style="float: left">
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $pro['name']; ?>">
                                            <input type="hidden" name="gia" value="<?php echo $pro['price']; ?>">
                                            <input type="hidden" name="hinh" value="<?php echo $pro['img']; ?>">
                                            <input type="submit" class="btn btn-success a-buy-text" name="addcart" style="float: left; width: 90px; margin-left: 5px" value="Thêm vào giỏ">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!--  -->
<!--  -->

<section class="maincontent-footer">
    <div class="container">
        <?php foreach ($listcat11 as $cat) : ?>
            <?php
            $catlistid = array();
            $catlistid[] = $cat['id'];
            //echo $cat['id'];
            $listcat1 = $category->category_parentid($cat['id']);

            if (count($listcat1)) {
                foreach ($listcat1 as $cat1) {
                    $catlistid[] = $cat1['id'];
                    $listcat2 = $category->category_parentid($cat1['id']);
                    if (count($listcat2)) {
                        foreach ($listcat2 as $cat2) {
                            $catlistid[] = $cat2['id'];
                        }
                    }
                }
            }
            //print_r($catlistid);
            $listproduct = $product->product_home($catlistid, 5);
            //var_dump($listproduct)
            ?>
            <div class="headercontent d-flex justify-content-between">
                <h3><?php echo $cat['name']; ?></h3>
                <div class="text-bottom"><a href="http://localhost/index.php?option=product&cat=<?php echo ($cat['slug']) ?>">Xem thêm <i class="fas fa-angle-double-right text-bottom"></i></a></div>
            </div>
            <div class="container d-flex justify-content-center">
                <?php foreach ($listproduct as $pro) : ?>
                    <div class="card btn-card-footer">
                        <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>">
                            <img src="public/image/<?php echo $pro['img']; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="card-text"><a href="index.php?option=product&id=<?php echo $pro['slug']; ?>"><?php echo $pro['name']; ?></a></p>
                            <span><b>Giá: <?php echo number_format($pro['price']); ?>₫</b></span>
                            <div>
                                <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>" style="float: left" class="btn btn-primary ">Xem thêm</a>
                                <form action="views/frontend/cart.php" method="post" style="float: left">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="tensp" value="<?php echo $pro['name']; ?>">
                                    <input type="hidden" name="gia" value="<?php echo $pro['price']; ?>">
                                    <input type="hidden" name="hinh" value="<?php echo $pro['img']; ?>">
                                    <input type="submit" class="btn btn-success" name="addcart" style="float: left; width: 100px; margin-left: 5px" value="Thêm vào giỏ">
                                </form>
                                <!-- <a href="#" class="btn btn-success ">Thêm vào giỏ</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--Kết thúc Section Maincontent  -->
<?php require_once('views/frontend/footer.php'); ?>