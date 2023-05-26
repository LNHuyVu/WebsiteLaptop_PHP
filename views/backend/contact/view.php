<?php

use App\Models\Contact;

$contact = new Contact();
$id = $_REQUEST['id'];
$row = $contact->contact_row($id);

?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=contact&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CHI TIẾT LIÊN HỆ</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=contact" class="btn btn-sm btn-info">
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
                                <label for="">Tên người liên hệ</label>
                                <input name="data[name]" id="name" type="text" value="<?php echo $row['fullname'] ?>" required class="form-control" placeholder="Nhập tên loại" />
                            </div>
                            <div class="mb-3">
                                <label for="">Tiêu đề</label>
                                <input name="data[title]" id="title" type="text" value="<?php echo $row['title'] ?>" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Nội dung</label>
                                <input name="data[detail]" id="detail" type="text" value="<?php echo $row['detail'] ?>" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Nhân viên trả lời</label>
                                <input name="data[replydetail]" id="replydetail" type="text" value="<?php echo $row['replydetail'] ?>" required class="form-control"  />
                            </div>
                        </div>
                        <div class="col-md-3">
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