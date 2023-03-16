<?php
include "../koneksi.php";
session_start();
$tampil = mysqli_query($conf, "SELECT * FROM nilai_harian");
?>
<!DOCTYPE html>
<html>
<title>TK Dharma Bakti</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <p></p>
  <h3 class="w3-bar-item">Menu</h3>
  <p></p>
  <a href="/tkdharma/home/dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="/tkdharma/home/siswa.php" class="w3-bar-item w3-button">Menerima Pendaftaran</a>
  <a href="/tkdharma/home/pembayaran.php" class="w3-bar-item w3-button">Pembayaran</a>
  <a href="/tkdharma/home/buat-tugas.php" class="w3-bar-item w3-button">Buat Tugas</a>
  <a href="/tkdharma/home/.php" class="w3-bar-item w3-button">Penilaian Tugas</a>
  <a href="/tkdharma/home/raport.php" class="w3-bar-item w3-button">Raport Siswa</a>
  <a href="/tkdharma/logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-red">
  <p></p>
  <h1>TK Dharma Bakti</h1>
  <p></p>
  <p></p>
</div>
<p></p>
<p></p>
<p></p>
<p></p>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Penilaian Harian</h2>      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Nilai Harian</th>
        <th>No Induk Siswa</th>
        <th>Tanggal Ambil Nilai</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        while($r=mysqli_fetch_array($tampil)){
            echo "<tr>
                        <td>$no</td>
                        <td>$r[id_nilai_harian]</td>
                        <td>$r[noinduk_siswa]</td>
                        <td>$r[tgl_ambil_nilai]</td>
                        <td>
                        <a href='detail_nilai.php?id=$r[id_nilai_harian]'><button type='button' class='btn btn-success btn-sm'>Detail Nilai</button></a>
                        </td>
                </tr>";
        $no++;
        }
        ?>
    </tbody>
</div>

</body>
</html>



</body>
</html>


