<?php

if(isset($_SESSION['level'])) {
    if($_SESSION['level'] == 'admin') {
        header("Location: admin.php");
    }else if($_SESSION['level'] == 'member') {
        header("Location: dashboard.php");
    }
}
session_start();

?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <!--CSS-->
    <link href="asset/css/register.css" rel="stylesheet">
    <!--JS-->
    <script src="asset/vendor/jquery/jquery.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/sb-admin-2.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <!--ICON-->
    <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
    <title>MyLibrary</title>
</head>

<style>
    .bg-gradient-primary {
        background-color: none;
        background-image: none;
        background-image: url(asset/gambar/library.jpg);
        background-size: contain;
    }

    .bg-login-image {
        background-image: url(asset/gambar/background.jpg);
    }

    ul {
        list-style: none;
        margin-left: 300px;
        padding-right: 0px;
        padding-left: 0px;
        text-align: center;
    }

    li {
        color: white;
        height: 100px;
        line-height: 100px;
        text-align: center;
    }

    .li1 {
        background-color: #F8C471;
        height: 200px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        box-shadow: 0 5px #a0c3f7;
    }

    .li2 {
        background-color: #F8C471;
        height: 200px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        box-shadow: 0 5px #a0c3f7;
    }

    .li3 {
        background-color: #F8C471;
        height: 200px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        box-shadow: 0 5px #a0c3f7;
    }

    .l1:active {
        position: relative;
        top: 7px;
        box-shadow: none;
    }

    .li2:active {
        position: relative;
        top: 7px;
        box-shadow: none;
    }

    .li3:active{
        position: relative;
        top: 7px;
        box-shadow: none;
    }

    .flex-list {
        display: wrap;
    }

    .flex-list li {
        width: 155px;
    }

    .foruser {
        opacity: 2;
    }

    .foruser:hover {
        opacity: 0.9;
    }

</style>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-9 col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="height: 600px;">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <ul class="flex-list">
                                    <li class="foruser li1"><a href="login.php" class="btn btn-primary">Login</a><img
                                        src="asset/gambar/avatarlogin.png"
                                        style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                        <li class="foruser li2"><a href="register.php"
                                            class="btn btn-success">Register</a><img src="asset/gambar/avatarregis.png"
                                            style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                            <li class="foruser li3"><a href="forgot.php" class="btn btn-danger">Forgot
                                            Password</a><img src="asset/gambar/avatarforgetpass.png"
                                            style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                            </div>
                                            <div class="container" style="height: 91vh;">
                                                <?php if (isset($_SESSION['sukses'])) { ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <?=$_SESSION['sukses']; ?>
                                                    </div>
                                                <?php }else if(isset($_SESSION['gagal'])){ ?>
                                                    <div class="alert alert-danger" role="alert">
                                                      <?=$_SESSION['gagal']; ?>
                                                  </div>
                                              <?php } ?>
                                              <form class="user" method="POST" action="member.php?action=login">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address..." name="email" required />
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password" name="password" required />
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                                        <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Login
                                                </button>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="">Forgot Password?</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="register.php">Create an Account!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </body>
        </html>