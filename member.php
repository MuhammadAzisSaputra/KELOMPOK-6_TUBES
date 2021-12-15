<?php
include('includes/koneksi.php');

// Register
if( $_GET['action'] == 'register') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'member';


    $sql = "INSERT INTO user_library (username,password,nama,email,level) VALUES ('$username','$password','$nama','$email','member')";
    
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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi, "SELECT * FROM user_library WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);
    session_destroy();
    session_start();

    if ($cek > 0) {

        while ($log = $login->fetch_array(MYSQLI_ASSOC)) {

            $_SESSION['id_member'] = $log['id_member'];
            $_SESSION['nama'] = $log['nama'];
            $_SESSION['username'] = $log['username'];
            $_SESSION['level'] = $log['level'];
            $_SESSION['username'] = $log['username'];
        }
        $_SESSION['sukses'] = 'Selamat Datang!' . $username;
        if ($_SESSION['level'] == 'admin') {
            header("location: admin.php");
        } else if ($_SESSION['level'] == 'member') {
                header("location: user.php");
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
        echo "<p class='text-danger'>Email sudah pernah terpakai</p>";
    }
}
}