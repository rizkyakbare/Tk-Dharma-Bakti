<?php
include "../koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html>
<title>TK DHARMA BAKTI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="/tkdharma/home/dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="/tkdharma/home/siswa.php" class="w3-bar-item w3-button">Menerima Pendaftaran</a>
  <a href="/tkdharma/home/pembayaran.php" class="w3-bar-item w3-button">Pembayaran</a>
  <a href="/tkdharma/home/buat-tugas.php" class="w3-bar-item w3-button">Buat Tugas</a>
  <a href="/tkdharma/home/nilaiharian.php" class="w3-bar-item w3-button">Penilaian Tugas</a>
  <a href="/tkdharma/home/raport.php" class="w3-bar-item w3-button">Raport Siswa</a>
  <a href="/tkdharma/logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-red">
  <h1>TK DHARMA BAKTI</h1>
</div>



<div class="w3-container">
<h2>Selamat Datang di Dashboard TK DHARMA BAKTI</h2>
<p></p>
<p></p>
</div>

</div>
      
</body>
</html>