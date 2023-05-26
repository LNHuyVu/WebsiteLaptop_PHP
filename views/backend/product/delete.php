<?php

use App\Models\Product;

$product = new Product(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $product->product_row($id);
$target_dir="../public/image/products/";
$pathdel=$target_dir.$row['img'];
      if(file_exists($pathdel))
      {
         unlink($pathdel);
      }
$new_status = ($row['status'] == 1) ? 2 : 1;
$product->product_delete($id);
header("location: index.php?option=product&cat=trash");
