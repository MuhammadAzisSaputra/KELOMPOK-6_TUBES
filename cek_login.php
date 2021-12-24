<?php
session_start();
include('includes/koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM user_library WHERE username='$email' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	
	if($data['level']=="admin"){

		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		header("location: dashboard.php");
    }else if($data['member']=="member"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "member";	
		header("location: dashboard.php");
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>