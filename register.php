<?php

if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        header("Location: admin.php");
    } else if ($_SESSION['level'] == 'member') {
        header("Location: dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
        background-image: url(asset/gambar/library2.jpeg);
        background-size: contain;
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
        height: 265px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        box-shadow: 0 5px #a0c3f7;
    }

    .li2 {
        background-color: #F8C471;
        height: 265px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        box-shadow: 0 5px #a0c3f7;
    }

    .li3 {
        background-color: #F8C471;
        height: 265px;
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


    .bg-register-image {
        background-image: url(asset/gambar/background.jpg)
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

        <div class="card o-hidden border-0 shadow-lg my-3">
            <div class="card-body p-0">
                <div class="row" style="height: 800px;">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <ul class="flex-list">
                            <li class="foruser li1"><a href="register.php" class="btn btn-success">Register</a><img
                                src="asset/gambar/avatarlogin.png"
                                style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                <li class="foruser li2"><a href="login.php" class="btn btn-primary">Login</a><img
                                    src="asset/gambar/avatarregis.png"
                                    style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                    <li class="foruser li3"><a href="forgot.php" class="btn btn-danger">Forgot Password</a><img
                                        src="asset/gambar/avatarforgetpass.png"
                                        style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>
                                        <form id="form" class="user" method="POST" action="member.php?action=register">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="name" name="nama"
                                                placeholder="Name" required>
                                                <div id="validasi-name"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
                                                placeholder="Adress" required>
                                                <div id="validasi-alamat"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="email" name="email"
                                                placeholder="Email Address" required>
                                                <div id="validasi-email"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="no_telepon" name="no_telepon"
                                                placeholder="Phone Number" required>
                                                <div id="validasi-no_telpon"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required>
                                                <div id="validasi-username"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name="password">
                                                <div id="validasi-password"></div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-user btn-block">
                                                Register Account
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot.php">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="login.php">Already have an account? Login!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>

                    $(document).ready(function() {
                        $('#email').blur(function(){
                         event.preventDefault();
                         var email = $(this).val();
                         $.ajax({
                             type    : 'POST',
                             url     : 'member.php?action=validasi-email',
                             data    : 'email='+email,
                             success : function(data){
                                 $('#validasi-email').html(data);
                             }
                         })
                     })
                        $('#username').blur(function(){
                         event.preventDefault();
                         var username = $(this).val();
                         $.ajax({
                             type    : 'POST',
                             url     : 'member.php?action=validasi-username',
                             data    : 'username='+username,
                             success : function(data){
                                 $('#validasi-username').html(data);
                             }
                         })
                     })


                        $('#form').submit(function() {
                            if($('#name').val().length <= 8){
                                $('#validasi-name').html("<p class='text-danger'>Nama tidak boleh kurang dari 8 karakter</p>");
                                return false;
                            };
                            if($('#name').val().length >= 18){
                                $('#validasi-name').html("<p class='text-danger'>Nama tidak boleh lebih dari 18 karakter</p>");
                                return false;
                            };
                            if($('#email').val().length == 0){
                                $('#validasi-email').html("<p class='text-danger'>Tolong isi bagian email anda</p>");
                                return false;
                            };
                            if($('#username').val().length <= 5){
                                $('#validasi-username').html("<p class='text-danger'>Username tidak boleh kurang dari 5 karakter</p>");
                                return false;
                            };
                            if($('#username').val().length >= 10){
                                $('#validasi-username').html("<p class='text-danger'>Username tidak boleh lebih dari 10 karakter</p>");
                                return false;
                            };
                            if(($('#password').val().length < 1) || ($('#password').val().length >= 10 )){
                                $('#validasi-password').html("<p class='text-danger'>Password tidak boleh kosong dan tidak boleh lebih dari 10 karakter</p>");
                                return false;
                            };
                        });
                    });


                </script>   

            </body>

            </html>