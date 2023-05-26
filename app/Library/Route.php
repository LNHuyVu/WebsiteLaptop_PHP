<?php

namespace App\Library;

class Route
{
    function __construct($page = 'site')
    {
        if ($page == 'site') {
            $this->url_site(); //Gọi hàm trong lớp 
        } else {
            $this->url_admin();
        }
    }
    //Hàm tùy biến url của trang người dùng
    function url_site()
    {
        $pathView = "views/frontend/";
        //TH1: Không có option index.php
        if (!isset($_REQUEST["option"])) {
            if (isset($_REQUEST["search"])) {
                $pathView .= 'search.php';
            } else
                $pathView .= 'home.php';
        } else {
            $pathView .= $_REQUEST["option"];
            if (isset($_REQUEST["id"])) {
                $pathView .= '-detail.php';
            } else
            // {
            //     if (isset($_REQUEST["search"])) {
            //         $pathView .= '-search.php';
            //     }
            //     //Th2-2 có option và có cat
            //     {
            //         if (isset($_REQUEST["cat"])) {

            //             $pathView .= '-category.php';
            //         } else {
            //             $pathView .= '.php';
            //         }
            //     }
            // }
            // //Th2-2 có option và có cat
            {
                if (isset($_REQUEST["cat"])) {

                    $pathView .= '-category.php';
                } else {
                    $pathView .= '.php';
                }
            }
        }
        require_once($pathView);
    }
    //Hàm tùy biến
    function url_admin()
    {
        $pathView = "../views/backend/";
        //TH1: url không chua option
        if (!isset($_REQUEST["option"])) {
            $pathView .= 'dashboard/index.php'; //Thư mục
        } else {
            $pathView .= $_REQUEST["option"] . '/';
            if (isset($_REQUEST["cat"])) {
                $pathView .= $_REQUEST["cat"] . '.php';
            } else {
                $pathView .= 'index.php';
            }
        }
        //TH2: url có chua option 
        //
        require_once($pathView);
    }
}
