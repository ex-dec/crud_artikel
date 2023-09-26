<?php

include "../template/connection.php";
$pass = md5($_POST['password']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $pass);

//cek username
$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$user_valid = mysqli_fetch_array($cek_user);
//uji username
if ($user_valid) {
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}