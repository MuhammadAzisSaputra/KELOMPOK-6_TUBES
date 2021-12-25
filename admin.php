<?php

session_start();


include ('includes/koneksi.php');
if($_SESSION['level'] == 'member') {
    header("location:index.php");
}

# Pagination
# Konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM stok_buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

# LIMIT = awal data, pembatasan data per halaman
# ORDER BY id DESC/ASC = mengurutkan data berdasarkan *
$posting = query("SELECT * FROM stok_Buku LIMIT $awalData, $jumlahDataPerHalaman");
# Jika tombol "cari" ditekan
if (isset($_POST["cari"])) {
    $posting = cari($_POST["keyword"]);
}

include('headeradmin.php');


?>


<!-- ! Main -->
<h3>Tambah Stok Buku</h3>
	<form method="POST" action="tambah_buku.php">
		<table border="1" class="table table-bordered">
        <tr>			
				<td>Id Buku</td>
				<td><input type="text" name="id_buku"></td>
			</tr>
			<tr>			
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
            <tr>			
				<td>Genre</td>
				<td><input type="text" name="genre"></td>
			</tr>
            <tr>			
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>			
				<td>Pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr>
				<td>Tanggal Terbit</td>
				<td><input type="number" name="tgl_terbit"></td>
			</tr>
            <tr>			
				<td>Penerbit</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
    <br />
Berikut adalah stok buku yang ada di XXX Library :

<br /><br />

<table border="1" class="table table-bordered" >
    <tr>

        <th >Judul </th>
        <th >Genre </th>
        <th >Harga </th>
        <th >Pengarang </th> 
        <th >Tanggal Terbit </th> 
        <th> Penerbit </th>
        
    </tr>
    <?php $i = 1; ?>

    <?php

    foreach($posting as $row)
    {
        ?>
        <tr>

          <td class="align-middle"><?php echo $row['judul']; ?></td>
          <td class="align-middle"><?php echo $row['genre']; ?></td>
          <td class="align-middle"><?php echo $row['harga']; ?></td>
          <td class="align-middle"><?php echo $row['pengarang']; ?></td> 
          <td class="align-middle"><?php echo $row['tgl_terbit']; ?></td> 
          <td class="align-middle"><?php echo $row['penerbit']; ?></td> 
      </tr>
      <?php $i++; ?>
  <?php } ?>
</table>


<?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>" title="Back">&laquo;</a>
<?php endif; ?>

<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif ) : ?>
      <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
  <?php else : ?>
      <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
  <?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>" title="Next">&raquo;</a>
<?php endif; ?>


</form> 


</body>

</html>