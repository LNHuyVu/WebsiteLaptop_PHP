<?php

use App\Models\User;

$user = new User(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $user->user_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$user->user_delete($id);
header("location: index.php?option=usercustomer&cat=trash");