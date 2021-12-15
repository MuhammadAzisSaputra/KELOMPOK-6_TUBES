<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="start.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link href="ubahuser.css" rel="stylesheet">
  <style>
  .form-password{
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
  }

.form-password{
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
a {
  text-decoration: none;
}
body {
  height: 100vh;
    background-image: url(https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGlicmFyeXxlbnwwfHwwfHw%3D&w=1000&q=80);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: left;
}
#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #595132;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #595132, #C4B17C);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #C4B17C;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #C4B17C;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #595132, #C4B17C);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
</style>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#frmDaftar').validate({
      rules: {
        username:{
          minlength:3,
          maxlength:10
        },
        password:{
          minlength:9,
          maxlength:20
        },
        nama:{
          minlength:3,
          maxlength:25
        },
        email:{
          email:true
        }
        alamat:{
          alamat:true,
          minlength:3,
        }
      },
      messages:{
        username:{
          required: "Username harus diisi",
          minlength: "Username minimal 3 karakter",
          maxlength: "Username maximal 10 karakter"
        },
        password:{
          required: "Password harus diisi",
          minlength: "Password minimal 9 karakter",
          maxlength: "Password maximal 20 karakter"
        },
        nama:{
          required: "Nama harus diisi",
          minlength: "Nama minimal 3 karakter",
          maxlength: "Nama maximal 25 karakter"
        },
        email:{
          required: "Email harus diisi",
          email: "Format Email tidak sesuai"
         }
         alamat:{
          required: "Alamat harus diisi",
          minlength: "Alamat minimal 3 karakter",
         }
       }
     });
  });
  </script>

  <title>Update Akun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>UPDATE</h2>
        <div class="underline-title"></div>
      </div>
      <form action="update.php" method="post" id="frmDaftar"> 
        <?php
        include("includes/koneksi.php");
        $id_member =$_POST['id_member'];
        $query="SELECT * FROM user_library WHERE id_member = $id_member";
        $hasil= mysqli_query ($koneksi, $query);

        foreach ($hasil as $data) {
          # code...
        

        ?>
        <input type="text" name="id_member" hidden value="<?php echo "$data[id_member]";?>">
        <label for="nama" style="padding-top:13px">&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="nama" class="form-content" type="text" name="nama" value="<?php echo "$data[nama]";?>"  autocomplete="on" required />
        <div class="form-border"></div>
        <label for="email" style="padding-top:22px">&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input id="email" class="form-content" type="email" name="email" value="<?php echo "$data[email]";?>" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="username" style="padding-top:13px">&nbsp;Username</label>
        <input id="username" class="form-content" type="text" name="username" value="<?php echo "$data[username]";?>" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password</label>
        <input id="password" class="form-password" type="password" name="password" value="<?php echo "$data[password]";?>"required />
        <div class="form-border">

    <center><input id="submit-btn" type="submit" name="submit" value="UPDATE" /></center>
    <?php } ?>
  </form>

  </div>
  </div>

</body>
</html>