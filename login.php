<?php
if(isset($_SESSION['level'])) {
    if($_SESSION['level'] == 'admin') {
        header("Location: index.php");
    }else if ($_SESION['level'] == 'member') {
        header("Location: user.php");
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
    <link href="asset/css/login.css" rel="stylesheet">
    <!--ICON-->
    <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
    <title>Login</title>
</head>


<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="height: 400px;">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <ul class="flex-list">
                                    <li class="foruser li1"><a href="login.php" class="btn btn-primary">Login</a><img
                                            src="asset/gambar/avatarlogin.png"
                                            style="width: 100px; margin-bottom: 150px; margin-top: -25px;"></li>
                                    <li class="foruser li2"><a href="register.php"
                                            class="btn btn-success">Register</a><img src="asset/gambar/avatarregis.png"
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
                                    <div class="alert alert-primary" role="alert">
                                        <?=$_SESSION['sukses']; ?>
                                    </div>

                                    <?php } else if(isset($_SESSION['gagal'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?=$_SESSION['gagal']; ?>
                                    </div>
                                    <?php } ?>

                                    <?php 
	                                if(isset($_GET['pesan'])){
		                                if($_GET['pesan']=="gagal"){
			                                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		                                    }
	                                    }
	                                ?>

                                    <form class="user" method="POST" action="member.php?action=login">
                                    
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="usernameHelp"
                                                placeholder="Enter Username..." name="username" required />
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
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>