<?php

use App\Models\Menu;

$menu = new Menu(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $menu->menu_row($id);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => 1,
    'status' => 0
);
$menu->menu_update($data, $id);
header("location: index.php?option=menu");