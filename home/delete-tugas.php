<?php
include "../koneksi.php";
if(isset($_GET['id'])){
    $deleteSql = mysqli_query($conf, "DELETE FROM tugas_prakarya WHERE id_tugasprak='$_GET[id]'");
    if($deleteSql){
        echo"<script type='text/javascript'>alert('Tugas Berhasil di Hapus!!'); location.href=\"buat-tugas.php\"
        ;</script>";
    }
}
?>