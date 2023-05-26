<?php

use App\Models\User;

$user = new User(); //Tạo đối tượng
$a['id'] = $_REQUEST['id'];
$row = $user->user_row($a);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => $_SESSION['userid'],
    'status' => 0
);
$user->user_update($data, $a['id']);
header("location: index.php?option=user");
