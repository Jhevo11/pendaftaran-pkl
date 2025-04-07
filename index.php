<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Teks di Tengah -->
    <h1>Selamat Datang di Sarastya Technology</h1>
    <p>Bergabunglah dalam program PKL di Sarastya Technology dan dapatkan pengalaman nyata di industri teknologi.<br>
        <!-- Daftar sekarang, pilih posisi yang sesuai, dan mulai perjalanan magang Anda bersama kami!<br> -->
        Klik tombol di bawah untuk login atau daftar dan jadilah bagian dari inovasi bersama Sarastya Technology!</p>

    <!-- Tombol Login & Register -->
    <div class="log">
        <a href="#login" class="btn">Login</a>
        <a href="#register" class="btn">Daftar</a>
    </div>

    <!-- Popup Login -->
    <div id="login" class="popup">
        <div class="popup-content">
            <a href="#" class="close">&times;</a>
            <h2>Login</h2>
            <form action="plog.php" method="POST">
                <input type="hidden" name="action" value="login">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Popup Register -->
    <div id="register" class="popup">
        <div class="popup-content">
            <a href="#" class="close">&times;</a>
            <h2>Register</h2>
            <form action="preg.php" method="POST">
                <input type="hidden" name="action" value="register">
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="full_name" placeholder="Nama Lengkap" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="text" name="phone" placeholder="Nomor Telepon" required>
                <input type="date" name="birthdate" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

</body>
</html>
