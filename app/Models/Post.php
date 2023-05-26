<?php

namespace App\Models;

use App\Library\Database;

class Post extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('post');
    }
    //Lấy sản phẩm 
    public function post_topic($listcatid, $offset = 0, $limit = 2)
    {
        $sql = "SELECT * FROM $this->table WHERE topid IN (" . implode(',', $listcatid) . ") AND status='1' ORDER BY created_at DESC LIMIT $offset,$limit";
        //cho ($sql);
        return $this->QueryAll($sql);
    }
    //Đếm số sản phẩm
    public function post_topic_count($listcatid)
    {
        $sql = "SELECT * FROM $this->table WHERE topid IN (" . implode(',', $listcatid) . ") AND status='1'";
        //cho ($sql);
        return count($this->QueryAll($sql));
    }
    //Lấy sản phẩm theo catid
    public function post_home($listcatid, $limit = 4)
    {
        $sql = "SELECT * FROM $this->table WHERE topid IN (" . implode(',', $listcatid) . ") AND status='1' ORDER BY created_at DESC LIMIT $limit";
        //cho ($sql);
        return $this->QueryAll($sql);
    }
    //Lấy danh sách post
    public function post_list($args = array())
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
    //Danh sách các type=page
    public function post_list_page($args = array())
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
        $sql = "SELECT * FROM $this->table $strwhere AND type='page' ORDER BY created_at DESC";
        //echo $sql;
        return $this->QueryAll($sql);
    }
    //Lấy ra 1 mẫu tin - sau này có sửa lại
    public function post_row($id)
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
    public function post_insert($data)
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
    public function post_update($data, $id)
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
    //Delete mẫu tin
    public function post_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        $this->SetQuery($sql);
    }
}
