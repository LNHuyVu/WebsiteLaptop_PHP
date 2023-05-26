<?php

use App\Models\Topic;

$topic = new Topic(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $topic->topic_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$topic->topic_delete($id);
header("location: index.php?option=topic&cat=trash");