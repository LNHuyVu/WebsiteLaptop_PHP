<?php

namespace App\Models;

use App\Library\Database;

class User extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('user');
    }
    //Lấy danh sách user
    public function user_list($args = array())
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            if ($args['status'] == 'index') {
                $strwhere .= "status!='0'";
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
    public function user_row($args = array())
    {
        $strwhere = '';
        if (array_key_exists('status', $args)) {
            if ($args['status'] == 'index') {
                $strwhere .= "status!='0'";
            } else {
                $strwhere .= "status='" . $args['status'] . "'";
            }
        }
        if (array_key_exists('username', $args)) {
            if ($strwhere != '') {
                $strwhere .= " AND username='" . $args['username'] . "' ";
            }
        }
        if (array_key_exists('email', $args)) {
            if ($strwhere != '') {
                $strwhere .= " AND email='" . $args['email'] . "' ";
            }
        }

        if (array_key_exists('id', $args)) {
            if ($strwhere == '') {
                $strwhere .= "id='" . $args['id'] . "'";
            }
        }
        // 
        if (array_key_exists('password', $args)) {
            if ($strwhere != '') {
                $strwhere .= "AND password='" . $args['password'] . "'";
            }// else {
            //     $strwhere .= "AND password=' " . $args['password'] . "'";
            // }
        } 
        //$strwhere .= "id='" . $args['id'] . "'";
        //kiem tra bien
        if ($strwhere != '') {
            $strwhere = " WHERE " . $strwhere;
        }
        //echo $strwhere . "/////";
        $sql = "SELECT * FROM $this->table $strwhere LIMIT 1";
        //echo $sql;
        return $this->QueryOne($sql);
    }
    //Insert 1 mẫu tin
    public function user_insert($data)
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
    public function user_update($data, $id)
    {
        $strset = '';
        foreach ($data as $key => $value) {
            $strset .= $key . "='$value', ";
        }
        $strset = rtrim(rtrim($strset), ',');
        $sql = "UPDATE $this->table SET $strset WHERE id='$id'";
        //echo($sql);
        $this->SetQuery($sql);
    }
    //Update mẫu tin
    public function user_delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id='$id'";
        $this->SetQuery($sql);
    }
    //
    public function user_count($args = [])
    {
        $strWhere = "";
        $strSort = "";
        $strLimit = "";
        if ($args != null) {
            if (array_key_exists('status', $args)) {
                if ($args['status'] == 'index') {
                    $strWhere .= "status!= '0'";
                }
            } else {
                if ($args['status'] == 'trash') {
                    $strWhere .= "status='0'";
                } else {
                    $strWhere .= "status='" . $args['status'] . "'";
                }
            }
            ///
            if (array_key_exists('username', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "username='" . $args['username'] . "' ";
                } else {
                    $strWhere .= "username='" . $args['username'] . "' ";
                }
            }
            ///
            if (array_key_exists('email', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "email='" . $args['email'] . "' ";
                } else {
                    $strWhere .= "email='" . $args['email'] . "'";
                }
            }
            ///
            // if (array_key_exists('id', $args)) {
            //     if ($strWhere == '') {
            //         $strWhere .= "id='" . $args['id'] . "'";
            //     }
            // }
            if (array_key_exists('password', $args)) {
                if ($strWhere == "") {
                    $strWhere .= "password'" . $args['password'] . "'";
                } else {
                    $strWhere .= "AND password=' " . $args['password'] . "'";
                }
            } ////
            if (array_key_exists('not_id', $args)) {
                if ($strWhere == "") {
                    $strWhere . "id!='" . $args['not_id'] . "'";
                } else {
                    $strWhere .= "AND id!='" . $args['not_id'] . ".";
                }
            }
            //$strwhere .= "id='" . $args['id'] . "'";
            //kiem tra bien

        }
        if ($strWhere != '') {
            $strWhere = " WHERE " . $strWhere;
        }
        //echo $strwhere . "/////";
        $sql = "SELECT * FROM $this->table $strWhere LIMIT 1";
        //echo $sql;
        return $this->QueryOne($sql);
    }
}
