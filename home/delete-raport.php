<?php
include "../koneksi.php";
if(isset($_GET['id'])){
    $deleteSql = mysqli_query($conf, "DELETE FROM raport WHERE id_rapor='$_GET[id]'");
    if($deleteSql){
        echo"<script type='text/javascript'>alert('Raport Berhasil di Hapus!!'); location.href=\"raport.php\"
        ;</script>";
    }
}
?>