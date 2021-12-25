<?php

session_start();

include "includes/koneksi.php";
include('headeradmin.php');
?>


<!-- ! Main -->
<div class="card-body">

                                    <?php
                                        $query = "SELECT * FROM beli_buku";
                                        $hasil = mysqli_query($koneksi, $query);
                                     

                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>Total Item</th><th>Total Bayar</th><th>Tanggal Transaksi</th>";
                                        echo "</tr>";

                                        foreach ($hasil as $data) {
                                            echo "<tr>";
                                            echo "<td>$data[total_item]</td>";
                                            echo "<td>$data[total_bayar]</td>";
                                            echo "<td>$data[tgl_transaksi]</td>";
                                        

                                            echo "<td><form onsubmit=\"return confirm ('Anda Yakin Mau Menghapus Data?');\" method='POST'>";
                                            echo "<input hidden name='id_order' type='text' value=$data[id_order]>";
                                            echo "<button type='submit' name='btnHapus' class='btn btn-danger';>Delete</button></form></td>";


                                            echo "</tr>";
                                        }

                                        echo "</table>";
                                     
                                    ?>

                                    <?php
                                        if(isset($_POST['btnHapus'])){

                                        //inisiasi variabel untuk menampung isian id
                                        $id_order=$_POST['id_order'];

                                        if ($koneksi){
                                            $sql = "DELETE FROM beli_buku WHERE id_order=$id_order";
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