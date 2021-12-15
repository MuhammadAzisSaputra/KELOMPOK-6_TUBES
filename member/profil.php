<?php
include('header.php');
include('includes/koneksi.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: index.php");
} else if ($_SESSION['level'] != 'member') {
    header("Location: index.php");
}

$nama = null;
$email = null;
$username = null;
$password = null;
$alamat = null;
$no_telpon = null;

if ($_GET['action'] == 'edit') {
    $id_member = $_GET['id_member'];
    $id = $_SESSION['id_member'];
    $data = $conn->query("SELECT * FROM user_library t WHERE t.id = $id_user AND t.id = $id ORDER BY t.status");

    while ($list = $data->fetch_array(MYSQLI_ASSOC)) :
        $judul = $list['judul'];
        $tempat = $list['tempat'];
        $waktu = $list['waktu'];
        $kategori = $list['kategori'];
        $keterangan = $list['deskripsi'];
        $status = $list['status'];
    endwhile;
}
?>

if ($_GET['action'] == 'edit')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php
            if ($_GET['aksi'] == 'edit') { ?>
                <form class="needs-validation" novalidate method="POST" action="list.php?aksi=edit&id=<?= $id ?>">
                    <?php } else { ?>
                    <form class="needs-validation" novalidate method="POST" action="list.php?aksi=tambah">
                        <?php } ?>
                        <h5 class="modal-title">Tambah List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="judul">Judul Kegiatan</label>
                                <input type="text" class="form-control" id="judul" value="<?= $judul ?>" name="judul"
                                    placeholder="Judul Kegiatan" required>
                                <div class="invalid-feedback">
                                    Silahkan Isi Judul Kegiatan Anda
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="tempat">Tempat</label>
                                <input type="text" class="form-control" value="<?= $tempat ?>" name="tempat" id="tempat"
                                    placeholder="Tempat" required>
                                <div class="invalid-feedback">
                                    Silahkan Isi Tempat Kegiatan Anda
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="waktu">Tenggat waktu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input type="datetime-local" class="form-control" id="waktu" value="<?= date("
                                        Y-m-d", strtotime($waktu)) ?>T
                                    <?= date("h:i", strtotime($waktu)) ?>" name="waktu" placeholder="Tanggal / Waktu"
                                    aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Silahkan isi deadline waktu to do anda
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="custom-select" name="kategori" id="kategori" required>
                                <option value="<?= $kategori ?>" selected>
                                    <?= $kategori ?>
                                </option>
                                <option value="Tugas Kuliah">Tugas Kuliah</option>
                                <option value="Magang">Magang</option>
                                <option value="Lain - Lain">Lain - Lain</option>
                            </select>
                            <div class="invalid-feedback">Silahkan isi Kategori kegiatan anda</div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"
                                required>Keterangan Kegiatan</textarea>
                            <div class="invalid-feedback">\
                                <?= $keterangan ?>
                            </div>
                        </div>
                        <?php
                    if ($_GET['aksi'] == 'edit') { ?>
                        <label for="status">status</label>
                        <select class="custom-select" name="status" id="status" required>
                            <option value="<?= $status ?>" selected>
                                <?= $status ?>
                            </option>
                            <option value="Belum Selesai">Belum Selesai</option>
                            <option value="Progress">Progress</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                        <?php } ?>
                        <button type="submit" class="btn btn-primary mt-5">Save changes</button>
                        <a href="dashboard.php" class="btn btn-secondary mt-5">Close</a>
                    </form>
            </div>
        </div>
    </div>