<?php
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
        // Query INSERT ke tabel 'users'
        $query = "INSERT INTO users (username, password, role) 
                  VALUES ('$username', '$password', '$role')";
        
        // Eksekusi query
        $simpan = mysqli_query($koneksi, $query);

        if($simpan) {
            echo "<script>alert('Register berhasil'); window.location='login1.php';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar: " . mysqli_error($koneksi) . "');</script>";
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
        <a href="login1.php">Kembali ke Login</a>
    </div>
</div>

</body>
</html>