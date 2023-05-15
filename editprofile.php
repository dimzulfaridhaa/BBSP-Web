<?php
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Edit Profil Saya</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="editprofile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
</head>

<body class="zz">
  <nav class="navbar navbar-expand-lg navbar-dark  editprofile">
    <a class="navbar-brand" href="profile.php">
      <i class="bi bi-arrow-left-circle display-6 "></i>

    </a>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 text-center">
        <img src="img/profile.png" alt="Profil Picture" class="img-fluid rounded-circle mx-auto d-block"
          style="max-width: 200px; max-height: 200px;">
        <div class="mt-3">
          <label class="btn btn-primary">
            Choose File<input type="file" id="fotoProfil" name="fotoProfil" style="display: none; margin-top: 10px;">
          </label>
        </div>
      </div>


      <div class="col-sm-12 col-md-6">
        <form method="POST" action="auth/edit_profile_proses.php">
          <div class="form-group">
            <label for="email">Nama</label>
            <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama Anda"
              value="<?php echo $_SESSION['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda"
              value="<?php echo $_SESSION['email']; ?>">
          </div>
          <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="tel" class="form-control" id="telepon" name="no_telepon"
              placeholder="Masukkan nomor telepon Anda" value="<?php echo $_SESSION['no_telepon']; ?>">
          </div>

          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>