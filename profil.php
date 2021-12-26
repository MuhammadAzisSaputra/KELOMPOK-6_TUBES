<?php 
include('includes/koneksi.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: admin.php");
} else if ($_SESSION['level'] != 'member') {
    header("Location: index.php");
}

include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->

</head>

<body>
                <center>

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-success-800">Akun</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card  mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-6 d-flex flex-row align-items-center justify-content-center">
                                    <h6 class="m-0 font-weight-bold text-success">Your Account</h6>
                                </div>
                                <!-- Card Body -->
                                <center>
                                <div class="card-body">
                                    <?php
                                        $query = "SELECT * FROM user_library WHERE id_member = $_SESSION[id_member];";
                                        $hasil = mysqli_query($koneksi, $query);
                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>Nama</th><th>Alamat</th><th>Email</th><th>Username</th><th>No.Telepon</th>";
                                        echo "</tr>";

                                        foreach ($hasil as $data) {
                                            echo "<tr>";
                                            echo "<td>$data[nama]</td>";
                                            echo "<td>$data[alamat]</td>";
                                            echo "<td>$data[email]</td>";
                                            echo "<td>$data[username]</td>";
                                            echo "<td>$data[no_telepon]</td>";

                                            echo "<td><form method='POST' action='updateprofile.php'>
                                            <input hidden type='text' name='id_member' value=". $data['id_member'] .">
                                            <button type='submit' name='btnUpdate' class='btn btn-success'>Update</button></form></td>";

                                            echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>";
                                            echo "<input hidden name='id_member' type='text' value=$data[id_member]>";
                                            echo "<button type='submit' name='btnHapus' class='btn btn-danger';>Delete</button></form></td>";


                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                    ?>

                                    <?php
                                        if(isset($_POST['btnHapus'])){

                                        //inisiasi variabel untuk menampung isian id
                                        $id_member=$_POST['id_member'];

                                        if ($koneksi){
                                            $sql = "DELETE FROM user_library WHERE id_member=$id_member";
                                            mysqli_query($koneksi,$sql);
                                            echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
                                        } elseif ($koneksi->connect_error){
                                            echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $koneksi->connect_error. "</b></p>";
                                        }
                                    }
                                   ?>

                                </div>
                                </center>
                            </div>
                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->