<?php

use App\Models\Product;

$product = new Product();
$search = $_REQUEST['search'];

$list_pro = $product->product_list_search(['status' => 'index'], $search);
$countlist_pro = $product->product_list_search_count($search);
if ($search == '')
    $countlist_pro = 0;
//print_r($list_pro);
//print_r($countlist_pro);
?>
<?php require_once('views/frontend/header.php'); ?>
<?php if ($countlist_pro == 0) : ?>
    <div class="container text-center">
        <h3>Không tìm thấy kết quả tìm kiếm phù hợp</h3>
        <img src="public/image/users/giphy.gif" class="card-img-top w-50 h-50" alt="...">
    </div>
<?php else : ?>
    <section class="search bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h5><i class="fas fa-filter"></i>Bộ lọc tìm kiếm</h5>
                    <div class="block-filter">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                    </div>
                    <div class="block-filter">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                    </div>
                    <div class="block-filter">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Default checkbox
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>Kết quả tìm kiếm cho từ khoá '<a class="text-info"><?php echo ($search); ?></a>'</h3>
                    <?php foreach ($list_pro as $pro) : ?>
                        <?php if ($pro != 0) : ?>
                            <div class="card bg-card" style="max-width: 220px; min-height: 500px">
                                <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>">
                                    <img src="public/image/<?php echo $pro['img']; ?>" class="card-img-top" style="max-width: 268px; max-height:178px" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="index.php?option=product&id=<?php echo $pro['slug']; ?>"><?php echo $pro['name']; ?></a></h5><br>
                                    <p class="card-text-product"><?php echo $pro['detail']; ?></p>
                                    <span><b>Giá: <?php echo number_format($pro['price']); ?>₫</b></span>
                                    <div>
                                        <a href="index.php?option=product&id=<?php echo $pro['slug']; ?>" class="btn btn-primary w-100">Xem thêm</a>
                                        &nbsp;
                                        <form action="views/frontend/cart.php" method="post">
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $pro['name']; ?>">
                                            <input type="hidden" name="gia" value="<?php echo $pro['price']; ?>">
                                            <input type="hidden" name="hinh" value="<?php echo $pro['img']; ?>">
                                            <input type="submit" class="btn btn-success w-100 mt-1" name="addcart" value="Thêm vào giỏ">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php require_once('views/frontend/footer.php'); ?>