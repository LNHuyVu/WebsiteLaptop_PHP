<?php
session_start();

use App\Models\Order;

$order = new Order();
$tensp = $_POST['tensp']; //1
$gia = $_POST['gia']; //2
$soluong = $_POST['soluong']; //3


// $hinh = $_POST['hinh']; //0

$data = $_POST['data'];
$data[$tensp] = $_POST['tensp']; //1
$data[$gia] = $_POST['gia']; //2
$data[$soluong] = $_POST['soluong']; //3
//var_dump($data);
?>
<?php require_once('views/frontend/header.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="container">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card w-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3 class="text-danger">Địa chỉ</h3>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="views/frontend/cart.php" class="btn btn-sm btn-info w-100">
                                <i class="fas fa-arrow-left"></i> Quay về
                            </a>
                        </div>
                    </div>
                </div>
                <form action="index.php?option=thanhtoan.php" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="id" value="" type="hidden" />
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="deliveryname">Tên người nhận</label>
                                        <textarea name="data[deliveryname]" id="deliveryname" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deliveryaddress">Địa chỉ</label>
                                        <textarea name="data[deliveryaddress]" id="deliveryaddress" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="md-3">
                                        <label for="deliveryemail">Email</label>
                                        <input name="data[deliveryemail]" type="email" value="" id="deliveryemail" class="form-control"></input>
                                    </div>
                                    <div class="md-3">
                                        <label for="deliveryphone">Số điện thoại</label>
                                        <input name="data[deliveryphone]" type="text" value="" id="deliveryphone" class="form-control"></input>
                                    </div>
                                </div>

                                <div class="md-3">
                                    <input name="data[status]" id="status" value="1" type="hidden" />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <?php
                                echo $tensp;
                                echo $gia;
                                echo $soluong;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn bg-success w-100"><i class="fas fa-plus-circle"></i> Đặt hàng</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</form>
</div>