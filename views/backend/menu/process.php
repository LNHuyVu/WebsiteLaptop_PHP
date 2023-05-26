<?php

use App\Models\Menu;
use App\Models\Category;
use App\Models\Post;
use App\Models\Topic;


$menu = new Menu();
$category = new Category(); //Tạo đối tượng 
$post = new Post(); //Tạo đối tượng 
$topic = new Topic(); //Tạo đối tượng 

if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $data['created_at'] = date('Y-m-d H-i-s');
    $data['created_by'] = 1;
    //    echo "<pre>";
    //    print_r($data);
    //    echo "<pre>";
    $menu->menu_insert($data);
    header("location:index.php?option=menu");
}

if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $data = $_POST['data'];
    $data['updated_at'] = date('Y-m-d H-i-s');
    $data['updated_by'] = 1;
    $menu->menu_update($data, $id);
    header("location:index.php?option=menu");
}

//Thêm danh mục vào bảng menu
if (isset($_POST['ThemCategory'])) {
    if (isset($_POST['nameCategory'])) {
        $listid = $_POST['nameCategory'];
        foreach($listid as $id)
        {
            $row_cat=$category->category_row($id);
            $data=array(
                'name'=>$row_cat['name'],
                'link'=>'index.php?option=product&cat='.$row_cat['slug'],
                'type'=>'category',
                'tableid'=>$id,
                'orders'=>1,
                'position'=>$_POST['position'],
                'parentid'=>3,
                'status'=>2,
                'updated_at'=> date('Y-m-d H-i-s'),
                'updated_by'=> $_SESSION['userid']

            );
            $menu->menu_insert($data);
        }
        header("location:index.php?option=menu");
    }
    else{
        header("location:index.php?option=menu");
    }
    echo "Them category";
}
if (isset($_POST['ThemPage'])) {
    if (isset($_POST['namePage'])) {
        $listid = $_POST['namePage'];
        foreach($listid as $id)
        {
            $row_page=$post->post_row($id);
            $data=array(
                'name'=>$row_page['title'],
                'link'=>'index.php?option=page&cat='.$row_page['slug'],
                'type'=>'page',
                'tableid'=>$id,
                'orders'=>1,
                'position'=>$_POST['position'],
                'parentid'=>2,
                'status'=>2,
                'updated_at'=> date('Y-m-d H-i-s'),
                'updated_by'=> $_SESSION['userid']

            );
            $menu->menu_insert($data);
        }
        header("location:index.php?option=menu");
    }
    else{
        header("location:index.php?option=menu");
    }
    echo "Them page";
}
if (isset($_POST['ThemTopic'])) {
    if (isset($_POST['nameTopic'])) {
        $listid = $_POST['nameTopic'];
        foreach($listid as $id)
        {
            $row_topic=$topic->topic_row($id);
            $data=array(
                'name'=>$row_topic['name'],
                'link'=>'index.php?option=post&cat='.$row_topic['slug'],
                'type'=>'topic',
                'tableid'=>$id,
                'orders'=>1,
                'position'=>$_POST['position'],
                'parentid'=>8,
                'status'=>2,
                'updated_at'=> date('Y-m-d H-i-s'),
                'updated_by'=> $_SESSION['userid']

            );
            $menu->menu_insert($data);
        }
        header("location:index.php?option=menu");
    }
    else{
        header("location:index.php?option=menu");
    }
    echo "Them topic";
}
if (isset($_POST['ThemCustom'])) {
    if(strlen($_POST['name'])>0 && strlen($_POST['link']))
    {
        $data=array(
            'name'=>$_POST['name'],
            'link'=>$_POST['link'],
            'type'=>'custom',
            'orders'=>1,
            'position'=>$_POST['position'],
            'parentid'=>0,
            'status'=>2,
            'updated_at'=> date('Y-m-d H-i-s'),
            'updated_by'=> $_SESSION['userid']

        );
        $menu->menu_insert($data);
        header("location:index.php?option=menu");
    }
    else{
        header("location:index.php?option=menu");
    }
}
