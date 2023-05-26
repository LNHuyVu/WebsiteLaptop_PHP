<?php

use App\Models\Contact;

$contact = new Contact();
$list = $contact->contact_list(['status' => 'index']);
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
                            <strong class="text-danger">THÊM DANH MỤC LOẠI SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=contact" class="btn btn-sm btn-info">
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
                                <label for="">Khách hàng</label>
                                <input name="data[fullname]" id="fullname" type="text" required class="form-control" placeholder="Nhập tên" />
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="data[email]" id="email" type="text" required class="form-control" placeholder="Nhập email" />
                            </div>
                            <div class="mb-3">
                                <label for="phone">Số điện thoại</label>
                                <input name="data[phone]" id="phone" type="text" required class="form-control" placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="mb-3">
                                <label for="title">Tiêu đề</label>
                                <textarea name="data[title]" id="title" rows="4" required class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết</label>
                                <textarea name="data[detail]" id="detail" rows="4" required class="form-control"></textarea>
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