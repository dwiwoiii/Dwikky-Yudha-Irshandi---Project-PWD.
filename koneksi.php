<?php
$host = "localhost"; // Ganti dengan nama host Anda
$user = "root"; // Ganti dengan username database Anda
$pass = ""; // Ganti dengan password database Anda
$db   = "db_users"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
} 

?>
