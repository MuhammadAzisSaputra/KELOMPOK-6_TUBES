<?php
include 'includes/koneksi.php';


$name=$_SESSION["nama"];
$email=$_SESSION["email"];;
$subjek = $_POST['subjek'];
$message = $_POST['message'];


if($message=="")
{
  echo "<script>alert('Message Belum diisi');history.go(-1);</script>";
}
else
{
 
 $pilih="SELECT * from input where email='$email'";
 $cek=mysqli_query($koneksi, $pilih);
 
 $jumlah_data = mysqli_num_rows($cek);
 if ($jumlah_data >= 1 ) 
 {
   
  echo "<script>alert('Email yang sama sudah digunakan');history.go(-1);</script>";
}
else
{
 

 $query="INSERT INTO input (nama,email,subjek,message) VALUES ('$name','$email','$subjek','$message')";
 mysqli_query($koneksi, $query);

 echo "<script>alert('Data yang anda Input sukses');window.location='contact.php'</script>";
}
}
?>