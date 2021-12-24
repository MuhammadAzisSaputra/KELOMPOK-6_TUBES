<?php
	require_once 'includes/koneksi.php'
?>
<?php
 
$nama = $_POST['nama'];
$username = $_POST['username'];
$nama_buku = $_POST['nama_buku'];
$tgl_pinjam = Date('Y-m-d');

 
$sql = "INSERT INTO pinjam_buku (nama, username, nama_buku, tgl_pinjam) VALUES ('$nama','$username','$nama_buku','$tgl_pinjam')";

if($koneksi->query($sql)===TRUE){
    header("location:user.php");
}else{
    echo "Terjadi kesalahan: ".$sql."<br/>".$koneksi->error;
}

$koneksi->close();
 
?>