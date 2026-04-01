<?php
session_start();

if($_SESSION['role'] != "kasir"){
    echo "<script>alert('Akses ditolak'); window.location='login1.php';</script>";
    exit();
}
?>

<script>
alert("Selamat Datang Kasir! 👑");
</script>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand">Kasir Sekolah</a>

    <div class="navbar-nav">
        <a class="nav-link" href="#">Dashboard</a>
        <a class="nav-link" href="#">Transaksi</a>
        <a class="nav-link" href="#">Data Barang</a>
        <a class="nav-link" href="#">Laporan</a>
    </div>

    <div class="ms-auto">
        <span>User</span>
        <a href="logout.php" class="btn btn-outline-dark btn-sm">Logout</a>
    </div>
</nav>

<!-- Isi halaman -->
<div class="container mt-4">
    <h3>Dashboard Sistem Kasir Sekolah</h3>
    <p>Silakan pilih menu pada navbar.</p>
</div>

</body>
</html>
