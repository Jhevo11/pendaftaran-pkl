<!-- Proses Register -->
<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    if ($action == "register") {
        $username = $_POST["username"];
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $phone = $_POST["phone"];
        $birthdate = $_POST["birthdate"];

        $query = "INSERT INTO users (username, full_name, email, password, phone, birthdate) 
                  VALUES ('$username', '$full_name', '$email', '$password', '$phone', '$birthdate')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal registrasi!'); window.location='index.php';</script>";
        }
    }
}
?>
