<?php
session_start();
    unset($_SESSION['usercustomer']);
    unset($_SESSION['usercustomerid']);
    unset($_SESSION['customerfullname']);
header("location:login.php");
