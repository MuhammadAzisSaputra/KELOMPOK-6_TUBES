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
    <link rel="shortcut icon" href="asset/gambar/iconbuku-removebg-preview.png" type="image/x-icon">
    <title>Index</title>
    <!-- ================ Font ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: burlywood;">
            <a class="navbar-brand ml-5" >
                <img src="asset/gambar/iconbuku-removebg-preview.png" width="40px">
              </a>
            <a class="navbar-brand mr-5" >xxxx Library</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                </ul>
            </div>
            <a class=" active btn btn-success ml-2" type="button" href="register.php">Register</a>
          <a class=" active btn btn-primary ml-2" type="button" href="login.php">Log in</a>
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
          <img class="d-block" width="93%" height="500px" style=" margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library.jpg" alt="First slide">
          <div class="card-img-overlay mt-auto ml-auto">
            <h1>Welcome to <br> xxxx Library</h1>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block" width="93%" height="500px" style="margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library3.jpg" alt="Second slide">
          <div class="card-img-overlay mt-auto ml-auto">
            <h1>Welcome to <br> xxxx Library</h1>
        </div>         
        </div>
        <div class="carousel-item">
          <img class="d-block" width="93%" height="500px" style=" margin-left: 50px; margin-right: 50px; position: relative; border-radius: 25px;" src="asset/gambar/library4.jpg" alt="Third slide">
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
  </div>

    <!-- Footer -->
    <footer class="foot text-center" style="background-color: rgb(220, 164, 91); color: black;">
        <p>Copyright &copy; Kelompok 6 - TI USU 21</p>
      </footer>
</body>
</html>