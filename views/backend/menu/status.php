<?php

use App\Models\Menu;

$menu = new Menu(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $menu->menu_row($id);
// var_dump($row);
// echo "<hr>";
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => 1,
    'status' => $new_status
);
$menu->menu_update($data, $id);
header("location: index.php?option=menu");
