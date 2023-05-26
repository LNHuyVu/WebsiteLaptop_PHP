<?php

use App\Models\Product;
use App\Models\Category;

$product = new Product();
$category = new Category();
$id = $_REQUEST['id'];
$row = $product->product_row($id);
$list = $category->category_list(['status' => 'index']);
$strcatid = '';

foreach ($list as $item) {
    if ($row['catid'] == $item['id']) {
        $strcatid .= "<option selected value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    } else {
        $strcatid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    }
    // if ($row['orders'] == $item['orders']) {
    //     $stroders .= "<option selected value='" . $item['orders'] . "'>Sau:" . $item['name'] . "</option>";
    // } else {
    //     $stroders .= "<option value='" . $item['orders'] . "'>Sau:" . $item['name'] . "</option>";
    // }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=product&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CHI TIẾT SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=product" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id'] ?>" type="hidden" />
                        <div class="col-md-9">
                        <img src="../../../public/image/<?php echo $row['img'] ?>" alt="">
                            <div class="mb-3">
                                <label for="">Tên Sản Phẩm</label>
                                <input name="data[name]" value="<?php echo $row['name'] ?>" id="name" type="text" class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khóa SEO</label>
                                <textarea name="data[metakey]" id="matekey" rows="4" class="form-control"><?php echo $row['metakey'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả SEO</label>
                                <textarea name="data[metadesc]" id="metadesc" rows="4" class="form-control"><?php echo $row['metadesc'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết sản phẩm</label>
                                <textarea name="data[detail]" id="detail" rows="4" class="form-control"><?php echo $row['detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="catid">Mã loại</label>
                                <select name="data[catid]" id="catid" class="form-control">
                                    <option value="">Chọn loại sản phẩm</option>
                                    <?php echo $strcatid; ?>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="number">Số lượng</label>
                                <input name="data[number]" type="number" value="<?php echo $row['number'] ?>" id="number" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="price">Giá</label>
                                <input name="data[price]" type="number" value="<?php echo $row['price'] ?>" id="price" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="pricesale">Giá khuyến mãi</label>
                                <input name="data[pricesale]" type="number" value="<?php echo $row['pricesale'] ?>" id="pricesale" class="form-control"></input>
                            </div>
                            <!-- <div class="md-3">
                                <label for="parentid">Chủ đề cấp cha</label>
                                <select name="data[parentid]" id="parentid" class="form-control">
                                    <option value="0">Cấp cha</option>
                                    <//?php echo $strparenid; ?>
                                </select>
                            </div>-->
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2" <?php echo ($row['status'] == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
                                    <option value="1" <?php echo ($row['status'] == 1) ? 'selected' : ''; ?>>Xuất bản</option>
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