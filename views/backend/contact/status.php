<?php

use App\Models\Contact;

$contact = new Contact(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $contact->contact_row($id);
// var_dump($row);
// echo "<hr>";
$new_status = ($row['status'] == 1) ? 2 : 1;
$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => 1,
    'status' => $new_status
);
$contact->contact_update($data, $id);
header("location: index.php?option=contact");
