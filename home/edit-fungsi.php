<?php
include "../koneksi.php";
if (isset($_POST['edit'])){
    $updateSql = mysqli_query($conf, "UPDATE tugas_prakarya SET nama_tugasprak='$_POST[nama_tugasprak]', deskripsi_tugasprak='$_POST[deskripsi_tugasprak]', 
    start_tugas='$_POST[start_tugas]', end_tugas='$_POST[end_tugas]' WHERE id_tugas='$_POST[id_tugas]'");
if ($updateSql){
    echo"<script type='text/javascript'>alert('Tugas Berhasil di Edit!!'); location.href=\"buat-tugas.php?id=$id_tugasprak\"
    ;</script>";
}

}
?>