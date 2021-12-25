<?php
require ("includes/koneksi.php");
include 'header.php';
  $tgl_kembali = $_SESSION["tgl_kembali"];
  $nama=$_SESSION["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--========== Boostrap ==========-->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <!--========== CSS ==========-->
  <link rel="stylesheet" href="asset/css/all_in_one.css">
  <!-- ============== Bar Icon ================= -->
  <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
  <title>MyLibrary</title>
  <!-- ================ Font ================= -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
  <!-- ================ JS ================== -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/TextPlugin.min.js"></script>
</head>
<body>
<div class="card">
  <h5 class="card-header">Proses Peminjaman Berhasil</h5>
  <div class="card-body">
    <h5 class="card-title">Selamat, <?php echo $_SESSION['nama']; ?>!</h5>
    <p class="card-text">Mohon kembalikan buku ke pepustkaan MyLibrary terdekat sebelum tanggal <?php echo $_SESSION['tgl_kembali']; ?></p>
    <a href="borrow.php" class="btn-back">Confirm</a>
  </div>
</div>
<?php
include('footer.php');
?>
</body>
<style>
    .card {
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 200px;
    margin: 6rem auto 8.1rem auto;
    width: 650px;}
    .btn-back {
    background: -webkit-linear-gradient(right, #595132, #C4B17C);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #C4B17C;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    padding: 10px;
    
}
.btn-back:hover {
    box-shadow: 0px 1px 18px #C4B17C;
}
#card-header {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 7px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
#card-title {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 7px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
</style>