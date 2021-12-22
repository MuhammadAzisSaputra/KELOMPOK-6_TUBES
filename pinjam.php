<?php

session_start();

require 'includes/koneksi.php';
if(($_SESSION['level']=="")||($_SESSION['level']=="user")){
    header("location:login.php?anda-bukan-admin");
}
# Pagination
# Konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM pinjam_buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

# LIMIT = awal data, pembatasan data per halaman
# ORDER BY id DESC/ASC = mengurutkan data berdasarkan *
$posting = query("SELECT * FROM pinjam_buku LIMIT $awalData, $jumlahDataPerHalaman");
 # Jika tombol "cari" ditekan
if (isset($_POST["cari"])) {
  $posting = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyLibrary</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="asset/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
      <!-- ! Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">My</span>
                        <span class="logo-subtitle">Library</span>
                    </div>

                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="show-cat-btn" href="admin.php">
                            <span class="icon home" aria-hidden="true"></span>Dashboard</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="book.php">
                                <span class="icon document" aria-hidden="true"></span>Book
                                
                            </a>
                            
                        </li>
                        <li>
                            <a class="show-cat-btn" href="pinjam.php">
                                <span class="icon folder" aria-hidden="true"></span>Borrow
                                
                            </a>
                            
                        </li>
                        <li>
                            <a class="show-cat-btn" href="beli.php">
                                <span class="icon image" aria-hidden="true"></span>Buy
                                
                            </a>
                            
                        </li>
                        <ul class="cat-sub-menu">
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
                <span class="sidebar-user-img">
                    <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title"><?php echo $_SESSION['username'] ?></span>
                    </div>
                </a>
            </div>
        </aside>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            
            <nav class="main-nav--bg">
              <div class="container main-nav">
                <div class="main-nav-start">   
                </div>
                <div class="main-nav-end">  
                </button>
                <div class="notification-wrapper">
                </button>
                <ul class="users-item-dropdown notification-dropdown dropdown">
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon info">
                        <i data-feather="check"></i>
                    </div>
                </a>
            </li>
            
            <li>
                <a href="##">
                  <div class="notification-dropdown-icon info">
                    <i data-feather="check" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">New Subscriber here!</span>
                    <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                </div>
            </a>
        </li>
        <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
        </li>
    </ul>
</div>
<div class="nav-user-wrapper">
    <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
      <span class="sr-only">My profile</span>
      <span class="nav-user-img">
        <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
        </span>
    </button>
    <ul class="users-item-dropdown nav-user-dropdown dropdown">
      <li><a class="danger" href="##">
          <i data-feather="log-out" aria-hidden="true"></i>
          <span>Log out</span>
      </a></li>
  </ul>
</div>
</div>
</div>
</nav>
<!-- ! Main -->
<form action="" method="POST" accept-charset="utf-8">
    <input type="text" name="keyword" size="30" placeholder="Masukkan Keyword Pencarian.." autocomplete="OFF" autofocus="">
    <button type="submit" name="cari">Cari</button>
</form>
<br /><br />
<?php
$query = "SELECT * FROM pinjam_buku";
$hasil = mysqli_query($koneksi, $query);

echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>Nama</th><th>Username</th><th>Nama_buku</th><th>tgl_pinjam</th>";
echo "</tr>";

foreach ($hasil as $data) {
    echo "<tr>";
    echo "<td>$data[nama]</td>";
    echo "<td>$data[username]</td>";
    echo "<td>$data[nama_buku]</td>";
    echo "<td>$data[tgl_pinjam]</td>";

    
    echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>";
    echo "<input hidden name='nama_buku' type='text' value=$data[nama_buku]>";
    echo "<button type='submit' name='btnHapus' class='btn btn-danger';>Delete</button></form></td>";


    echo "</tr>";
}

echo "</table>";
?>

<?php
if(isset($_POST['btnHapus'])){

    
    $nama_buku=$_POST['nama_buku'];

    if ($koneksi){
        $sql = "DELETE FROM pinjam_buku WHERE nama_buku=$nama_buku";
        mysqli_query($koneksi,$sql);
        echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
    } elseif ($koneksi->connect_error){
        echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $koneksi->connect_error. "</b></p>";
    }
}
?>
</body>
</form> 

<!-- ! Footer -->
<footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <center><p>2021 © Kelompok 6 </p></center>
      
  </div>
  
</div>
</footer>
</div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>