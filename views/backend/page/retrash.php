<?php

use App\Models\Post;

$post = new Post(); //Tạo đối tượng
$id = $_REQUEST["id"];
$row = $post->post_row($id);
// var_dump($row);
// echo "<hr>";

$data = array(
    'updated_at' => date('Y-m-d H-i-s'),
    'updated_by' => 1,
    'status' => 2
);
$post->post_update($data, $id);
header("location: index.php?option=page&cat=trash");
