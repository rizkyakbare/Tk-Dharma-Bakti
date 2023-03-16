<?php
include "../koneksi.php";
if(isset($_POST['create'])){
    $insertSql = mysqli_query($conf, "INSERT into raport (id_rapor, noinduk_siswa, cat_rapor, nilai_huruf) 
    values('$_POST[id_rapor]', '$_POST[noinduk_siswa]','$_POST[cat_rapor]', '$_POST[nilai_huruf]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Data Raport Berhasil di Simpan!!'); location.href=\"raport.php\"
        ;</script>";
    }

}

?>