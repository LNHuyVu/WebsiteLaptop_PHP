<?php

use App\Models\Category;

$category = new Category(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $category->category_row($id);
// var_dump($row);
// echo "<hr>";
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => $_SESSION['userid'],
    'status' => $new_status
);
$category->category_update($data, $id);
header("location: index.php?option=category");
