<?php
include('header.php');
?>

<!-- Main Content -->
<div class="main">
    <table style="background-color: transparent;">
        <tr>
            <td>
                <div class="card m-3" style="width: 18.3rem; box-shadow: none;">
                    <img class="card-img-top" src="asset/gambar/buku11.jpg" alt="Card image cap">
                </div>
            </td>
            <td>
                <div class="text" style="width: 622px;">
                    <h1 class="judul"></h1>
                    <h3>Penulis : Tere Liye</h3>
                    <h4>Language : English</h4>
                    <p>Raib adalah seorang remaja putri berusia 15th. Dia mempunyai seorang teman dekat bernama
                        Seli.
                        Raib bisa menghilang. Dia bisa menghilangkan dirinya dengan menutup mata menggunakan kedua
                        tangan.
                        Pada suatu hari dia di keluarkan dari kelas oleh guru.
                        Karena lupa membawa buku. Teman sekelasnya Ali, juga di keluarkan dari kelas.
                        Raib tidak mau terlihat oleh Ali, iseng dia menutup mata dengan
                        kedua tangan. Saat itulah dengan sekejap dia menghilang dan memulai perkenalannya dengan
                        Tamus.
                        Kecelakaan yang menimpa Raib dan Seli sebelum klub menulis dimulai itu membawa Tamus dan
                        Selena terlibat
                        pertarungan hebat sehingga harus memaksa Raib, Seli, dan Ali melewati sebuah lorong hitam ke
                        tempat asing.
                        Kota itu bernama Tishri. Selena, Raib, Seli, dan Ali berjuang mengalahkan Tamus di kota ini.
                        Ternyata Raib adalah pewaris klan bulan pertama yang di besarkan di dunia tanah (BUMI). Dan
                        Seli adalah pewaris
                        klan matahari pertama yang berjalan di atas BUMI. Ali, dia hanyalah makhluk tanah yang diam
                        diam jenius.
                    Mereka berjuang mengalahkan Tamus yang ingin menguasai BUMI.</p>
                </div>
            </td>
            <td style="width: 400px; vertical-align: top;">
                <form class="form m-2" action="" method="POST">
                    <label for="komentar"></label>
                    <textarea class="form-control " id="komentar"
                    style="background-color: rgb(221, 171, 105); color: black;" name="komentar"
                    placeholder="Your review :" rows="6"></textarea>
                    <button class="btn mt-2 float-right" type="submit"
                    style=" background-color: rgb(221, 171, 105); color: black; ">Submit</button>
                </form>
            </td>
        </tr>
    </table>
    <a class="btn ml-3 mr-2 mt-2" href="borrow.php"
    style="border-radius: 50px; background-color: rgb(221, 171, 105); color: black; width: 175px;">
    <h4>Borrow</h4>
</a>&emsp;
<a class="btn mt-2" href="buy.php"
style="border-radius: 50px; background-color: rgb(221, 171, 105); color: black; width: 175px;">
<h4>Buy</h4>
</a>
</div>


<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Klik "Logout" untuk mengakhiri sesi.</div>
        <div class="modal-footer">
            <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="member.php?action=logout">Logout</a>
        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
?>

<script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.judul', { duration: 3, text: 'Bumi' })
</script>
<script type="text/javascript" src="asset/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".card-img-top"), {
        max: 35,
        speed: 5000,
        scale: 1.15,
        glare: true,
    });
</script>
</body>

</html>