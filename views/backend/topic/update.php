<?php

use App\Models\Topic;

$topic = new Topic();
$id = $_REQUEST['id'];
$row = $topic->topic_row($id);
$list = $topic->topic_list(['status' => 'index']);
$strparentid = '';
$stroders = '';
foreach ($list as $item) {
    if ($row['parentid'] == $item['id']) {
        $strparentid .= "<option selected value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    } else {
        $strparentid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    }
    if ($row['orders'] == $item['orders']) {
        $stroders .= "<option selected value='" . $item['orders'] . "'>Sau:" . $item['name'] . "</option>";
    } else {
        $stroders .= "<option value='" . $item['orders'] . "'>Sau:" . $item['name'] . "</option>";
    }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=topic&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT DANH MỤC BÀI VIẾT</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=topic" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về
                            </a>
                            <button name="CAPNHAT" type="submit" class="btn btn-sm btn-success">
                                <i class="fas fa-plus-circle"></i> Lưu[Thêm]
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                            <div class="mb-3">
                                <label for="">Tên chủ đề</label>
                                <input name="data[name]" value="<?php echo $row['name'] ?>" id="name" type="text" required class="form-control" placeholder="Nhập tên chủ đề" />
                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khóa SEO</label>
                                <textarea name="data[metakey]" id="matekey" rows="4" required class="form-control"><?php echo $row['metakey'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả SEO</label>
                                <textarea name="data[metadesc]" id="metadesc" rows="4" required class="form-control"><?php echo $row['metadesc'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="parentid">Chủ đề cấp cha</label>
                                <select name="data[parentid]" id="parentid" class="form-control">
                                    <option value="0">Cấp cha</option>
                                    <?php echo $strparentid; ?>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="orders">Sắp xếp</label>
                                <select name="data[orders]" id="orders" class="form-control" value="<?php echo $row['title'] ?>">
                                    <?php echo $stroders; ?>
                                </select>
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