<?php

use App\Models\Slider;

$slider = new Slider(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $slider->slider_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$slider->slider_delete($id);
header("location: index.php?option=slider&cat=trash");