<?php 

use App\Models\Contact;

$contact= new Contact(); 

if(isset($_POST['THEM']))
{
   $data=$_POST['data'];
   $data['created_at']=date('Y-m-d H-i-s');
//    echo "<pre>";
//    print_r($data);
//    echo "<pre>";
   $contact->contact_insert($data);
   header("location:index.php?option=contact");
}

if(isset($_POST['TRALOI']))
{
   $id=$_POST['id'];
   $data=$_POST['data'];
   $data['updated_at']=date('Y-m-d H-i-s');
   $data['updated_by']=1;
   // echo "<pre>";
   // print_r($data);
   // echo "<pre>";
   $contact->contact_update($data, $id);
   header("location:index.php?option=contact");   
}
if(isset($_POST['CAPNHAT']))
{
   $id=$_POST['id'];
   $data=$_POST['data'];
   $data['updated_at']=date('Y-m-d H-i-s');
   $data['updated_by']=1;
   // echo "<pre>";
   // print_r($data);
   // echo "<pre>";
   $contact->contact_update($data, $id);
   header("location:index.php?option=contact");   
}