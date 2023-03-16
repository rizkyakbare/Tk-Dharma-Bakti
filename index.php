<?php
include "koneksi.php";
session_start();
$login = $_SESSION['login'];
if($login == "user"){
    header("location:home/dashboard.php");
} else {
    header("location:login.php");
}
?>