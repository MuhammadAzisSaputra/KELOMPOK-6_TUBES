<?php

session_start();


include ('includes/koneksi.php');
if($_SESSION['level'] == 'member') {
    header("location:index.php");
}

# Pagination
# Konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM user_library"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

# LIMIT = awal data, pembatasan data per halaman
# ORDER BY id DESC/ASC = mengurutkan data berdasarkan *
$posting = query("SELECT * FROM user_library LIMIT $awalData, $jumlahDataPerHalaman");
# Jika tombol "cari" ditekan
if (isset($_POST["cari"])) {
    $posting = cari($_POST["keyword"]);
}

include('headeradmin.php');


?>


<!-- ! Main -->
<form action="" method="POST" accept-charset="utf-8">
    <input type="text" name="keyword" size="30" placeholder="Masukkan Keyword Pencarian.." autocomplete="OFF" autofocus="">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br /><br />
  
Berikut adalah akun yang ada di XXX Library :

<br /><br />

<table border="1" class="table table-bordered" >
              <tr>
                
                <th >Username</th>
                <th >Password</th>
                <th >Nama</th>
                <th >Email</th> 
                <th >Level</th> 
               
              </tr>
<?php $i = 1; ?>

<?php

 foreach($posting as $row)
          {
        ?>
      <tr>
      
      <td class="align-middle"><?php echo $row['username']; ?></td>
      <td class="align-middle"><?php echo $row['password']; ?></td>
      <td class="align-middle"><?php echo $row['nama']; ?></td>
      <td class="align-middle"><?php echo $row['email']; ?></td> 
      <td class="align-middle"><?php echo $row['level']; ?></td> 
      
      
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