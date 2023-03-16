<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="container">
            <h4 class="text-center">Form Pendaftaran</h4>
            <form action="simpan.php" method="POST">
                <hr>
                <div class="form-group">
                <label for="nama">Nama :</label>
                    <input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="username">Username :</label>
                    <input type="username" class="form-control" id="username" placeholder="Masukkan username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
            </div>
            <button class="text-center" type="submit" name="login" class="btn btn-primary">Daftar</button>
          <p></p>
          <a href="login.php"><p><button type="button" class="btn btn-secondary btn-sm">Kembali</button></p></a>

            </form>

</body>
</html>


