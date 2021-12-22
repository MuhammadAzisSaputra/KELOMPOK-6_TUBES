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
    <title>MyLibrary</title>
    <!-- ================ Font ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<style>

  #card {
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    height: 600px;
    margin: 6rem auto 8.1rem auto;
    width: 650px;
}
#card-content {
    padding: 12px 44px;
}
#card-title {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 7px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
#signup {
    color: #C4B17C;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
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
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #C4B17C;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #595132, #C4B17C);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
.underline-title {
    height: 2px;
    margin: -1.1rem auto 0 auto;
    width: 89px;
}

</style>

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
</div>

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

<div class="main">
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Borrow Books</h2>
        <div class="underline-title"></div>
    </div>
    <form action="cekpinjam.php" method="post">
        <label for="nama" style="padding-top:13px">&nbsp;Nama :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="nama" class="form-content" type="text" name="nama" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="username" style="padding-top:13px">&nbsp;Username :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="nama_buku" style="padding-top:13px">&nbsp;Book:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br/>
        <input id="nama_buku" class="form-content" type="text" name="nama_buku" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="tgl_pinjam" style="padding-top:22px">&nbsp;Date Borrowed :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></br/>
        <input id="tgl_pinjam" class="form-content" type="date" name="tglpinjam" required />
        <div class="form-border"></div>
        <center><input id="submit-btn" type="submit" name="submit" value="Submit" /></center>

    </form>
</body>