<?php
// db.php
$host = "localhost";      // biasanya localhost
$user = "root";           // username default XAMPP adalah root
$password = "";           // password default XAMPP biasanya kosong
$database = "e_meeting";  // nama database kamu

// Buat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
