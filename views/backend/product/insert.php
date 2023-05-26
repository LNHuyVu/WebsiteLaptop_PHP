<?php

use App\Models\Category;

$category = new Category;

$list = $category->category_list(['status' => 'index']);
$strcatid = '';
foreach ($list as $item) {
    $strcatid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    // $stroders .= "<option value='" . $item['name'] . "'>Sau:" . $item['name'] . "</option>";
}
?>

<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM DANH MỤC LOẠI SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=product" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về
                            </a>
                            <button name="THEM" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus-circle"></i> Lưu[Thêm]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="">Tên Sản Phẩm</label>
                                <input name="data[name]" id="name" type="text" class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khóa SEO</label>
                                <textarea name="data[metakey]" id="matekey" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả SEO</label>
                                <textarea name="data[metadesc]" id="metadesc" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết bài viết</label>
                                <textarea name="data[detail]" id="detail" rows="4" class="form-control"></textarea>
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
                            <br>
                            <div class="md-3">
                                <label for="hinh">Hình ảnh</label>
                                <input type="file" name="img" id="hinh"></input>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="number">Số lượng</label>
                                <input name="data[number]" type="number" id="number" step="1" min="1" max="1000" value="1" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="price">Giá</label>
                                <input name="data[price]" type="number" id="price" min="100000" max="99999999" value="100000" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="pricesale">Giá khuyến mãi</label>
                                <input name="data[pricesale]" type="number" id="pricesale" min="100000" max="99999999" value="100000" class="form-control"></input>
                            </div>
                            <!-- <div class="md-3">
                                <label for="parentid">Chủ đề cấp cha</label>
                                <select name="data[parentid]" id="parentid" class="form-control">
                                    <option value="0">Cấp cha</option>
                                    <//?php echo $strparenid; ?>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div> -->
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