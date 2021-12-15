<?php

    if(!isset($_SESSION)){
        @session_start();
    }

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'library_input';

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi) {
        die("Konesksi Gagal: " . mysqli_connect_error());
    }
    function query($query) {
        global $koneksi;
    
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
             $rows[] = $row;
        }
        return $rows;
    } 
    function cari($keyword) {
        $query = "SELECT * FROM user_library WHERE nama LIKE '%$keyword%' OR username LIKE '%$keyword%' OR email LIKE '%$keyword%'  OR level LIKE '%$keyword%' "; 
        return query($query);
    } 
    

?>