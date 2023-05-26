<?php

namespace App\Models;

use App\Library\Database;

class Category extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('category');
    }

    //Lấy danh sách theo parenid
    public function category_parentid($parentid = 0)
    {
        $sql = "SELECT * FROM $this->table WHERE parentid='$parentid' AND status='1'  ORDER BY orders ASC";
        return $this->QueryAll($sql);
    }
    //Lấy danh sách theo slug
    public function category_slug($slug = 'phu-kien')
    {
        $sql = "SELECT * FROM $this->table WHERE slug='$slug' AND status='1'  ORDER BY orders ASC";
        return $this->QueryAll($sql);
    }
    //Lấy danh sách category
    public function category_list($args = array())
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
    public function category_row($id)
    {
        if (is_numeric($id)) {
            $sql = "SELECT * FROM $this->table WHERE id='$id'";
        } else {
            $sql = "SELECT * FROM $this->table WHERE slug='$id' AND status='1'";
        }
        //echo $sql;
        return $this->QueryOne($sql);
    }
    //Insert 1 mẫu tin
    public function category_insert($data)
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
    public function category_update($data, $id)
    {
        $strset = '';
        foreach ($data as $key => $value) {
            $strset .= $key . "='$value', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET $strset WHERE id='$id'";
        $this->SetQuery($sql);
    }
    //Update mẫu tin
    public function category_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        $this->SetQuery($sql);
    }
}
