<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMJ Sistem Informasi</title>
    <link rel="stylesheet" href="css/style1.css">
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
        <section class="hero">
            <div class="welcome">
                <span class="welcome-message">Selamat Datang di Website</span>
                <h1>Sistem Informasi Sport</h1>
                <p>Temukan informasi terbaru, termasuk berita dan kegiatan olahraga yang diadakan oleh 
                 Mahasiswa Jurusan Sistem Informasi. Lihat perkembangan terkini, serta 
                ikuti kita terusss.</p>
                <div class="cta">
                    <a class="btn-primary" href="pendaftaran.html">Ayo Bergabung!</a>
                </div>
        </section>
        <section id="ukm">
            <h1>Temukan Bakat & Minat Kamu Disini</h1>
            <p>
                Di SISFO SPORT, kami menawarkan beragam pilihan kegiatan yang sesuai dengan minat dan bakat Kamu. Dengan berbagai pilihan SPORT yang tersedia, kami yakin Kamu akan menemukan tempat yang sesuai untuk berkembang dan berkontribusi.
            <div class="list-ukm">
                <div class="card">
                    <h2>Sisfo camp</h2>
                    <img src="img/camp.jpeg" alt="Sisfo camp">
                    <p>Berbagi pengalaman bersama keluarga besar hmj-si</p>
                </div>
                <div class="card">
                    <h2>Sisfo sehat</h2>
                    <img src="img/sehat.jpg" alt="sisfo sehat">
                    <p>berolahraga setiap sabtu mengadakan lari, jalan, dan juga senam.</p>
                </div>
                <div class="card">
                    <h2>futsal</h2>
                    <img src="img/sport.jpeg" alt="futsal">
                    <p>Latih tubuh, latih jiwa, wujudkan kekuatan dan ketangguhan.</p>
                </div>
                <div class="card">
                    <h2>badminton</h2>
                    <img src="img/badmintoon.jpeg" alt="badminton">
                    <p>Gerakkan jiwa, ungkapkan emosi melalui gerakan indah tubuh.</p>
                </div>
            </div>
        </section>
        <section>
        <h1 style="text-align: center;">Keanggotaan/h1>
        <div class="chart">
            <div class="card">
                <img src="img/ai.jpeg" alt="badminton">
                <h2>Ketua</h2>
                <p>Leader of the organization</p>
            </div>
            <div class="card">
                <img src="img/hijab.jpeg" alt="badminton">
                <h2>Sekretaris</h2>
                <p>Handles administrative tasks</p>
            </div>
            <div class="card">
                <img src="img/kucing.jpeg" alt="badminton">
                <h2>Bendahara</h2>
                <p>Manages finances</p>
            </div>
            <div class="card">
                <img src="img/profil.jpeg" alt="badminton">
                <h2>Koor Sisfo Camp</h2>
                <p>Coordinates camp activities</p>
            </div>
            <div class="card">
                <img src="img/ai.jpeg" alt="badminton">
                <h2>Koor Sisfo Sehat</h2>
                <p>Organizes health programs</p>
            </div>
            <div class="card">
                <img src="img/kucing.jpeg" alt="badminton">
                <h2>Koor Futsal</h2>
                <p>Oversees futsal events</p>
            </div>
            <div class="card">
                <img src="img/hijab.jpeg" alt="badminton">
                <h2>Koor Badminton</h2>
                <p>Manages badminton activities</p>
            </div>
        </div>
    </section>
    
    </main>
    <footer> 
        <div>
            <a href="/"><img src="img/logoo.png" alt="icon" style="width: 3rem;" class="logo"></a>
        </div>
        <div class="menu">
            <p>&copy; Adilla Nurul Insaniya</p>
        </div>
        <div class="sosmed">
            <a href="#" aria-label="facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
            <a href="#" aria-label="instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            <a href="#" aria-label="twitter/x"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
            <a href="#" aria-label="youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></a>
            <a href="#" aria-label="tiktok"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg></a>
        </div>
    </footer>
</body>
</html>
?>