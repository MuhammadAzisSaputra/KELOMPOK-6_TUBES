 <?php
 include('header.php');
 ?>

 <!-- Main Content -->
 <div class="main">
    <table style="background-color: transparent;">
        <tr>
            <td>
                <div class="card m-3" style="width: 18.3rem; box-shadow: none;">
                    <img class="card-img-top" src="asset/gambar/buku5.jpg" alt="Card image cap">
                </div>
            </td>
            <td>
                <div class="text" style="width: 622px;">
                    <h1 class="judul"></h1>
                    <h3>Penulis : Ichiro Kishimi & Fumitake Koga</h3>
                    <h4>Language : English</h4>
                    <p>Berani tidak disukai adalah sebuah buku tentang dialog naratif lima malam antara seorang
                        filsuf yang
                        meyakini bahwa dunia ini sederhana – sehingga kebahagiaan dapat diraih sekejap mata, dengan
                        seorang
                        pemuda yang merasa tidak puas dengan hidupnya – memandang dunia ini sebagai gumpalan
                        kontradiksi
                        sehingga gagasan apapun tentang kebahagiaan adalah hal yang tidak masuk akal baginya.

                        Dialog dua karakter pada buku ini berlangsung seperti dialog Socrates dengan murid-muridnya.
                        Sang filsuf
                        tidak berlagak seperti guru dogmatis yang terburu-buru untuk menghantarkan jawaban dan
                        kepastian sebuah
                        pemahman kepada sang pemuda. Sebagai gantinya dia memberikan ruang yang lebar dan terbuka
                        sehingga pemuda
                        tersebut sampai pada jawaban yang ingin dia cari melalui usahanya sendiri.

                        Sang pemuda juga tidak berlagak seperti murid (atau bawahan) baik-baik yang merasa
                        “membantah” bukanlah
                        sikap pelanggaran terhadap etika. Alih-alih, ia lebih menyerupai kaum Bani Israil yang terus
                        mengganti
                        pernyataan atau perintah Musa dengan pertanyaan, berulang-ulang.
                    </p>
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
    gsap.to('.judul', { duration: 3, text: 'Berani Tidak Disukai' })
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