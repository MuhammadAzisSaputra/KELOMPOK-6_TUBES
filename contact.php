<?php
require 'includes/koneksi.php'; 
include('headercontact.php');
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];
?>

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
                    <a class="nav-link" href="dashboard.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Books
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                style="background-color: burlywood;">
                <a class="nav-link" href="borrow.php">Borrow</a>
                <a class="nav-link" href="buy.php">Buy</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </li>
    </ul>
</div>
</nav>
</div>
<div class="content">
    <div class="sosmed">
        <center>
            <h1 style="margin-top: 10px; margin-bottom: 5px; font-size: 80px">Get closer to us!</h1>
            <span><i class="fa fa-whatsapp" aria-hidden="true"></i> WA : +62 812-6523-0266</span><span><i class="fa fa-instagram" aria-hidden="true"> IG : @mylibrary</i></span><span><i class="fa fa-envelope" aria-hidden="true"></i> Email : mylibrary@gmail.com</span></center>
            <div class="card">
                <form action="input.php" method="POST" name="input">
                    <table class="form">
                        <tr>
                            <td>
                                <label for="nama">Name :</label><br>
                                <span name="nama"><?php echo $_SESSION['nama']; ?></span>
                            </td>
                            <td>
                                <label for="email">Email :</label><br>
                                <span name="email"><?php echo $_SESSION['email']; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="subjek">Subject :</label><br>
                                <input name="subjek" type="text" placeholder="Enter Subject">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="message">Message :</label><br>
                                <textarea name="message" placeholder="Your Message" required></textarea>
                                <script>
                                    CKEDITOR.replace('message');
                                </script>
                            </td>
                        </tr>
                    </table>
                    <center><input type="submit" name="Submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </center>
                </form>
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>

        <?php
        include('footer.php');
        ?>
        
    </body>


    </html>