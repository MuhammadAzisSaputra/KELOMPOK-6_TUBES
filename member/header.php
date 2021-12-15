<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--========== Boostrap ==========-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--========== CSS ==========-->
  <link rel="stylesheet" href="asset/css/all_in_one.css">
  <!-- ============== Bar Icon ================= -->
  <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
  <title>Dashboard</title>
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
                    <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
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
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="member.php?action=logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div