<?php
$host = "localhost"; // nama host database
$username = "root"; // username untuk mengakses database
$password = ""; // password untuk mengakses database
$database = "db_bbsp"; // nama database yang ingin diakses

// membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// mengecek apakah koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
?>
