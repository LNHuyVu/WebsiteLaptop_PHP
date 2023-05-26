<?php
session_start();

use App\Models\Category;
use App\Models\Product;
use App\Library\Phantrang;

$product = new Product();
$category = new Category();

$slug = $_REQUEST['cat'];
$row_cat = $category->category_row($slug);
//print_r($row_cat);
$catlistid = array();
$catlistid[] = $row_cat['id'];
//echo $cat['id'];
$listcat1 = $category->category_parentid($row_cat['id']);

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
//Xử lí phân trang
if ($slug == 'san-pham') : {
        $limit = 24;
    }
else : {
        $limit = 8;
    }
endif;
$page = Phantrang::pageCurrent();
$offset = Phantrang::pageOffset($page, $limit);
//echo $page;
$total = $product->product_category_count($catlistid);
//$pagenumber=ceil($total/$limit);
$listproduct = $product->product_category($catlistid, $offset, $limit);

//var_dump($listcat);
?>
<?php require_once('views/frontend/header.php'); ?>
<!-- Section Maincontent -->

<section class="maincontent w-100 d-flex justify-content-center">
    <div class="container">
        <div class="headercontent d-flex justify-content-between">
            <h3><?php echo $row_cat['name']; ?></h3>
            <!--  -->
            <script>
                $filterprice = "if($pro['price']<15000000)";
                function filter($id) {
                    var $giatri = document.getElementById($id).value;
                    //alert($giatri);
                    if ($giatri == 1) {
                        $filterprice = "if($pro['price']<15000000)";
                    } else {
                        if ($giatri == 2) {
                            $filterprice = "if($pro['price']>=15000000 && $pro['price']<=20000000)";
                        } else {
                            if ($giatri == 3) {
                                $filterprice = "if($pro['price']>=20000000 && $pro['price']<=25000000)";
                            } else {
                                if ($giatri == 4) {
                                    $filterprice = "if($pro['price']>=25000000 && $pro['price']<=30000000)";
                                } else {
                                    $filterprice = "if($pro['price']>30000000)";
                                }
                            }
                        }
                    }
                    alert($filterprice);
                }
            </script>
            <!--  -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Giá
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button" value="1" id="loc1" onclick="filter(id)">Giá dưới 15 triệu</button></li>
                    <li><button class="dropdown-item" type="button" value="2" id="loc2" onclick="filter(id)">Giá 15 triệu - 20 triệu </button></li>
                    <li><button class="dropdown-item" type="button" value="3" id="loc3" onclick="filter(id)">Giá 20 triệu - 25 triệu </button></li>
                    <li><button class="dropdown-item" type="button" value="4" id="loc4" onclick="filter(id)">Giá 25 triệu - 30 triệu </button></li>
                    <li><button class="dropdown-item" type="button" value="5" id="loc5" onclick="filter(id)">Giá trên 30 </button></li>
                </ul>
            </div>
        </div>
        <div class="container p-2 bd-highlight">
            <?php foreach ($listproduct as $pro) : ?>
                <?php if($pro!=0):?>
                    <div class="card bg-card" style="width: 270px;">
                        <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>">
                            <img src="public/image/<?php echo $pro['img']; ?>" class="card-img-top" style="width: 268px; height:178px" alt="...">
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

<div class="container">
    <?php echo Phantrang::pageLink($total, $page, $limit, 'index.php?option=product&cat=' . $slug); ?>
</div>
<!--Kết thúc Section Maincontent  -->
<?php require_once('views/frontend/footer.php'); ?>