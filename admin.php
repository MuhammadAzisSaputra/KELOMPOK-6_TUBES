<?php

session_start();


include ('includes/koneksi.php');
if($_SESSION['level'] == 'member') {
    header("location:index.php");
}

# Pagination
# Konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM user_library"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

# LIMIT = awal data, pembatasan data per halaman
# ORDER BY id DESC/ASC = mengurutkan data berdasarkan *
$posting = query("SELECT * FROM user_library LIMIT $awalData, $jumlahDataPerHalaman");
# Jika tombol "cari" ditekan
if (isset($_POST["cari"])) {
    $posting = cari($_POST["keyword"]);
}

include('headeradmin.php');


?>

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
            </ul>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" untuk mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
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
<table border="1" class="table table-bordered" >
    <tr>

        <th >Username</th>
        <th >Password</th>
        <th >Nama</th>
        <th >Email</th> 
        <th >Level</th> 
        <th colspan="2">Aksi</th>
    </tr>
    <?php $i = 1; ?>

    <?php

    foreach($posting as $row)
    {
        ?>
        <tr>

          <td class="align-middle"><?php echo $row['username']; ?></td>
          <td class="align-middle"><?php echo $row['password']; ?></td>
          <td class="align-middle"><?php echo $row['nama']; ?></td>
          <td class="align-middle"><?php echo $row['email']; ?></td> 
          <td class="align-middle"><?php echo $row['level']; ?></td> 

          <td class="align-middle"><form method="POST" action="ubahuser.php"><input hidden type="text" name="id_member" <?php echo "value='$row[id_member]'"; ?> ><button type="submit" name="btnUpdate" class="btn btn-info">Update</button></form></td>
          <td class="align-middle"><a href="hapususer.php?id_member=<?php echo $data['id_member'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">Delete</a></td>
      </tr>
      <?php $i++; ?>
  <?php } ?>
</table>
<?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>" title="Back">&laquo;</a>
<?php endif; ?>

<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif ) : ?>
      <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
  <?php else : ?>
      <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
  <?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>" title="Next">&raquo;</a>
<?php endif; ?>


</form> 


</body>

</html>