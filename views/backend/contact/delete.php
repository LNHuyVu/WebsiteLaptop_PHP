<?php

use App\Models\Contact;

$contact = new Contact(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $contact->contact_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$contact->contact_delete($id);
header("location: index.php?option=contact&cat=trash");