<?php

use App\Models\Orderdetail;

$orderdetail = new Orderdetail();
$id = $_REQUEST['id'];
$row = $orderdetail->orderdetail_row($id);

?>
<?php require_once('../views/backend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<form name="form1" action="index.php?option=orderdetail&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">Xem Chi Tiết</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=orderdetail" class="btn btn-sm btn-info">
                                <i class="fas fa-arrow-left"></i> Quay về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id'] ?>" type="hidden" />
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="orderid">Mã Hóa đơn</label>
                                <input name="data[orderid]" value="<?php echo $row['orderid'] ?>" id="orderid" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="productid">Mã Sản Phẩm</label>
                                <input name="data[productid]" value="<?php echo $row['productid'] ?>" id="productid" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="price">Đơn giá</label>
                                <input name="data[price]" value="<?php echo $row['price'] ?>" id="price" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="quantity">Số lượng</label>
                                <input name="data[quantity]" value="<?php echo $row['quantity'] ?>" id="quantity" type="text" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label for="amount">Thành tiền</label>
                                <input name="data[amount]" value="<?php echo $row['amount'] ?>" id="amount" type="text" class="form-control"/>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="md-3">
                                <label for="status">Trạng thái</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                        </div> -->
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