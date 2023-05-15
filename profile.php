<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="profile.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark  profile">
    <div class="container-fluid">
      <a class="navbar-brand" href="beranda.html">
        <i class="bi bi-arrow-left-circle display-6 "></i>
      </a>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="profile-picture">
          <img src="img/profile.png" alt="Profile Picture">
        </div>
        <h2 class="profile-name">
          <?php echo $_SESSION['nama']; ?>
        </h2>

        <p class="profile-contact">
          <?php echo $_SESSION['no_telepon']; ?>
        </p>
        <div class="profile-buttons">
          <a href="editprofile.php" class="btn btn-success col-md-6">Edit Profile</a>
          <a href="syaratketentuan.html" class="btn btn-primary col-md-6">Syarat dan Ketentuan</a>
          <a href="login.php" class="btn btn-danger col-md-6">Keluar</a>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>