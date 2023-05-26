<?php

use App\Models\Order;

$order = new Order(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $order->order_row($id);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => $_SESSION['userid'],
    'status' => 2
);
$order->order_update($data, $id);
header("location: index.php?option=order&cat=trash");