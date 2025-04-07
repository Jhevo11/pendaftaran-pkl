<?php
$host = "localhost";
$user = "root";  // Sesuaikan dengan user MySQL kamu
$pass = "";  // Sesuaikan dengan password MySQL kamu
$db = "pkl_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi Berhasil!!";
}
?>
