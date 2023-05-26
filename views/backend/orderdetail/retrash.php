<?php

use App\Models\Orderdetail;

$orderdetail = new Orderdetail(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $orderdetail->orderdetail_row($id);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => $_SESSION['userid'],
    'status' => 2
);
$orderdetail->orderdetail_update($data, $id);
header("location: index.php?option=orderdetail&cat=trash"); 