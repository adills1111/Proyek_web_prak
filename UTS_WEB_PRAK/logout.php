<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();
session_destroy();

// Menampilkan pesan dan mengarahkan kembali ke halaman login
echo "<script>
    alert('Anda telah keluar.');
    window.location.href = 'login.php';
</script>";
exit;
?>
