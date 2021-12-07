<?php
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO user_library (username, password, email) 
                                    VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $query_sql)) {
      echo "<h1>Username $username berhasil terdaftar</h1>
            <a href='pages/login.php'>Kembali Login</h1>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>