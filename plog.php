<!-- Proses Login -->
<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    if ($action == "login") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            header("Location: profil.php");
        } else {
            echo "<script>alert('Email atau password salah!'); window.location='index.php';</script>";
        }
    }
}
?>
