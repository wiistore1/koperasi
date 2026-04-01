<?php
include 'Koneksi.php';

if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    // validasi
    if($password != $konfirmasi){
        echo "<script>alert('Password tidak sama');</script>";
    } else {
        $pass_hash = md5($password);

        $query = "INSERT INTO users (username, password, role) 
                  VALUES ('$username', '$pass_hash', 'kasir')";
        
        mysqli_query($koneksi, $query);

        echo "<script>alert('Register berhasil'); window.location='login1.php';</script>";
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

<div class="border p-4" style="width:320px;">
    <h4 class="text-center mb-3">Daftar Akun</h4>

    <form>
        <input type="text" class="form-control mb-2" placeholder="Username">
        <input type="password" class="form-control mb-2" placeholder="Password">
        <input type="password" class="form-control mb-3" placeholder="Konfirmasi Password">

        <button class="btn btn-outline-dark w-100">Daftar</button>
    </form>

    <div class="text-center mt-3">
        <a href="login1.php">Kembali ke Login</a>
    </div>
</div>

</body>
</html>