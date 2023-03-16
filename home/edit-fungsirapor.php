<?php
include "../koneksi.php";
if (isset($_POST['edit'])){
    $updateSql = mysqli_query($conf, "UPDATE raport SET noinduk_siswa='$_POST[noinduk_siswa]', cat_rapor='$_POST[cat_rapor]', 
    nilai_huruf='$_POST[nilai_huruf]' WHERE id_rapor='$_POST[id_rapor]'");
if ($updateSql){
    echo"<script type='text/javascript'>alert('Tugas Berhasil di Edit!!'); location.href=\"raport.php\"
    ;</script>";
}

}
?>