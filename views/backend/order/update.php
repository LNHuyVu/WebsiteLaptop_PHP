<?php

use App\Models\Order;

$order = new Order();
$id = $_REQUEST['id'];
$row = $order->order_row($id);

?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=order&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT LOẠI SẢN PHẨM</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=order" class="btn btn-sm btn-info">
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
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="code">Tên Sản Phẩm</label>
                                <input name="data[code]" value="<?php echo $row['code'] ?>" id="code" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="deliveryaddress">Địa chỉ</label>
                                <textarea name="data[deliveryaddress]" id="deliveryaddress" rows="4" class="form-control"><?php echo $row['deliveryaddress'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="deliveryname">Khách hàng</label>
                                <textarea name="data[deliveryname]" id="deliveryname" rows="4" class="form-control"><?php echo $row['deliveryname'] ?></textarea>
                            </div>
                            <div class="md-3">
                                <label for="deliveryemail">Email</label>
                                <input name="data[deliveryemail]" type="email" value="<?php echo $row['deliveryemail'] ?>" id="deliveryemail" class="form-control"></input>
                            </div>
                            <div class="md-3">
                                <label for="deliveryphone">Số điện thoại</label>
                                <input name="data[deliveryphone]" type="text" value="<?php echo $row['deliveryphone'] ?>" id="deliveryphone" class="form-control"></input>
                            </div>
                        </div>
                        <div class="col-md-4">
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