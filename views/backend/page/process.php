<?php

use App\Library\Myclass;

use App\Models\Post;

$post = new Post();

if (isset($_POST['THEM'])) {
   $data = $_POST['data'];
   $data['slug'] = Myclass::str_slug($data['title']);
   $data['created_at'] = date('Y-m-d H-i-s');
   $data['created_by'] = $_SESSION['userid'];
   //
   $target_dir = "../public/image/posts/";
   $target_file = $target_dir . basename($_FILES["img"]["name"]);

   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {

      $data['img'] = $_FILES["img"]["name"];
      move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
      $post->post_insert($data);
   }
   // echo "<pre>";
   // print_r($data);
   // echo "<pre>";
   header("location:index.php?option=page");
}

if (isset($_POST['CAPNHAT'])) {
   $id = $_POST['id'];
   $data = $_POST['data'];
   $data['slug'] = Myclass::str_slug($data['title']);
   $data['updated_at'] = date('Y-m-d H-i-s');
   $data['updated_by'] = $_SESSION['userid'];
   //
   $target_dir = "../public/image/posts/";
   $target_file = $target_dir . basename($_FILES["img"]["name"]);

   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {
      $pathdel=$target_dir.$row['img'];//
      if(file_exists($pathdel))
      {
         unlink($pathdel);
      }
      $data['img'] = $_FILES["img"]["name"];
      move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
   }
   $post->post_update($data, $id);
   header("location:index.php?option=page");
}
