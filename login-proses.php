<?php
include "koneksi.php";
session_start();
if (isset ($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conf, "SELECT * FROM user WHERE username ='$username' AND password = '$password'");
    if (mysqli_num_rows($query) !== 0){
        $get = mysqli_fetch_array($query);
        $nama = $get['username'];
        $_SESSION['Nama'] = $nama;
        $_SESSION['login_in'] = $username;
        if($username == "user"){
            echo "<script type='text/javascript'>alert('Selamat Datang $nama di web TK Dharma Bakti'); 'location: dashboard.php'
            ;</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Gagal!! Silahkan cek data terlebih dahulu'); location.href=\"login.php\"
        ;</script>";
    }
} else {
  echo "<script type='text/javascript'>alert('Selamat Datang di web TK Dharma Bakti'); location.href=\"home/dashboard.php\"
            ;</script>";
  
}
?>