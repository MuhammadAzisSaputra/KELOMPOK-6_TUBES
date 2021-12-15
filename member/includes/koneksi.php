<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'library_input';

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi) {
        die("Konesksi Gagal: " . mysqli_connect_error());
    }

?>