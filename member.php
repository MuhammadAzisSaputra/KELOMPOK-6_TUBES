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

    $sql = "INSERT INTO user_library (id_member, username, password, nama, email, level) VALUES (null, '$username', '$password', '$nama', '$email', '$level')";
    
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        $_SESSION['sukses'] = 'Registrasi anda berhasil, Selamat anda telah menjadi member';
        header('Location: login.php');
    } else {
        $_SESSION['gagal'] = 'Mohon maaf, registrasi anda gagal';
    }

    
}

// Login
if ($_GET['action'] == 'login') {

    $email = $_POST['email'];
    $password = ($_POST['password']);

    $password = md5($password);

    $login = mysqli_query($koneksi, "SELECT * FROM user_library WHERE email='$email' and password='$password'");
    $cek = mysqli_num_rows($login);

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
        }else {
            session_unset();
            $_SESSION['gagal'] = 'email atau kata Sandi salah!';
            header("Location: login.php");
        }
    }


//Logout
    if ($_GET["action"] == "logout") {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header("location: index.php");

        exit();
    }

// Validasi Email
    if ($_GET['action'] == 'validasi') {

        $email = $_POST['email'];
        $sql = "SELECT * from user_library where email = '$email'";
        $proses = mysqli_query($koneksi, $sql);
        $num = mysqli_num_rows($proses);
        if ($num == 0) {
            echo "<p class='text-primary'>email masih tersedia</p>";
        } else {
            echo " <p class='text-danger'>email tidak tersedia</p>";
        }
    }


// Validasi Username
    if ($_GET['action'] == 'validasi') {

        $email = $_POST['username'];
        $sql = "SELECT * from user_library where username = '$username'";
        $proses = mysqli_query($koneksi, $sql);
        $num = mysqli_num_rows($proses);
        if ($num == 0) {
            echo "<p class='text-primary'>Username masih tersedia</p>";
        } else {
            echo " <p class='text-danger'>Username tidak tersedia</p>";
        }
    }
}
