<?php   
                            include ("includes/koneksi.php");
                            if ($_GET['action'] == 'login') {

                                $username = $_POST['username'];
                                $password = $_POST['password'];
                            
                                $login = mysqli_query($koneksi, "SELECT * FROM user_library WHERE username='$username' and password='$password'");
                                $cek = mysqli_num_rows($login);
                                session_destroy();
                                session_start();
                            

                                if(!$query){
                                die("Query gagal " . mysqli_error($koneksi));
                                }

                                if(!empty($user_login) && (!empty($pass_login))){
                                if($count==0){
                                    echo "<script>alert ('Username tidak ditemukan') </script>";
                                } else {
                                    while ($row = mysqli_fetch_array($query)){
                                    $user = $row['username'];
                                    $pass = $row['password'];
                                    $nama = $row['Nama'];
                                    $email = $row['email']; 
                                    $level = $row['level'];
                                    }

                                    if($user_login == $user && $pass_login == $pass && $level=="admin"){      
                                    header ("Location:admin.php");
                                    $_SESSION['username'] = $user;
                                    $_SESSION['Nama'] = $nama;
                                    $_SESSION['email'] = $email;
                                    $_SESSION['level'] = $level;
                                    } 
                                    else if($user_login == $user && $pass_login == $pass && $level=="member"){      
                                    header ("Location:user.php");
                                    $_SESSION['username'] = $user;
                                    $_SESSION['Nama'] = $nama;
                                    $_SESSION['email'] = $email;
                                    $_SESSION['level'] = $level;
                                    } 

                                    else {
                                    echo "<script>alert ('User tidak ditemukan') </script>";
                                    }
                                }
                                }
                                else {
                                if(empty($user_login) || empty($pass_login)){
                                    echo "<script>alert ('Username dan Password tidak boleh kosong') </script>";
                                    }
                                }
                            }
                        ?>
