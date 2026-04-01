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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kasir Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #7ed321, #c7e96b);">

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-success text-white min-vh-100 p-3">
            <h5 class="mb-4">Menu</h5>

            <div class="d-grid gap-2">
                <button class="btn btn-light">Dashboard</button>
                <button class="btn btn-light">Barang</button>
                <button class="btn btn-light">Kasir</button>
                <button class="btn btn-light">Laporan</button>
                <button class="btn btn-light">Anggota</button>
                <button class="btn btn-light">Akun</button>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-7 p-4">
            <h3 class="mb-4">Daftar Barang</h3>

            <div class="row g-3">

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Stapler</h5>
                            <p>Rp. 25.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Buku Tulis</h5>
                            <p>Rp. 12.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Kertas A4</h5>
                            <p>Rp. 45.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Spidol</h5>
                            <p>Rp. 8.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Pulpen</h5>
                            <p>Rp. 5.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-light border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h5>Binder</h5>
                            <p>Rp. 25.000</p>
                            <button class="btn btn-success w-100">Tambah</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Keranjang -->
        <div class="col-md-3 p-4">
            <div class="card border-0 shadow rounded-4">
                <div class="card-body">
                    <h4>Keranjang</h4>

                    <p>Buku Tulis - Rp. 12.000</p>
                    <p>Pulpen - Rp. 5.000</p>

                    <hr>
                    <p><strong>Subtotal: Rp. 17.000</strong></p>

                    <label>Diskon (%)</label>
                    <input type="number" class="form-control mb-2">

                    <p>Pajak 11%: Rp. 2.420</p>
                    <p><strong>Total: Rp. 24.420</strong></p>

                    <label>Bayar</label>
                    <input type="number" class="form-control mb-2">

                    <p>Kembalian: Rp. 0</p>

                    <button class="btn btn-success w-100 mb-2">Checkout</button>
                    <button class="btn btn-outline-success w-100">Cetak Struk</button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
