<?php
session_start();

// Hancurkan semua data session
session_destroy();

// Arahkan langsung keluar ke halaman login utama (naik 1 tingkat ke folder root)
echo "<script>
    alert('Logout Berhasil');
    window.location.href = '../index.php';
</script>";
exit();
