<?php
session_start();
if(isset($_SESSION['login_in'])){
include "../koneksi.php";
if(isset($_GET['id'])){
  $tampiltgs = mysqli_query($conf, "SELECT * FROM raport WHERE id_rapor = '$_GET[id]'");
  $tugas = mysqli_fetch_array($tampiltgs);
}
?>

<!DOCTYPE html>
<html>
<title>TK Dharma Bakti-Edit Tugas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <p></p>
  <h3 class="w3-bar-item">Menu</h3>
  <p></p>
  <a href="/tkdharma/home/dashboard.php" class="w3-bar-item w3-button">Dashboard</a>
  <a href="/tkdharma/home/daftarsiswa.php" class="w3-bar-item w3-button">Formulir Pendaftaran</a>
  <a href="/tkdharma/home/.php" class="w3-bar-item w3-button">Pembayaran</a>
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
  <title>Edit Raport</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Raport</h2>
  <p>Silahkan mengisi form dibawah ini untuk edit rapor!</p>
  <form action="edit-fungsi.php" method="POST" class="needs-validation" novalidate>
    <p></p>
    <div class="form-group">
      <label for="id_rapor">ID Raport :</label>
      <input type="text" class="form-control" id="id_rapor" placeholder="Masukkan Id Raport" name="id_rapor" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
        <p></p>
    <div class="form-group">
      <label for="noinduk_siswa">No Induk Siswa :</label>
      <input type="text" class="form-control" id="noinduk_siswa" placeholder="Masukkan No Induk Siswa" name="noinduk_siswa" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
        <p></p>
    <div class="form-group">
      <label for="cat_rapor">Catatan Raport :</label>
      <input type="text" class="form-control" id="cat_rapor" placeholder="Masukkan Nama Tugas" name="cat_rapor" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
        <p></p>
    <div class="form-group">
      <label for="nilai_huruf">Nilai Huruf :</label>
      <input type="text" class="form-control" id="nilai_huruf" placeholder="Masukkan Nama Tugas" name="nilai_huruf" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p></p>
    <button type="submit" class="btn btn-primary" name="edit">Submit</button>
    <input type="hidden" name="id_rapor" value="<?php echo $raport['id_rapor']; ?>">
    <p></p>
    <a href="raport.php"><p><button type="button" class="btn btn-secondary btn-sm">Kembali</button></p></a>
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