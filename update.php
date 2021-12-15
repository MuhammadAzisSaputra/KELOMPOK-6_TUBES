 
<?php
    require 'includes/koneksi.php';
    $id_member = $_POST['id_member'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $level ="member";  
    

            if($koneksi){
            $sql = " UPDATE user_library SET  username='$username', password='$password', nama ='$nama', email='$email',  level= '$level'  WHERE id_member  = '$id_member' ";

            mysqli_query($koneksi,$sql);
            echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='admin.php' class='btn btn-primary'>Kembali</a></b></p>";
        } elseif ($koneksi->connect_error) {
              echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error </b></p>";
          }       
  ?>
