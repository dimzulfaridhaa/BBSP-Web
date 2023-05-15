<?php
session_start();
include 'koneksi.php';

// Mengambil nilai yang dikirimkan dari form
$id = $_SESSION['id'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$email = $_POST['email'];

// Query UPDATE
$sql = "UPDATE tb_masyarakat SET nama = '$nama', email = '$email', no_telepon = '$no_telepon' WHERE id_masyarakat = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['no_telepon'] = $no_telepon;
    // Mengalihkan pengguna ke halaman profil setelah update berhasil
    header("Location: ../profile.php"); // Ganti profil.php dengan halaman profil yang sesuai
    exit();
} else {
    echo "Gagal memperbarui data!";
}

?>