<?php
session_start();

if($_SESSION['role'] != "admin"){
    echo "<script>alert('Akses ditolak'); window.location='login1.php';</script>";
    exit();
}
?>

<script>
alert("Selamat Datang Admin! 👑");
</script>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Koperasi Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            margin: 20px;
            padding: 20px;
            min-height: 90vh;
        }
        .nav-link {
            color: white !important;
            margin-bottom: 10px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: 500;
        }
        .nav-link:hover, .nav-link.active {
            background: white !important;
            color: #56ab2f !important;
        }
        .main-content {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 30px;
            margin: 20px 20px 20px 0;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .stat-value {
            font-size: 2rem;
            font-weight: bold;
            color: #2d5a27;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 d-none d-md-block">
            <div class="sidebar">
                <div class="text-center mb-4">
                    <img src=" " width="60" alt="Logo">
                    <h6 class="text-white mt-2">Koperasi Sekolah</h6>
                </div>
                <nav class="nav flex-column">
                    <a class="nav-link active" href="#"><i class="fas fa-desktop me-2"></i> Dashboard</a>
                    <a class="nav-link" href="#"><i class="fas fa-box me-2"></i> Barang</a>
                    <a class="nav-link" href="#"><i class="fas fa-cash-register me-2"></i> Kasir</a>
                    <a class="nav-link" href="#"><i class="fas fa-file-alt me-2"></i> Laporan</a>
                    <a class="nav-link" href="#"><i class="fas fa-users me-2"></i> Anggota</a>
                    <a class="nav-link mt-5 bg-danger text-white text-center" href="logout.php">Logout</a>
                </nav>
            </div>
        </div>

        <div class="col-md-10">
            <div class="main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Dashboard Admin</h3>
                    <div>
                        <span class="badge bg-success p-2">👑 Admin Mode</span>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h6>Total Transaksi Hari Ini</h6>
                            <div class="stat-value"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h6>Total Barang</h6>
                            <div class="stat-value"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card">
                            <h6>Jumlah Anggota</h6>
                            <div class="stat-value"></div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success border-0 shadow-sm">
                    <h5>Selamat Datang kembali, Admin!</h5>
                    <p>Sistem siap digunakan. Gunakan menu di samping untuk mengelola data koperasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>