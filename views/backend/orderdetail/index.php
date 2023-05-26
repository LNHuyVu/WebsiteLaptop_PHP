<?php

use App\Models\Orderdetail;

$orderdetail = new Orderdetail(); //Tạo đối tượng 
$list = $orderdetail->orderdetail_list();
?>



<?php require_once("../views/backend/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class="text-danger">Orderdetail</strong>
                    </div>
                    <!-- <div class="col-md-6 text-right">
                        <a href="index.php?option=orderdetail&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>Thùng rác
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="card-body">
                <table class="table table-borderdetailed" id="myTable">
                    <thead>
                        <th class="text-center" style="width:20px">#</th>
                        <th>Mã đơn hàng</th>
                        <th>Mã sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Chức năng</th>
                        <th>ID</th>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox" />
                                </td>
                                <td><?php echo $row['orderid'] ?></td>
                                <td><?php echo $row['productid'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['quantity'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                                <td class="text-center">
                                    <a href="index.php?option=orderdetail&cat=update&id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=orderdetail&cat=view&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td class="text-center"><?php echo $row['id'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<?php require_once("../views/backend/footer.php") ?>