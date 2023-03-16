<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=($_POST["password"]); 
$nama=$_POST["nama"];

//Query input menginput data kedalam tabel user nya
  $sql="insert into user (username,password,Nama) values
		('$username','$password','$nama')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conf,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data";
	exit;
  }
else {
	echo "Gagal simpan data";
	exit;
}  

?>