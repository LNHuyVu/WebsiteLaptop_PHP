<?php

use App\Models\Category;

$category = new Category(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $category->category_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$category->category_delete($id);
header("location: index.php?option=category&cat=trash");
