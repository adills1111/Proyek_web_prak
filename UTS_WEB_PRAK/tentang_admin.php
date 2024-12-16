<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tentang UKM-SISFO SPORT</title>
</head>
<body>
    <header>
        <div class="navbar">
            <img src="img/logoo.png" alt="Logo HMJ" class="logo">
            <nav>
                <a href="dashboard_admin.html">Beranda</a>
                <a href="tentang_admin.html">Tentang</a>
                <a href="tampil_pendaftaran.php">Data Pendaftaran</a>
                <a class="btn-primary" href="Login.php">Login</a>
            </nav>
        </div>
    </header>

    <main>
        <section id="tentang">
            <h1>Temukan Bakat & Minat Kamu Disini</h1>
            <p>
                Di SISFO SPORT, kami menawarkan beragam pilihan kegiatan yang sesuai dengan minat dan bakat Kamu. Dengan berbagai pilihan SPORT yang tersedia, kami yakin Kamu akan menemukan tempat yang sesuai untuk berkembang dan berkontribusi.
            </p>
            <div class="list-ukm">
    <table>
        <thead>
            <tr>
                <th>Kegiatan</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sisfo Camp</td>
                <td><img src="img/camp.jpg" alt="Sisfo Camp" class="activity-img"></td>
                <td>Berbagi pengalaman bersama keluarga besar hmj-si.</td>
                <td>
                    <button class="btn-edit" onclick="editActivity('Sisfo Camp')">Edit</button>
                    <button class="btn-delete" onclick="deleteActivity('Sisfo Camp')">Hapus</button>
                </td>
            </tr> 
            <tr>
                <td>Sisfo Sehat</td>
                <td><img src="img/sehat.jpg" alt="Sisfo Sehat" class="activity-img"></td>
                <td>Berolahraga setiap sabtu mengadakan lari, jalan, dan juga senam.</td>
                <td>
                    <button class="btn-edit" onclick="editActivity('Sisfo Sehat')">Edit</button>
                    <button class="btn-delete" onclick="deleteActivity('Sisfo Sehat')">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Futsal</td>
                <td><img src="img/sport.jpg" alt="Futsal" class="activity-img"></td>
                <td>Latih tubuh, latih jiwa, wujudkan kekuatan dan ketangguhan.</td>
                <td>
                    <button class="btn-edit" onclick="editActivity('Futsal')">Edit</button>
                    <button class="btn-delete" onclick="deleteActivity('Futsal')">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Badminton</td>
                <td><img src="img/badmintoon.jpg" alt="Badminton" class="activity-img"></td>
                <td>Gerakkan jiwa, ungkapkan emosi melalui gerakan indah tubuh.</td>
                <td>
                    <button class="btn-edit" onclick="editActivity('Badminton')">Edit</button>
                    <button class="btn-delete" onclick="deleteActivity('Badminton')">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
async function loadActivities() {
    const response = await fetch('api.php?action=get'); // Fetch data dari PHP
    const activities = await response.json();
    const tableBody = document.getElementById('activity-table');
    tableBody.innerHTML = ''; // Bersihkan tabel sebelum diisi ulang

    activities.forEach(activity => {
        const row = `
            <tr>
                <td>${activity.name}</td>
                <td><img src="${activity.image}" alt="${activity.name}" class="activity-img"></td>
                <td>${activity.description}</td>
                <td>
                    <button class="btn-edit" onclick="editActivity(${activity.id})">Edit</button>
                    <button class="btn-delete" onclick="deleteActivity(${activity.id})">Hapus</button>
                </td>
            </tr>
        `;
        tableBody.innerHTML += row;
    });
}

async function createActivity() {
    const name = prompt('Masukkan nama kegiatan:');
    const image = prompt('Masukkan URL gambar:');
    const description = prompt('Masukkan deskripsi:');

    if (name && image && description) {
        const response = await fetch('api.php?action=create', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, image, description })
        });
        if (response.ok) {
            alert('Berhasil menambahkan kegiatan.');
            loadActivities(); // Refresh data
        } else {
            alert('Gagal menambahkan kegiatan.');
        }
    }
}

async function deleteActivity(activityId) {
    if (confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')) {
        const response = await fetch('api.php?action=delete', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id: activityId })
        });
        if (response.ok) {
            alert('Berhasil menghapus kegiatan.');
            loadActivities(); // Refresh data
        } else {
            alert('Gagal menghapus kegiatan.');
        }
    }
}

// Load activities saat halaman dimuat
document.addEventListener('DOMContentLoaded', loadActivities);
</script>
</script>

    </main>

    <footer> 
        <div>
            <a href="/"><img src="images/icon.png" alt="icon" style="width: 3rem;" class="logo"></a>
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
