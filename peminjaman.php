<?php

session_start();

include "includes/koneksi.php";
include('headeradmin.php');
?>


<!-- ! Main -->
<div class="card-body">

                                    <?php
                                        $query = "SELECT * FROM pinjam_Buku";
                                        $hasil = mysqli_query($koneksi, $query);
                                     

                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>Nama</th><th>Email</th><th>Nama Buku</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th>";
                                        echo "</tr>";

                                        foreach ($hasil as $data) {
                                            echo "<tr>";
                                            echo "<td>$data[nama]</td>";
                                            echo "<td>$data[email]</td>";
                                            echo "<td>$data[nama_buku]</td>";
                                            echo "<td>$data[tgl_pinjam]</td>";
                                            echo "<td>$data[tgl_kembali]</td>";
                                        

                                            echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>";
                                            echo "<input hidden name='id_pinjam' type='text' value=$data[id_pinjam]>";
                                            echo "<button type='submit' name='btnHapus' class='btn btn-danger';>Delete</button></form></td>";


                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                     
                                    ?>

                                    <?php
                                        if(isset($_POST['btnHapus'])){

                                        //inisiasi variabel untuk menampung isian id
                                        $id_pinjam=$_POST['id_pinjam'];

                                        if ($koneksi){
                                            $sql = "DELETE FROM pinjam_buku WHERE id_pinjam=$id_pinjam";
                                            mysqli_query($koneksi,$sql);
                                            echo "<p class='alert alert-success text-center'><b>Data Akun Berhasil Dihapus.</b></p>";
                                        } elseif ($koneksi->connect_error){
                                            echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $koneksi->connect_error. "</b></p>";
                                        }
                                    }
                                   ?>

                                </div>
                            </div>
                        </div>



</form> 


</body>

</html>