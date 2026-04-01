<?php
session_start();
include 'Koneksi.php'; // Pastikan file ini ada dan variabel koneksinya bernama $koneksi

if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    $role = $_POST['role'];

   
    // Validasi: Cek apakah password dan konfirmasi cocok
if($password != $konfirmasi){
    echo "<script>alert('Password tidak sama');</script>";
} else {

    // CEK USERNAME
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('Username sudah digunakan!');</script>";
    } else {

        // HASH SEKALI SAJA (INI YANG BENAR)
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, role)
                  VALUES ('$username', '$password', '$role')";

    $simpan = mysqli_query($koneksi, $query);

    if($simpan){
        echo "<script>alert('Register berhasil'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar');</script>";
    }
}
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Sistem Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="border p-4" style="width:320px; border-radius: 10px;">
    <h4 class="text-center mb-3">Daftar Akun</h4>

    <form method="POST" action="">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <input type="password" name="konfirmasi" class="form-control mb-3" placeholder="Konfirmasi Password" required>
        <select name="role" class="form-control mb-3" required>
    <option value="">-- Pilih Role --</option>
    <option value="kasir">Kasir</option>
    <option value="admin">Admin</option>
</select>

        <button type="submit" name="daftar" class="btn btn-outline-dark w-100">Daftar</button>
    </form>

    <div class="text-center mt-3">
        <a href="index.php">Kembali ke Login</a>
    </div>
</div>

</body>
</html>
