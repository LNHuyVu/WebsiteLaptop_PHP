<?php

use App\Models\Order;

$order = new Order(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $order->order_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$order->order_delete($id);
header("location: index.php?option=order&cat=trash");