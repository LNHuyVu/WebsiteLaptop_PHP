<?php

use App\Models\Post;

$post = new Post(); //Tạo đối tượng
$id = $_REQUEST["id"];
//$row = $post->post_row($id);
$new_status = ($row['status'] == 1) ? 2 : 1;
$post->post_delete($id);
header("location: index.php?option=post&cat=trash");