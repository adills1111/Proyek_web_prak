<?php
session_start();
$error = '';

$host = 'localhost';
$dbname = 'login';
$dbuser = 'root'; // Ganti dengan username database Anda
$dbpass = '';     // Ganti dengan password database Anda

// Koneksi ke database
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query untuk mendapatkan data pengguna (password langsung dicocokkan)
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Set session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Menyimpan role di session

        // Redirect berdasarkan role
        if ($user['role'] === 'admin') {
            header("Location: dashboard_admin.php");
        } elseif ($user['role'] === 'user') {
            header("Location: dashboard.html");
        } else {
            header("Location: dashboard.php");
        }
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMJ Sistem Informasi - Login</title>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <nav>
        <a href="index.html" aria-label="Logo Icon"><img src="img/logoo.png" style="width: 3rem;" alt="logo"></a>
    </nav>

    <section class="login-section">
        <div class="login-container">
            <h2>Login</h2>
            <!-- Form Login -->
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn login-btn">Login</button>

                <!-- Menampilkan pesan kesalahan jika login gagal -->
                <?php if (!empty($error)): ?>
                    <p style="color: red; margin-top: 10px;"><?php echo $error; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </section>
</body>

</html>

