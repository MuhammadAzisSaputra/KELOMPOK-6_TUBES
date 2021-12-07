<?php
 
require_once "../koneksi.php";
 
$member = $_POST['id_member'];
$buku = $_POST['id_buku'];
$tgl_pinjam = Date('Y-m-d');
$tgl_kembali = '';

 
$query = $conn->query("INSERT INTO pinjam_kembali VALUES(null, '$member', '$buku', '$tgl_pinjam', '$tgl_kembali')");
 
echo "<script>
                alert('Peminjam Berhasil di Tambah...')
                window.location='index.php';
            </script>";