<?php

use App\Models\Menu;

$menu = new Menu;

$list = $menu->menu_list(['type' => 'index']);
$strparenid = '';
foreach ($list as $item) {
    $strparenid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    // $stroders .= "<option value='" . $item['name'] . "'>Sau:" . $item['name'] . "</option>";
}
?>

<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM DANH MỤC MENU</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=menu" class="btn btn-sm btn-info">
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
                                <label for="">Tên Menu</label>
                                <input name="data[name]" id="name" type="text" class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="link">Link</label>
                                <textarea name="data[link]" id="link" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="position">Vị trí</label>
                                <input name="data[position]" id="position" type="text" class="form-control" placeholder="Ex: mainmenu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="type">Loại</label>
                                <select name="data[type]" id="type" class="form-control">
                                    <option value="custom">Custom</option>
                                    <option value="category">Danh mục sản phẩm</option>
                                    <option value="topic">Danh mục bài viết</option>
                                    <option value="page">Trang đơn</option>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="parentid">Cấp cha</label>
                                <select name="data[parentid]" id="parentid" class="form-control">
                                    <option value="">Chọn loại menu</option>
                                    <?php echo $strparenid; ?>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="tableid">ID Table</label>
                                <input name="data[tableid]" type="number" id="tableid" step="1000" min="1" max="1000" value="1" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="orders">Order</label>
                                <input name="data[orders]" type="number" id="orders" step="1000" min="1" max="1000" value="1" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div>
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