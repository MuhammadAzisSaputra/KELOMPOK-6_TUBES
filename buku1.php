<?php
include('header.php');
?>
<!-- Main Content -->
<div class="main">
    <table style="background-color: transparent;">
        <tr>
            <td>
                <div class="card m-3" style="width: 18.3rem; box-shadow: none;">
                    <img class="card-img-top" src="asset/gambar/buku1.jpg" alt="Card image cap">
                </div>
            </td>
            <td>
                <div class="text" style="width: 622px;">
                    <h1 class="judul"></h1>
                    <h3>Penulis : Dhia'an Farah</h3>
                    <h4>Language : English</h4>
                    <p>Novel Dikta dan Hukum bercerita tentang tokoh bernama Dikta yang merupakan seorang mahasiswa
                        hukum tingkat akhir di
                        salah satu universitas terkenal dan ternama dan ia termasuk mahasiswa yang pintar. Dikta ini
                        digambarkan sebagai
                        tokoh yang sempurna dan idaman para wanita.

                        Sedangkan Nadhira adalah seorang anak SMA kelas 12 yang memiliki karakter mager dan pemalas.
                        Berbanding terbalik
                        dengan Dikta yang memiliki sifat disiplin dan serius, sedangkan Nadhira suka mengeluh dan
                        terkenal banyak mau dan
                        sedikit keras kepala.

                        Dikta dan Nadhira seperti langit dan bumi, namun anehnya mereka akhirnya bisa saling
                        melengkapi satu sama lain.
                        Meskipun Dikta memiliki sifat yang dingin, namun dirinya kerap membantu tugas- tugas sekolah
                        Nadhira.

                        Rupanya mereka adalah teman dari kecil sampai akhirnya harus terjebak dalam perjodohan dari
                        orang tua mereka.
                        Hubungan keduanya tersebut semakin rumit karena Nadhira sudah memiliki kekasih hati. Begitu
                        pula Dikta yang hanya
                    menganggap Nadhira sebagai seorang adik dan teman masa kecil saja.</p>
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
</div><br>

<?php
include('footer.php');
?>

<script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.judul', { duration: 3, text: 'Dikta & Hukum' })
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