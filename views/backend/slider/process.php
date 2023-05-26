<?php

use App\Models\Slider;

$slider = new Slider();

if (isset($_POST['THEM'])) {
   $data = $_POST['data'];
   $data['created_at'] = date('Y-m-d H-i-s');
   $data['created_by'] = $_SESSION['userid'];
   //
   $target_dir = "../public/image/sliders/";
   $target_file = $target_dir . basename($_FILES["img"]["name"]);

   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {

      $data['img'] = $_FILES["img"]["name"];
      move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
      $slider->slider_insert($data);
   }
   // echo "<pre>";
   // print_r($data);
   // echo "<pre>";
   //header("location:index.php?option=slider");
}

if (isset($_POST['CAPNHAT'])) {
   $id = $_POST['id'];
   $row = $slider->slider_row($id);
   $data = $_POST['data'];
   $data['updated_at'] = date('Y-m-d H-i-s');
   $data['updated_by'] = $_SESSION['userid'];
   //
   //$img=$_POST['img'];
   $target_dir = "../public/image/sliders/";
   $target_file = $target_dir . basename($_FILES["img"]["name"]);

   //$uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {
      //Lấy hình cũ\
      $pathdel = $target_dir . $row['img'];
      if (file_exists($pathdel)) {
         unlink($pathdel);
      }
      $data['img'] = $_FILES["img"]["name"];
      move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
   }
   $slider->slider_update($data, $id);
   header("location:index.php?option=slider");
}
