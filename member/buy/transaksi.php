<?php
session_start();

require_once '../includes/koneksi.php';
$selSto =mysqli_query($koneksi, "SELECT * FROM stok_buku WHERE id_buku='$id'");
    $sto    =mysqli_fetch_array($selSto);
    $stok    =$sto['kuantitas'];
if (!isset($_SESSION['cart'])) {
 header('Location: index.php');
}

$cart = unserialize(serialize($_SESSION['cart']));
$total_item = 0;
$total_bayar = 0;

for ($i=0; $i<count($cart); $i++) { 
 $total_item += $cart[$i]['pembelian'];
 $total_bayar += $cart[$i]['pembelian'] * $cart[$i]['harga'];
}

// proses penyimpanan data
$query = mysqli_query($koneksi, "INSERT INTO tb_order (total_item, total_bayar, tgl_transaksi) VALUES ('$total_item', '$total_bayar', '" . date('Y-m-d') . "')");

$id_order = mysqli_insert_id($koneksi);

for ($i=0; $i<count($cart); $i++) { 
 $id_produk = $cart[$i]['id_produk'];
 $pembelian = $cart[$i]['pembelian'];
 $sisa    =$stok-$pembelian;
 $query = mysqli_query($koneksi, "INSERT INTO tb_detail_order (id_order, id_produk, pembelian) VALUES ('$id_order', '$id_produk', '$pembelian')");
 $query = mysqli_query($koneksi, "UPDATE stok_barang SET stok='$sisa' WHERE id_buku='$id'");
}

// unset session
unset($_SESSION['cart']);
$_SESSION['pesan'] = "Pembelian sedang diproses, terimakasih.";
header('Location: index.php');