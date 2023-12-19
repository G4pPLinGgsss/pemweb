<?php
// Lakukan validasi input disini jika diperlukan
// Selanjutnya, Anda dapat menyimpan data ke dalam database

// Contoh koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran_siswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>