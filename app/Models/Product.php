<?php

namespace App\Models;

use App\Library\Database;

class Product extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('product');
    }
    //Lấy sản phẩm theo catid
    public function product_home($listcatid, $limit = 4)
    {
        $sql = "SELECT * FROM $this->table WHERE catid IN (" . implode(',', $listcatid) . ") AND status='1' ORDER BY created_at DESC LIMIT $limit";
        //cho ($sql);
        return $this->QueryAll($sql);
    }
    //Lấy sản phẩm 
    public function product_category($listcatid, $offset = 0, $limit = 2)
    {
        $sql = "SELECT * FROM $this->table WHERE catid IN (" . implode(',', $listcatid) . ") AND status='1' ORDER BY created_at DESC LIMIT $offset,$limit";
        //cho ($sql);
        return $this->QueryAll($sql);
    } //Đếm sản phẩm 
    public function product_category_count($listcatid)
    {
        $sql = "SELECT * FROM $this->table WHERE catid IN (" . implode(',', $listcatid) . ") AND status='1'";
        //cho ($sql);
        return count($this->QueryAll($sql));
    }
    //Lấy danh sách product
    public function product_list($args = array())
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            // if ($args['status'] == 'index') {
            //     $strwhere .= "status!=0";
            // } else {
            //     $strwhere .= "status='" . $args['status'] . "'";
            // }
            if ($args['status'] == 'index') {
                $strwhere .= "status !='0'";
            } else {
                if ($args['status'] == 'trash') {
                    $strwhere .= "status !='0'";
                } else {
                    $strwhere .= "status='" . $args['status'] . "'";
                }
            }
        }
        //Kiểm tra biến strwhere
        if ($strwhere != '') {
            $strwhere = "WHERE " . $strwhere;
        }
        // $strorder = ' created_at DESC';
        // if (array_key_exists('order', $args)) {
        //     $strorder = $args['order']['field'] . " " . $args['order']['orderby'];
        // }
        // $sql = "SELECT * FROM $this->table $strwhere ORDER BY $strorder";
        $sql = "SELECT * FROM $this->table $strwhere ORDER BY created_at DESC";
        //die(print_r($sql));
        return $this->QueryAll($sql);
    }
    //Danh sách search
    public function product_list_search($args = array(), $search)
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            if ($args['status'] == 'index') {
                $strwhere .= "status !='0'";
            } else {
                if ($args['status'] == 'trash') {
                    $strwhere .= "status !='0'";
                } else {
                    $strwhere .= "status='" . $args['status'] . "'";
                }
            }
        }
        //Kiểm tra biến strwhere
        if ($strwhere != '') {
            // $strwhere = "WHERE  LIKE % " . $strwhere . "%";
            $strwhere = "WHERE NAME LIKE '%".$search."%'";

        }
        $sql = "SELECT * FROM $this->table $strwhere ORDER BY created_at DESC";
        // die(print_r($sql));
        return $this->QueryAll($sql);
    }
    //Đếm danh sách search
    public function product_list_search_count($search)
    {
        $sql = "SELECT * FROM $this->table WHERE NAME LIKE '%$search%' AND status='1'";
        //die(print_r($sql));
        return count($this->QueryAll($sql));
    }
    //Lấy ra 1 mẫu tin - sau này có sửa lại
    public function product_row($id)
    {
        // $sql = "SELECT* FROM $this->table WHERE  id='$id'";
        // return $this->QueryOne($sql);
        if (is_numeric($id)) {
            $sql = "SELECT * FROM $this->table WHERE id='$id'";
        } else {
            $sql = "SELECT * FROM $this->table WHERE slug='$id' AND status='1'";
        }
        //echo $sql;
        return $this->QueryOne($sql);
    }
    //Insert 1 mẫu tin
    public function product_insert($data)
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
    public function product_update($data, $id)
    {
        $strset = '';
        foreach ($data as $key => $value) {
            $strset .= $key . "='$value', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET $strset WHERE id='$id'";
        echo $sql;
        $this->SetQuery($sql);
    }
    //Delete mẫu tin
    public function product_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        //echo $sql;
        $this->SetQuery($sql);
    }
}
