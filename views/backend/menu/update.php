<?php

use App\Models\Menu;

$menu = new Menu();
$id = $_REQUEST['id'];
$row = $menu->menu_row($id);
$list = $menu->menu_list(['status' => 'index']);
$strparenid = '';
foreach ($list as $item) {
    if ($row['parentid'] == $item['id']) {
        $strparenid .= "<option selected value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    } else {
        $strparenid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=menu&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT MEUNU</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=menu" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                            <button name="CAPNHAT" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus-circle"></i> Lưu[Cập nhật]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id'] ?>" type="hidden" />
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="">Tên Menu</label>
                                <input name="data[name]" id="name" value="<?php echo $row['name'] ?>" type="text" class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="link">Link</label>
                                <textarea name="data[link]" id="link" rows="4" class="form-control"><?php echo $row['link'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="position">Vị trí</label>
                                <input name="data[position]" id="position" value="<?php echo $row['position'] ?>" type="text" class="form-control" placeholder="Ex: mainmenu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="type">Loại</label>
                                <select name="data[type]" id="type" class="form-control">
                                    <option value="custom"<?php echo ($row['type'] == 'custom') ? 'selected' : ''; ?>>Custom</option>
                                    <option value="category"<?php echo ($row['type'] == 'category') ? 'selected' : ''; ?>>Danh mục sản phẩm</option>
                                    <option value="topic"<?php echo ($row['type'] == 'topic') ? 'selected' : ''; ?>>Danh mục bài viết</option>
                                    <option value="page"<?php echo ($row['type'] == 'page') ? 'selected' : ''; ?>>Trang đơn</option>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="parentid">Cấp cha</label>
                                <select name="data[parentid]" id="parentid" class="form-control">
                                    <option value="0">Chọn loại menu</option>
                                    <?php echo $strparenid; ?>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="tableid">ID Table</label>
                                <input name="data[tableid]" type="number" id="tableid" value="<?php echo $row['tableid'] ?>" step="1000" min="1" max="1000" value="1" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="orders">Order</label>
                                <input name="data[orders]" type="number" id="orders" value="<?php echo $row['orders'] ?>" step="1000" min="1" max="1000" value="1" class="form-control"></input>
                            </div>
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