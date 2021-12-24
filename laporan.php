<?php
include ('includes/koneksi.php');
include ('header.php');
?>

<div class="container my-10">
    <h4 style="text-align: center; margin-bottom: 10px; margin-top: 10px;">Laporan Transaksi</h4>
    <br>

    <table class="table table-bordered mt-3">
      <thead align="center">
       <tr>
        <th>No</th>
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

<center>
    <a href="tranksaksi.php">
        <button class="btn btn-success btn-sm">
           Transaksi
       </button>
   </a>
</center>
</div><br><br>

<?php 
include ('footer.php'); 
?>
