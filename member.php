<?php
include('includes/koneksi.php');

// Register
if( $_GET['action'] == 'register') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'member';

    $password = md5($password);

    $sql = "INSERT INTO user_library (id_member, username, password, nama, email, no_telepon, alamat, level) VALUES (null, '$username', '$password', '$nama', '$email', '$no_telepon', '$alamat', '$level')";
    
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        $_SESSION['sukses'] = 'Registrasi anda berhasil !!! Anda sekarang member';
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
            $_SESSION['alamat'] = $log['alamat'];
            $_SESSION['no_telepon'] = $log['no_telepon'];
        }
        $_SESSION['sukses'] = 'Selamat Datang!' . $nama;
        if ($_SESSION['level'] == 'member') {
            header("Location: dashboard.php");
        } else if ($_SESSION['level'] == 'admin') {
           header("Location: admin.php");
       } else {
        session_unset();
        $_SESSION['gagal'] = 'email atau kata Sandi salah!';
        header("Location: login.php");
    }
}
}

// Validasi Email
if ($_GET['action'] == 'validasi-email') {

    $email = $_POST['email'];
    $sql = "SELECT * from user_library where `email` = '$email'";
    $proses = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($proses);
    if ($num == 0) {
        echo "<p class='text-success'>Email masih tersedia</p>";
    } else {
        echo " <p class='text-danger'>Email ini sudah pernah digunakan</p>";
    }
}


// Validasi Username
if ($_GET['action'] == 'validasi-username') {

    $username = $_POST['username'];
    $sql = "SELECT * from user_library where `username` = '$username'";
    $proses = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($proses);
    if ($num == 0) {
        echo "<p class='text-success'>Username masih tersedia</p>";
    } else {
        echo " <p class='text-danger'>Username ini sudah pernah digunakan</p>";
    }
}

