<?php

include ("includes/koneksi.php");


if(empty($_SESSION ['username'])){    //kl session kosong dialihkan ke error.php
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== Boostrap ==========-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="index.css">
    <!-- ============== Bar Icon ================= -->
    <link rel="shortcut icon" href="iconbuku-removebg-preview.png" type="image/x-icon">
    <title>Index</title>
    <!-- ================ Font ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    h3{
        font-size : 25px;
    }
</style>
<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: burlywood;">
            <a class="navbar-brand ml-5">
                <img src="asset/gambar/iconbuku-removebg-preview.png" width="40px">
              </a>
            <a class="navbar-brand mr-5">xxxx Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Books
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: burlywood;">
                            <a class="nav-link" href="borrow.php">Borrow</a>
                            <a class="nav-link" href="buy.php">Buy</a>
                        </div>
                    </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                  </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
  <div class="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner mt-4 ml-auto mr-auto mb-5 w-100">
        <div class="carousel-item active">
          <img class="d-block" width="93%" height="519px" style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library.jpg" alt="First slide">
          <div class="card-img-overlay mt-auto ml-auto">
            <h1>Welcome to <br> xxxx Library</h1>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" width="93%" height="519px" style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library3.jpg" alt="Second slide">
          <div class="card-img-overlay mt-auto ml-auto">
            <h1>Welcome to <br> xxxx Library</h1>
        </div>         
        </div>
        <div class="carousel-item">
          <img class="d-block" width="93%" height="519px" style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library4.jpg" alt="Third slide">
          <div class="card-img-overlay mt-auto ml-auto">
            <h1>Welcome to <br> xxxx Library</h1>
        </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <center>
      <h2>
        xxx Library
      </h2>
</br>
      <h3 class="title" style="text-transform: uppercase;">WELCOME <?php echo $_SESSION['username'] ?> Silahkan mencoba fitur yang kami sediakan</h3>
						    <div class="carousel-item active">
    <div class="card-deck mt-lg-3 mb-4 w-50">
        <div class="card"><a href="topbooks.php" style="color: black;">
          <img class="card-img-top" width="10px" src="asset/gambar/lampu.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Top Books</h5>
            <p class="card-text">Berisi rekomendasi buku yang sedang ramai di perbincangkan</p></a>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="asset/gambar/orang.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Borrow</h5>
            <p class="card-text">Layanan peminjaman buku yang langsung diambil ke alamat perpustakaan kami</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="asset/gambar/calculator.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Buy</h5>
            <p class="card-text">Layanan pembelian buku yang dapat diambil langsung di alamat perpustakaan kami</p>
          </div>
        </div>
      </div>
    </center>

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
                    <a class="btn btn-danger" href="cover.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <p>Copyright &copy; Kelompok 6 - TI USU 21</p>
      </footer>
</body>
</html>