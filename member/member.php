<?php
include('includes/koneksi.php');

// Register
if( $_GET['action'] == 'register') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'member';

    $password = md5($password);

    $sql = "INSERT INTO `user_library` (`id_member`, `username`, `password`, `nama`, `no_telpon`, `email`, `level`) VALUES (null, '".$username."', '".$password."', '".$nama."', '', '".$email."', '".$level."')";
    
    $hasil = mysqli_query($koneksi, $sql) or die;

    session_start();

    if ($hasil) {
        $_SESSION['sukses'] = 'Registrasi anda berhasil, Selamat anda telah menjadi member';
    } else {
        $_SESSION['gagal'] = 'Mohon maaf, registrasi anda gagal';
    }
    register("location: index.php");
}