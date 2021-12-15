<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== Boostrap ==========-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="asset/css/contact.css">
    <!-- ============== Bar Icon ================= -->
    <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
    <title>Contact</title>
    <!-- ================ Font ================= -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/TextPlugin.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
        </style>
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
                        <a class="nav-link" href="index.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
                            <label for="name">Name :</label><br>
                            <input name="name" type="text" placeholder="Your Name" required>
                        </td>
                        <td>
                            <label for="name">Email :</label><br>
                            <input name="email" type="email" placeholder="Your Email" required>
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
    </div><br>

    <?php
    include('footer.php');
    ?>

</body>
<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>

</html>