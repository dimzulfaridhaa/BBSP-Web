<?php
include 'koneksi.php';
// Cek apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Mengambil data dari formulir
  $nama = $_POST['nama'];
  $telepon = $_POST['telepon'];
  $email = $_POST['email'];
  $password = $_POST['password']; // Enkripsi password menggunakan fungsi password_hash()

  // Validasi data
  $errors = [];
  if (empty($nama)) {
    $errors[] = 'Nama lengkap harus diisi';
  }
  if (empty($telepon)) {
    $errors[] = 'Nomor telepon harus diisi';
  }
  if (empty($email)) {
    $errors[] = 'Alamat email harus diisi';
  }
  if (empty($password)) {
    $errors[] = 'Password harus diisi';
  } else if (strlen($password) < 6) {
    $errors[] = 'Password harus memiliki setidaknya 6 karakter';
  }

  // Jika tidak ada error, simpan data ke database
  if (empty($errors)) {

    // Kode untuk menyimpan data ke database
    $query = "INSERT INTO tb_masyarakat (nama, no_telepon, email, password) VALUES ('$nama', '$telepon', '$email', '$password')";
    $result = mysqli_query($conn, $query);

    // Jika data berhasil disimpan, redirect ke halaman login
    if ($result) {
      header('Location: ../login.html');
      exit;
    } else {
      $errors[] = 'Terjadi kesalahan saat menyimpan data ke database';
    }
  }
}
?>

<!-- Tampilkan pesan error jika ada -->
<?php if (!empty($errors)) : ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error) : ?>
        <li><?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
