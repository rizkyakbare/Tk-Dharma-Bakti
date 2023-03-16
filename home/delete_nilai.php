<?php
include "../koneksi.php";
if(isset($_GET['id'])){
    $deleteSql = mysqli_query($conf, "DELETE FROM kriteria_nilai_harian WHERE id_kriteria_harian='$_GET[id]'");
    if($deleteSql){
        echo"<script type='text/javascript'>alert('Berhasil di Hapus!!'); location.href=\"detail_nilai.php\"
        ;</script>";
    }
}
?>