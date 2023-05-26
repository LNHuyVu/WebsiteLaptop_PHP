<?php

use App\Models\Slider;

$slider = new Slider();
$id = $_REQUEST['id'];
$row = $slider->slider_row($id);

?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=slider&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CHI TIẾT SLIDER</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=slider" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id'] ?>" type="hidden" />
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="">Tên chủ đề</label>
                                <input name="data[name]" id="name" type="text" value="<?php echo $row['name'] ?>" required class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                            <label for="">Hình ảnh</label>
                                <img  class="w-50 h-50" src="../../../public/image/<?php echo $row['img'] ?>" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="">Link</label>
                                <input name="data[link]" id="link" type="text" value="<?php echo $row['link'] ?>" required class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="">Position</label>
                                <input name="data[position]" id="position" type="text" value="<?php echo $row['position'] ?>" required class="form-control" placeholder="Nhập tên loại" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="md-3">
                                <label for="orders">Order</label>
                                <input name="data[orders]" id="orders" value="<?php echo $row['orders'] ?>" type="text">
                            </div>
                            <div class="md-3">
                                <label for="created_at">Ngày đăng</label>
                                <input name="data[created_at]" id="created_at" value="<?php echo $row['created_at'] ?>" type="text">
                            </div>
                            <div class="md-3">
                                <label for="updated_at">Ngày update</label>
                                <input name="data[updated_at]" id="updated_at" value="<?php echo $row['updated_at'] ?>" type="text">
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