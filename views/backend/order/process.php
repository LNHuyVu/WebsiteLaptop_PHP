<?php 

use App\Models\Order;

$order= new Order(); 


if(isset($_POST['CAPNHAT']))
{
    $id=$_POST['id'];
    $data=$_POST['data'];
   $data['updated_at']=date('Y-m-d H-i-s');
   $data['updated_by']=1;
   $order->order_update($data, $id);
   header("location:index.php?option=order");   
}