<?php
include "../koneksi.php";
if(isset($_POST['create'])){
    $insertSql = mysqli_query($conf, "INSERT into kriteria_nilai_harian (id_kriteria_harian, nama_kriteria_harian, nilai) 
    values('$_POST[id_kriteria_harian]', '$_POST[nama_kriteria_harian]','$_POST[nilai]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Berhasil di Simpan!!'); location.href=\"detail_nilai.php\"
        ;</script>";
    }

}

?>