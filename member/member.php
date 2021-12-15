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
    header("location: login.php");
}

// Login
if ($_GET['action'] == 'login') {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login = mysqli_query($koneksi, "SELECT * FROM user_library WHERE email='$email' and password='$password'");
    $cek = mysqli_num_rows($login);
    session_destroy();
    session_start();

    if ($cek > 0) {

        while ($log = $login->fetch_array(MYSQLI_ASSOC)) {

            $_SESSION['id_member'] = $log['id_member'];
            $_SESSION['nama'] = $log['nama'];
            $_SESSION['email'] = $log['email'];
            $_SESSION['level'] = $log['level'];
            $_SESSION['username'] = $log['username'];
        }
        $_SESSION['sukses'] = 'Selamat Datang!' . $nama;
        if ($_SESSION['level'] == 'member') {
            header("location: dashboard.php");
        } else if ($_SESSION['level'] == 'admin') {
                header("location: index.php");
        }else {
            session_unset();
            $_SESSION['gagal'] = 'email atau Kata Sandi Salah!';
            header("Location: login.php");
        }
    }


//Logout
if ($_GET['action'] == 'logout') {
    session_start();

    session_destroy();
    header("location: index.php");
}

// Validasi
if ($_GET['action'] == 'validasi') {

    $email = $_POST['email'];
    $sql = "SELECT * FROM user_library WHERE email = '$email'";
    $proses = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($proses);
    if ($num == 0) {
        echo "<p class='text-primary'>Email masih tersedia</p>";
    } else {
        echo "<p class='text-primary'>Email sudah pernah terpakai</p>";
    }
}
}