<?php
// mengaktifkan session pada php
session_start();
if(isset($_POST['submit']))
                            {
// menghubungkan php dengan koneksi database
include 'include/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if(!$query){
	die("Query gagal " . mysqli_error($koneksi));
	}

	if(!empty($user_login) && (!empty($pass_login))){
	if($count==0){
		echo "<script>alert ('Username tidak ditemukan') </script>";
	} else {
		while ($row = mysqli_fetch_array($query)){
		$user = $row['username'];
		$pass = $row['password'];
		$nama = $row['Nama'];
		$email = $row['email']; 
		$level = $row['level'];
		}

		if($user_login == $user && $pass_login == $pass && $level=="admin"){      
		header ("Location:admin.php");
		$_SESSION['username'] = $user;
		$_SESSION['Nama'] = $nama;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = $level;
		} 
		else if($user_login == $user && $pass_login == $pass && $level=="user"){      
		header ("Location:index.php");
		$_SESSION['username'] = $user;
		$_SESSION['Nama'] = $nama;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = $level;
		} 

		else {
		echo "<script>alert ('User tidak ditemukan') </script>";
		}
	}
	}
	else {
	if(empty($user_login) || empty($pass_login)){
		echo "<script>alert ('Username dan Password tidak boleh kosong') </script>";
		}
	}
}
?>
