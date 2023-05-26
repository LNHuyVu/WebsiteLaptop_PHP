<?php

use App\Models\Post;
use App\Models\Topic;

$post = new Post();
$topic = new Topic();
$id = $_REQUEST['id'];
$row = $post->post_row($id);
$list = $topic->topic_list(['status' => 'index']);
$strtopid = '';
$strtype = '';

foreach ($list as $item) {
    if ($row['topid'] == $item['id']) {
        $strtopid .= "<option selected value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    } else {
        $strtopid .= "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
    }
    // if ($row['topid'] == $item['type']) {
    //     $strtype .= "<option selected value='" . $item['topid'] . "'>Sau:" . $item['type'] . "</option>";
    // } else {
    //     $strtype .= "<option value='" . $item['topid'] . "'>Sau:" . $item['type'] . "</option>";
    // }
}
?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=page&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CHI TIẾT BÀI VIẾT</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=page" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id'] ?>" type="hidden" />
                        <div class="col-md-8">
                            <img style="width: 300px; height: 300px"src="../../../public/image/posts/<?php echo $row['img'] ?>" alt="" >
                            <div class="mb-3">
                                <label for="">Tên Sản Phẩm</label>
                                <input name="data[title]" value="<?php echo $row['title'] ?>" id="title" type="text" class="form-control" placeholder="Nhập tên loại" />
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
                                <label for="detail">Chi tiết bài viết</label>
                                <textarea name="data[detail]" id="detail" rows="20" class="form-control"><?php echo $row['detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-3">
                                <label for="topid">Cấp cha</label>
                                <select name="data[topid]" id="topid" class="form-control">
                                    <?php echo $strtopid; ?>
                                </select>
                            </div>
                            <div class="md-3">
                                <label for="number">Vị trí</label>
                                <select name="data[type]" id="type" required class="form-control">
                                    <option value="">Chọn loại bài viết</option>
                                    <option value="page" <?php echo ($row['type'] == 'page') ? 'selected' : ''; ?>>Page</option>
                                    <option value="post" <?php echo ($row['type'] == 'post') ? 'selected' : ''; ?>>Post</option>
                                </select>
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
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
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