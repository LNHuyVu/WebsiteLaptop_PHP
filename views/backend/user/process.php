<?php


use App\Models\User;

$user = new User();

if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $data['created_at'] = date('Y-m-d H-i-s');
    $data['created_by'] = $_SESSION['userid'];
    $data['password']=sha1($data['password']);
    //
    $target_dir = "../public/image/users/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {

        $data['img'] = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $user->user_insert($data);
    }
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";
    header("location:index.php?option=user");
}

if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $data = $_POST['data'];
    $data['updated_at'] = date('Y-m-d H-i-s');
    $data['updated_by'] = $_SESSION['userid'];
    //
    $target_dir = "../public/image/users/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (in_array($imageFileType, ['png', 'jpg', 'bmp', 'gif'])) {
        $pathdel = $target_dir . $row['img']; //
        if (file_exists($pathdel)) {
            unlink($pathdel);
        }
        $data['img'] = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    }
    $user->user_update($data, $id);
    header("location:index.php?option=user");
}
