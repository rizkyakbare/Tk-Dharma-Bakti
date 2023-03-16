<?php
include "../koneksi.php";
if(isset($_POST['create'])){
    $insertSql = mysqli_query($conf, "INSERT into tugas_prakarya (id_tugasprak, nama_tugasprak, deskripsi_tugasprak, start_tugas, end_tugas) 
    values('$_POST[id_tugasprak]', '$_POST[nama_tugasprak]','$_POST[deskripsi_tugasprak]',
    '$_POST[start_tugas]' ,'$_POST[end_tugas]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Tugas Berhasil di Simpan!!'); location.href=\"buat-tugas.php\"
        ;</script>";
    }

}

?>