<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'library_input');

if (!$koneksi) {
    die ("Koneksi gagal. " . mysqli_connect_error()); 
  }

  if (!isset($_GET['cari'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM stok_buku");
  } else {
    $query = mysqli_query($koneksi, "SELECT * FROM stok_buku WHERE judul LIKE '%" . $_GET['cari'] . "%'");
  }

  require_once 'header.php';

    if (isset($_SESSION['pesan'])) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              ' . $_SESSION['pesan'] . '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>';

      unset($_SESSION['pesan']);
    }
    ?>

    <div class="container mt-5">

      <?php require_once 'cart.php'; ?>

      <div class="row mb-2">
        <div class="col">
          <h4>Daftar Produk</h4>
        </div>
      </div>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Harga</th>
            <th scope="col">Beli</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          while ($dt = $query->fetch_assoc()) :
            ?>

            <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
              <input type="hidden" name="id_produk" value="<?= $dt['id_buku']; ?>"></input>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $dt['judul']; ?></td>
                <td><?= $dt['harga']; ?></td>
                <td width="106">
                  <input class="form-control form-control-sm" type="number" name="pembelian" value="1" min="1"></td>
                  <td>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </td>
                </tr>
              </form>

            <?php endwhile; ?>

          </tbody>
        </table>

        <a href="laporan.php"><button class="btn btn-danger">Lihat Laporan</button></a>
      </div>

<?php require_once 'footer.php'; ?>