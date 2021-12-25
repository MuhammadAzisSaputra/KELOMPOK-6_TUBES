<?php 
include('includes/koneksi.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: index.php");
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
            <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </li>
    </ul>
</div>
</nav>
</div>

<div class="container">
    <div class="card" style="background-color: #FFFAE5">
        <div class="card-body">
            <form class="needs-validation" method="POST">
                <?php
                $id_member = $_POST['id_member'];
                $query = "SELECT * FROM user_library WHERE id_member=$id_member";
                $hasil = mysqli_query($koneksi, $query);

                foreach($hasil as $data){
                ?>
                    <h5 class="modal-title">Edit Profil Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="form-row">
                    <input type="number" hidden name="id_member" value="<?php echo $_POST['id_member'];?>">
                        <div class="col-md-12 mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $data['nama'];?>" name="nama"
                            placeholder="Input nama anda" required>
                            <div class="invalid-feedback">
                                Silahkan Isi nama anda
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="<?php echo $data['email'];?>" name="email" id="email"
                            placeholder="Input email anda" required>
                            <div class="invalid-feedback">
                                Silahkan Isi email anda
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" value="<?php echo $data['username'];?>" name="username" placeholder="Input username anda" required>
                                <div class="invalid-feedback">
                                    Silahkan isi username anda
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="alamat">Alamat</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="alamat" value="<?php echo $data['alamat'];?>" name="alamat" placeholder="Input alamat anda" required>
                                <div class="invalid-feedback">
                                    Silahkan isi alamat anda
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="no_telepon">Nomor Telepon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="no_telepon" value="<?php echo $data['no_telepon'];?>" name="no_telepon" placeholder="Input no.telepon anda" required>
                                <div class="invalid-feedback">
                                    Silahkan isi no.telepon anda
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <button type="submit" class="btn btn-primary mt-5" name="btnUbah" >Update</button>
                    <a href="dashboard.php" class="btn btn-secondary mt-5">Close</a>
                </form>

                <?php
                 if(isset($_POST['btnUbah'])){
                    $no = $_POST['id_member'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $alamat = $_POST['alamat'];
                    $no_telepon = $_POST['no_telepon'];

                    if ($koneksi){
                        $sql = "UPDATE user_library SET nama='$nama',email='$email',username='$username',alamat='$alamat', no_telepon='$no_telepon' WHERE id_member=$no";
                        mysqli_query($koneksi,$sql);
                        echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='profil.php' class='btn btn-primary'>Kembali</a></b></p>";
                      } elseif ($koneksi->connect_error) {
                            echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error</b></p>";
                        }       
                    }
                ?>
            </div>
        </div>
    </div><br>
    
    <?php
    include('footer.php');
    ?>

</body>
