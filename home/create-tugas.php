<?php
session_start();
if (isset($_SESSION['login_in'])){
?>

<!DOCTYPE html>
<html>
<title>TK Dahlia-Buat Tugas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <p></p>
  <h3 class="w3-bar-item">Menu</h3>
  <p></p>
  <a href="/tkdharma/home/dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="/tkdharma/home/buat-tugas.php" class="w3-bar-item w3-button">Membuat Tugas</a>
  <a href="/tkdharma/home/pembayaran.php" class="w3-bar-item w3-button">Penilaian</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-teal">
  <p></p>
  <h1>TK Dharma Bakti</h1>
  <p></p>
</div>
<p></p>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buat Tugas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Buat Tugas</h2>
  <p>Silahkan mengisi form dibawah ini untuk create tugas!</p>
  <form action="create-fungsi.php" method="POST" class="needs-validation" novalidate>
    <p></p>
    <div class="form-group">
      <label for="nama_tugas">Nama Tugas :</label>
      <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Nama Tugas" name="nama_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi Tugas :</label>
    <textarea type="text" class="form-control" id="deskripsi_tugas" placeholder="Masukkan Deskripsi Tugas" name="deskripsi_tugas" required rows="3"></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    <p></p>
    <div class="form-group">
      <label for="pwd">Start Tugas:</label>
      <input type="date" class="form-control" id="start_tugas" placeholder="Masukkan tanggal start tugas" name="start_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
    <div class="form-group">
      <label for="pwd">End Tugas:</label>
      <input type="date" class="form-control" id="end_tugas" placeholder="Masukkan tanggal end tugas" name="end_tugas" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
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