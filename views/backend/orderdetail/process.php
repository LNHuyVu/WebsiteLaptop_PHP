<?php 

use App\Models\Orderdetail;

$orderdetail= new Orderdetail(); 


if(isset($_POST['CAPNHAT']))
{
   $id=$_POST['id'];
   $data=$_POST['data'];
   //$data['updated_at']=date('Y-m-d H-i-s');
   //$data['updated_by']=1;
   $orderdetail->orderdetail_update($data, $id);
   header("location:index.php?option=orderdetail");   
}