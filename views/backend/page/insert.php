<?php

use App\Models\Topic;

$topic = new Topic;

$list = $topic->topic_list(['status' => 'index']);


?>

<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=page&cat=process" method="post" enctype="multipart/form-data">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM BÀI VIẾT</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=page" class="btn btn-sm btn-info">
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
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="">Tên Bài Viết</label>
                                <input name="data[title]" id="title" type="text" required class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="metakey">Từ khóa SEO</label>
                                <textarea name="data[metakey]" id="matekey" rows="4" required class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="metadesc">Mô tả SEO</label>
                                <textarea name="data[metadesc]" id="metadesc" rows="4" required class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết sản phẩm</label>
                                <textarea name="data[detail]" id="detail" rows="4" required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="topid">Mã loại</label>
                                <select name="data[topid]" id="topid" required class="form-control">
                                    <option value="0">Trang đơn</option>
                                </select>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="hinh">Hình ảnh</label>
                                <input type="file" required name="img" id="hinh"></input>
                            </div>
                            <br>
                            <div class="md-3">
                                <label for="number">Vị trí</label>
                                <select name="data[type]" id="type" required class="form-control">
                                    <option value="page">Page</option>
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
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
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