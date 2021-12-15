<?php

    if (isset($_SESSION['level'])) {
        if ($_SESSION['level'] == 'admin') {
            header("Location: index.php");
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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!--CSS-->
    <link href="asset/css/register.css" rel="stylesheet">
    <!--JS-->
    <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <title>Your Session</title>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-3">
            <div class="card-body p-0">
                <div class="row" style="height: 600px;">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        <ul class="flex-list">
                            <li class="foruser li1"><a href="register.html" class="btn btn-success">Register</a><img
                                    src="asset/gambar/avatarlogin.png"
                                    style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                            <li class="foruser li2"><a href="login.html" class="btn btn-primary">Login</a><img
                                    src="asset/gambar/avatarregis.png"
                                    style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                            <li class="foruser li3"><a href="forgot.html" class="btn btn-danger">Forgot Password</a><img
                                    src="asset/gambar/avatarforgetpass.png"
                                    style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form id="form" class="user" method="POST" action="member.php?action=register" novalidate="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nama"
                                        placeholder="Name">
                                </div>
                                <div class="validasi-email">

                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="validasi-email">

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                                </div>
                                <div class="validasi-username">

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" required data-eye name="password">
                                </div>
                                <div class="validasi-password"></div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>

$(document).ready(function() {
    $('#exampleInputEmail').blur(function() {
        var email = $(this).val();
        $.ajax({
            type    : 'POST',
            url     : 'member.php?action=validasi',
            data    : 'email='+email,
            success : function(data) {
                $('#validasi-email').html(data);
            }
        })
    });

$('#form').submit(function() {
    if ($('#nama').val().length < 8) {
        $('#validasi-nama').html('<p class="text-danger">Silahkan isi nama anda min 8 karakter </p>');
        return false;
    }

    if ($('#email').val().length == 0) {
        $('#validasi-email').html('<p class="text-danger">Silahkan isi email anda </p>');
        return false;
    }

    if ($('#username').val().length < 5) {
        $('#validasi-username').html('<p class="text-danger">Silahkan isi username anda min 5 karakter </p>');
        return false;
    }

    if ($('#password').val().length < 8) {
        $('#validasi-password').html('<p class="text-danger">Silahkan isi password anda min 8 karakter </p>');
        return false;
    }
});
}):

    </script>   
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    

</body>

</html>