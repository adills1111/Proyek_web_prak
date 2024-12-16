<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ukm_db';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data
$sql = "SELECT * FROM pendaftaran";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran UKM</title>
    <link rel="stylesheet" href="css/stylepengurus.css">
</head>
<body>
    <header>
        <div class="navbar">
            <img src="img/logoo.png" alt="Logo HMJ" class="logo">
            <nav>
                <a href="dashboard_admin.php">Beranda</a>
                <a href="tentang_admin.php">Tentang</a>
                <a href="tampil_pendaftaran.php">Data Pendaftaran</a>
                <a class="btn-primary" href="login.php">Logout</a>
            </nav>
        </div>
    </header>
    <main>
        <section id="data-pendaftaran">
            <h1>Data Pendaftaran UKM</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Jenis UKM</th>
                        <th>Tanggal Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Cek jika ada data di database
                    if ($result->num_rows > 0) {
                        // Menampilkan data
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['jenis_kelamin'] . "</td>";
                            echo "<td>" . $row['program_studi'] . "</td>";
                            echo "<td>" . $row['jenis_ukm'] . "</td>";
                            echo "<td>" . $row['tanggal_pendaftaran'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <div>
            <a href="/"><img src="img/logoo.png" alt="icon" style="width: 3rem;" class="logo"></a>
        </div>
        <div class="menu">
            <p>&copy; Adilla Nurul Insaniya</p>
        </div>
    </footer>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
