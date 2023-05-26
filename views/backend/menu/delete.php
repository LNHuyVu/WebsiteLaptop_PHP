<?php

use App\Models\Menu;

$menu = new Menu(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $menu->menu_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$menu->menu_delete($id);
header("location: index.php?option=menu&cat=trash");