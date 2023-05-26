<?php

namespace App\Models;

use App\Library\Database;

class Orderdetail extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('orderdetail');
    }

    //Lấy danh sách order
    public function orderdetail_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
    //Lấy ra 1 mẫu tin - sau này có sửa lại
    public function orderdetail_row($id)
    {
        $sql = "SELECT* FROM $this->table WHERE  id='$id'";
        return $this->QueryOne($sql);
    }
    //Insert 1 mẫu tin
    public function orderdetail_insert($data)
    {
        $strk = '';
        $strv = '';
        foreach ($data as $k => $v) {
            $strk .= $k . ", ";
            $strv .= "'$v', ";
        }
        $strk = rtrim(rtrim($strk), ',');
        $strv = rtrim(rtrim($strv), ',');
        $sql = "INSERT INTO $this->table($strk) VALUES($strv)";
        //echo $sql;
        $this->SetQuery($sql);
    }
    //Update mẫu tin
    public function orderdetail_update($data, $id)
    {
        $strset = '';
        foreach ($data as $key => $value) {
            $strset .= $key . "='$value', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET $strset WHERE id='$id'";
        //echo $sql;
        $this->SetQuery($sql);
    }
    //Update mẫu tin
    public function orderdetail_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        $this->SetQuery($sql);
    }
}
