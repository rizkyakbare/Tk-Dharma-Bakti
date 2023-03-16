<?php
session_start();
if (isset($_SESSION['login_in'])){
?>

<!DOCTYPE html>
<html>
<title> TK Dharma Bakti </title>
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
</div>
<p></p>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Isi Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Isi Data</h2>
  <p>Silahkan mengisi form dibawah ini untuk pendaftaran siswa!</p>
  <form action="create-fungsi.php" method="POST" class="needs-validation" novalidate>
    <p></p>
    <div class="form-group">
      <label for="nama_tugas">No Induk :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan No Induk" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
        <p></p>
    <div class="form-group">
      <label for="nama_tugas">NIK Wali Murid :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan NIK" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     <p></p>
     <p></p>
    <div class="form-group">
      <label for="nama_tugas">Nama Lengkap :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Nama Siswa" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     <p></p>
    <div class="form-group">
      <label for="nama_tugas">Jenis Kelamin :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Jenis Kelamin" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     <p></p>
    <div class="form-group">
      <label for="nama_tugas">Tanggal Lahir :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Tanggal Lahir" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
    <div class="form-group">
      <label for="pwd">Tanggal Masuk:</label>
      <input type="date" class="form-control" id="start_tugas" placeholder="Masukkan tanggal masuk" name="start_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
        <div class="form-group">
      <label for="pwd">Tanggal Lulus:</label>
      <input type="date" class="form-control" id="end_tugas" placeholder="Masukkan tanggal lulus" name="end_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
         <p></p>
    <div class="form-group">
      <label for="nama_tugas">Alamat :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Alamat Lengkap" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
        <p></p>
    <div class="form-group">
      <label for="nama_tugas">Anak Ke :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Anak ke" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary" name="create">Submit</button>
    <p></p>
    <a href="buat-tugas.php"><p><button type="button" class="btn btn-secondary btn-sm">Kembali</button></p></a>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
<?php
} else {
  header("location:../index.php");
}
?>