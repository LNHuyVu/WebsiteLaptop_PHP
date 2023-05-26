
<?php

use App\Models\User;

$user = new User(); //Tạo đối tượng
$id = $_REQUEST["id"];
//echo $id;
$row = $user->user_row(['id'=>$id]);
// var_dump($row);
// echo "<hr>";
$new_status = ($row['status'] == 2) ? 1 : 2;
$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => $_SESSION['userid'],
    'status' => $new_status
);
$user->user_update($data, $id);
header("location: index.php?option=usercustomer");