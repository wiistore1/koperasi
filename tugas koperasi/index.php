<?php
session_start();
include 'Koneksi.php'; // Pastikan nama file ini benar (cek huruf besar/kecilnya)

// Inisialisasi variabel pesan error kosong
$error_message = "";

// Kode hanya berjalan jika tombol login ditekan
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Gunakan md5($_POST['password']) jika di DB di-hash

    // Pastikan variabel koneksi ($koneksi) sesuai dengan di file koneksi.php
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
    
if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);

    if(password_verify($password, $data['password'])){
        
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if ($data['role'] == "admin") {
            header("location:dash_admin.php");
        } else {
            header("location:dash_kasir.php");
        }
        exit();

    } else {
        $error_message = "Password salah!";
    }

} else {
    $error_message = "Username tidak ditemukan!";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="border p-4" style="width:350px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <h4 class="text-center mb-3">Login Kasir</h4>

    <?php if ($error_message !== "") : ?>
        <div class="alert alert-danger text-center py-2" style="font-size: 14px;">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-2">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" name="login" class="btn btn-dark w-100">Login</button>
    </form>

    <div class="text-center mt-3">
        <small>Belum punya akun? <a href="register1.php">Daftar di sini</a></small>
    </div>
</div>

</body>
</html>
