<?php
session_start(); // memulai session

include "koneksi.php"; // panggil file koneksi.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // cek apakah email dan password kosong
    if (empty($email) || empty($password)) {
        header("Location: ../login.html?error=emptyfields");
        exit();
    } else {
        // query untuk memilih data dari tabel tb_masyarakat
        $sql = "SELECT * FROM tb_masyarakat WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            
            // jika password yang dimasukkan sama dengan password pada database
            if (($password == $row['password'])) {
                $_SESSION['id'] = $row['id']; // set session id
                $_SESSION['email'] = $row['email']; // set session email
                $_SESSION['nama'] = $row['nama']; // set session email
                $_SESSION['no_telepon'] = $row['no_telepon']; // set session email
                header("Location: ../beranda.html");
                exit();
            } else {
                $_SESSION['gagal'] = 'gagal';
                header("Location: ../login.php");
                exit();
            }
        } else {
            $_SESSION['gagal'] = 'gagal';
            header("Location: ../login.php");
            exit();
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>
