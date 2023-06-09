<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
      
  </head>
  <body>
    <section class="min-vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="img/Logo 1.svg" class="img-fluid rounded mx-auto d-block" alt="Sample image" />
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="auth/auth.php" method="post">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-1">
                <p class="lead fw-normal mb-sm-0 me-3 fw-bold fs-1">Masuk</p>
              </div>
              <div>
                <p class="lead fw-normal mb-4 me-3">Login jika ingin masuk</p>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-1">
                <label class="form-label mx-3" for="form3Example3">Email Address</label>
                <input type="email" id="form3Example3" class="form-control form-control-lg mb-1" placeholder="Email anda" name="email" />
              </div>

              <!-- Password input -->
              <div class="form-outline my-3">
                <label class="form-label mx-3" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control form-control-lg mb-1" placeholder="Password anda" name="password" />
                <label class="form-label tampil-pasword mx-1" for="form3Example4">Tampilkan Password</label>
                <span class="password-toggle-icon icontoggle" onclick="togglePasswordVisibility()"><i class="bi bi-eye-slash"></i></span>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3"> Ingat akun ini </label>
                </div>
                <a href="ganti password.html" class="text-body text-decoration-none">Lupa password?</a>
              </div>

              <div class="text-center text-lg-start mt-3 pt-2">
                <button type="submit" class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem">Login</button>
                <p class="small mt-3 pt-1 mb-0">Belum memiliki akun ? <a href="daftar.html" class="fw-bold text-black" style="text-decoration: none">Daftar</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php  
  if(isset($_SESSION['gagal'])):
?>
  <script>
    alert("Password salah. Silakan coba lagi.");
  </script>
<?php
unset($_SESSION['gagal']);
  endif;
?>

    <script>
      function togglePasswordVisibility() {
        var passwordInput = document.getElementById("form3Example4");
        var passwordToggleIcon = document.querySelector(".password-toggle-icon i");

        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          passwordToggleIcon.classList.remove("bi-eye-slash");
          passwordToggleIcon.classList.add("bi-eye");
        } else {
          passwordInput.type = "password";
          passwordToggleIcon.classList.remove("bi-eye");
          passwordToggleIcon.classList.add("bi-eye-slash");
        }
      }

    </script>
  </body>
</html>
