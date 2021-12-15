<?php
require_once 'includes/koneksi.php';
require_once 'header.php';
?>

<div class="container mt-5">
 <h4>Laporan Transaksi</h4>
 <br>
 
 <a href="buy.php">
  <button class="btn btn-success btn-sm">
   Transaksi
  </button>
 </a>

 <table class="table table-bordered mt-3">
  <thead align="center">
   <tr>
    <th>#</th>
    <th>Tgl. Transaksi</th>
    <th>Total Item</th>
    <th>Total Bayar</th>
   </tr>
  </thead>
  <tbody align="center">

   <?php
   $query = mysqli_query($koneksi, "SELECT * FROM beli_buku");
   $no = 1;
   while ($dt = $query->fetch_assoc()) :
    ?>

    <tr>
     <td><?= $no++; ?></td>
     <td><?= $dt['tgl_transaksi']; ?></td>
     <td><?= $dt['total_item']; ?></td>
     <td><?= $dt['total_bayar']; ?></td>
    </tr>

   <?php endwhile; ?>

  </tbody>
 </table>
</div>
