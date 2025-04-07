<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $full_name = $_POST["full_name"];
    $phone = $_POST["phone"];
    $birthdate = $_POST["birthdate"];
    $email = $_SESSION["user"]["email"];

    $query = "UPDATE users SET username='$username', full_name='$full_name', phone='$phone', birthdate='$birthdate' WHERE email='$email'";
    if (mysqli_query($conn, $query)) {
        $_SESSION["user"]["username"] = $username;
        $_SESSION["user"]["full_name"] = $full_name;
        $_SESSION["user"]["phone"] = $phone;
        $_SESSION["user"]["birthdate"] = $birthdate;
        echo "<script>alert('Profil berhasil diperbarui!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="profil.css"> <!-- Menghubungkan ke file CSS -->
</head>
<body>
    <div class="profile-container">
        <h2>Profil Pengguna</h2>
	<p>Selamat datang, <?php echo $_SESSION["user"]["full_name"]; ?> (@<?php echo $_SESSION["user"]["username"]; ?>)</p>
        <form method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION["user"]["username"]; ?>" required>
            </div>

            <div class="input-group">
                <label for="full_name">Nama Lengkap</label>
                <input type="text" id="full_name" name="full_name" value="<?php echo $_SESSION["user"]["full_name"]; ?>" required>
            </div>

            <div class="input-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" value="<?php echo $_SESSION["user"]["phone"]; ?>" required>
            </div>

            <div class="input-group">
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" id="birthdate" name="birthdate" value="<?php echo $_SESSION["user"]["birthdate"]; ?>" required>
            </div>

            <button type="submit">Simpan Perubahan</button>
            <a href="logout.php" class="logout">Logout</a>
        </form>
    </div>
</body>
</html>