<?php
include('header.php');
session_start();

?>

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
        <img class="d-block" width="93%" height="519px"
        style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;"
        src="asset/gambar/library.jpg" alt="First slide">
        <div class="card-img-overlay mt-auto ml-auto">
          <h1>Welcome to <br> MyLibrary</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block" width="93%" height="519px"
        style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;"
        src="asset/gambar/library3.jpg" alt="Second slide">
        <div class="card-img-overlay mt-auto ml-auto">
          <h1>Welcome to <br> MyLibrary</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block" width="93%" height="519px"
        style="margin-top: 15px; margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;"
        src="asset/gambar/library4.jpg" alt="Third slide">
        <div class="card-img-overlay mt-auto ml-auto">
          <h1>Welcome to <br> MyLibrary</h1>
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
      MyLibrary
    </h2>
    <?php
    if(isset($_SESSION['username'])){
      ?>
      <h3 class="title" style="text-transform: uppercase;">WELCOME <?php echo $_SESSION['nama']; ?> Silahkan mencoba fitur yang kami sediakan</h3>
    <?php } ?> 
    <div class="card-deck mt-lg-3 mb-4 w-50">
      <div class="card"><a href="topbooks.html" style="color: black;">
        <img class="card-img-top" width="10px" src="asset/gambar/lampu.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Top Books</h5>
          <p class="card-text">Berisi rekomendasi buku yang sedang ramai di perbincangkan</p>
        </a>
      </div>
    </div>
    <div class="card"><a href="borrow.html" style="color: black;">
      <img class="card-img-top" src="asset/gambar/orang.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Borrow</h5>
        <p class="card-text">Layanan peminjaman buku yang langsung diambil ke alamat perpustakaan kami</p>
      </a>
    </div>
  </div>
  <div class="card"><a href="buy.html" style="color: black;">
    <img class="card-img-top" src="asset/gambar/calculator.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Buy</h5>
      <p class="card-text">Layanan pembelian buku yang dapat diambil langsung di alamat perpustakaan kami</p>
    </a>
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
      <a class="btn btn-danger" href="member.php?action=logout">Logout</a>
    </div>
  </div>
</div>
</div>

<?php
include('footer.php');
?>
</html>