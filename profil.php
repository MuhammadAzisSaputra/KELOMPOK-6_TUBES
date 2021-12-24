<?php 
include('includes/koneksi.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: admin.php");
} else if ($_SESSION['level'] != 'member') {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== Boostrap ==========-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- ============== Bar Icon ================= -->
    <title>MyLibrary</title>
    <!-- ===================== datatables ==================== -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- ================ Font =====/ ============ -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- Bar Icon -->
    <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
    <!-- ================ JS ================== -->
    <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/tinymce/js/tinymce/tinymce.js"></script>

</head>

<body>
    <div class="header"> 
        <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: burlywood; margin-bottom: 25px;">
          <a class="navbar-brand ml-5">
            <img src="asset/gambar/logo.png" width="40px">
        </a>
        <a class="navbar-brand mr-5">MyLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Books
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: burlywood;">
                <a class="nav-link" href="borrow.php">Borrow</a>
                <a class="nav-link" href="buy.php">Buy</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="">Contact</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="member.php?action=logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </li>
    </ul>
</div>
</nav>
</div>

<?php if (isset($_SESSION['suksesProfil'])) { ?>
    <div class="alert alert-primary" role="alert">
      <?=$_SESSION['suksesProfil']; unset($_SESSION['suksesProfil']); ?>
  </div>
<?php }else if(isset($_SESSION['gagalProfil'])){ ?>
    <div class="alert alert-danger" role="alert">
      <?=$_SESSION['gagalProfil']; unset($_SESSION['gagalProfil']); ?>
  </div>
<?php } ?>

<div class="container">
    <div class="card" style="background-color: #FFFAE5">
        <div class="card-body">
            <?php
            if ($_GET['action'] == 'tambah') { ?>
                <form class="needs-validation" method="POST" action="updateprofil.php?action=tambah">
                <?php } ?>
                <h5 class="modal-title">Lengkapi profil anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" value="<?= $_SESSION['nama'] ?> " name="nama"
                        placeholder="Input nama anda" required>
                        <div class="invalid-feedback">
                            Silahkan Isi nama anda
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="<?= $_SESSION['email'] ?> " name="email" id="email"
                        placeholder="Input email anda" required>
                        <div class="invalid-feedback">
                            Silahkan Isi email anda
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" value="<?= $_SESSION['username'] ?> " name="username" placeholder="Input username anda" required>
                            <div class="invalid-feedback">
                                Silahkan isi username anda
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="alamat">Alamat</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="alamat" value="" name="alamat" placeholder="Input alamat anda" required>
                            <div class="invalid-feedback">
                                Silahkan isi alamat anda
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nomor_tlp">Nomor Telepon</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomor_tlp" value="" name="nomor_tlp" placeholder="Input no.telepon anda" required>
                            <div class="invalid-feedback">
                                Silahkan isi no.telepon anda
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"
                    required>Keterangan Lainnya</textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Save changes</button>
                <a href="dashboard.php" class="btn btn-secondary mt-5">Close</a>
            </form>
        </div>
    </div>
</div><br>
<script>
    tinymce.init({
        selector: '#keterangan'
    });
</script>
<?php
include('footer.php');
?>
</body>
