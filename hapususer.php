<?php
 include "includes/koneksi.php";

 $id_member = $_GET['id_member']; 

 $query="DELETE from user_library WHERE id_member=$id_member";

 $hasil = mysqli_query($koneksi,$query);
if ($hasil) {
    header('location: admin.php');
 }else{
  echo"Data gagal dihapus";
 }

?>