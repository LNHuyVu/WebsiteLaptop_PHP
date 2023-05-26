<?php

namespace App\Library;

use App\Library\Config;
use mysqli;

class Database extends Config
{
    private $conn = null;
    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        $this->conn->set_charset("utf8");
    }
    //Xử lí tiền tố bảng
    protected function TableName($name)
    {
        return $this->prefix . $name;
    }
    //Truy vấn trả về nhiều mẫu tin
    protected function QueryAll($sql)
    {
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    //Truy vấn trả về một mẫu tin
    protected function QueryOne($sql)
    {
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    //Truy vấn trả về nhiều mẫu tin
    protected function QueryCount($sql)
    {
        $result = $this->conn->query($sql);
        return $result->num_rows;
    }
    //Truy vấn trả về nhiều mẫu tin
    protected function SetQuery($sql)
    {
        $this->conn->query($sql);
    }
}
