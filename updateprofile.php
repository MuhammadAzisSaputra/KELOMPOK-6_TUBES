<?php
include('includes/koneksi.php');
session_start();

// create
if ($_GET['action'] == 'tambah') {
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$keterangan = $_POST['keterangan'];

	$sql = "INSERT INTO `user_library` (`alamat`, `no_telepon`, `keterangan`) VALUES ('".$alamat."', '".$no_telepon."', '".$keterangan."');";   
		$hasil = mysqli_query($koneksi, $sql );

		if ($hasil) {
			unset($_SESSION['suksesProfil']);
			$_SESSION['suksesProfil'] = 'Profil berhasil dibuat!';
			header("Location: dashboard.php");
		} else {
			echo("Error description: " . mysqli_error($koneksi));
		}
	}