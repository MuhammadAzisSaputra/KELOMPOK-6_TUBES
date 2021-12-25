<?php 
// koneksi database
include 'includes/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$genre = $_POST['genre'];
$harga = $_POST['harga'];
$pengarang = $_POST['pengarang'];
$tgl_terbit = $_POST['tgl_terbit'];
$penerbit = $_POST['penerbit'];

// menginput data ke database
$sql = "INSERT INTO stok_buku (id_buku, judul, genre, harga, pengarang, tgl_terbit, penerbit) VALUES ('$id_buku', '$judul','$genre','$harga','$pengarang', '$tgl_terbit', '$penerbit')";

$hasil = mysqli_query($koneksi, $sql) or die;

    session_start();

    if ($hasil) {
        $_SESSION['sukses'] = 'Penambahan stok buku berhasil';
    } else {
        $_SESSION['gagal'] = 'Mohon maaf, penaambahan stok buku gagal';
    }
    
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>
