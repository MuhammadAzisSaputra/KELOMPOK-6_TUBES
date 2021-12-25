<?php
	require_once 'includes/koneksi.php';
    $_SESSION['email'];
    $_SESSION['nama'];
?>
<?php
 
$nama = $_SESSION['nama'];
$emailll = $_SESSION['email'];
$nama_buku = $_POST['nama_buku'];
$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$tgl_kembali = date("d-m-Y", $tujuh_hari);

if($_SESSION['email'] != $emailll){
    echo"<p class='text-success'>Email masih tersedia</p>";
}
 
$sql = "INSERT INTO pinjam_buku (nama, email, nama_buku, tgl_pinjam, tgl_kembali) VALUES ('$nama','$emailll','$nama_buku','$tgl_pinjam','$tgl_kembali')";

$_SESSION['tgl_kembali'] = $tgl_kembali;
if($koneksi->query($sql)===TRUE){
    header("location: pengembalian.php");
}else{
    echo "Terjadi kesalahan: ".$sql."<br/>".$koneksi->error;
}
$koneksi->close();
 
?>