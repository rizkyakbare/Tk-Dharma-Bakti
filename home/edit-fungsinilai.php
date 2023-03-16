<?php
include "../koneksi.php";
if (isset($_POST['edit'])){
    $updateSql = mysqli_query($conf, "UPDATE kriteria_nilai_harian SET nama_kriteria_harian='$_POST[nama_kriteria_harian]', nilai='$_POST[nilai]' WHERE id_kriteria_harian='$_POST[id_kriteria_harian]'");
if ($updateSql){
    echo"<script type='text/javascript'>alert('Berhasil di Edit!!'); location.href=\"detail_nilai.php\"
    ;</script>";
}

}
?>