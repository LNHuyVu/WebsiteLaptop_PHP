<?php

use App\Models\User;

$user = new User(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $user->user_row($id);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => 1,
    'status' => 2
);
$user->user_update($data, $id);
header("location: index.php?option=usercustomer&cat=trash");
