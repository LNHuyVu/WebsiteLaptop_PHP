<?php

namespace App\Models;

use App\Library\Database;

class Contact extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('contact');
    }
    //Lấy danh sách contact
    public function contact_list($args = array())
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            if ($args['status'] == 'index') {
                $strwhere .= "status!=0";
            } else {
                $strwhere .= "status='" . $args['status'] . "'";
            }
        }
        //Kiểm tra biến strwhere
        if ($strwhere != '') {
            $strwhere = "WHERE " . $strwhere;
        }
        $sql = "SELECT * FROM $this->table $strwhere ORDER BY created_at DESC";
        //echo $sql;
        return $this->QueryAll($sql);
    }
    //Lấy ra 1 mẫu tin - sau này có sửa lại
    public function contact_row($id)
    {
        $sql = "SELECT* FROM $this->table WHERE  id='$id'";
        return $this->QueryOne($sql);
    }
    //Insert 1 mẫu tin
    public function contact_insert($data)
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
    public function contact_update($data, $id)
    {
        $strset = '';
        foreach ($data as $key => $value) {
            $strset .= $key . "='$value', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET $strset WHERE id='$id'";
        //echo ($sql);
        $this->SetQuery($sql);
    }
    //Update mẫu tin
    public function contact_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        $this->SetQuery($sql);
    }
}
