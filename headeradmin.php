<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MyLibrary| Dashboard Admin</title>
    <!-- ICON BAR -->
    <link rel="shortcut icon" href="asset/gambar/logo.png" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="asset/css/style.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Chart library -->
    <script src="asset/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="asset/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="asset/js/script.js"></script>
</head>
<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
      <!-- ! Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="admin.php" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">My</span>
                        <span class="logo-subtitle">Library</span>
                    </div>

                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                    <a class="dropdown-item" href="admin.php">Stok Buku</a>
                    <a class="dropdown-item" href="akun.php">Akun</a>
                    <a class="dropdown-item" href="pembelian.php">Pembelian</a>
                    <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>


                        </li>
                        <ul class="cat-sub-menu">

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
                <span class="sidebar-user-img">
                    <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title"><?php echo $_SESSION['username'] ?></span>
                    </div>
                </a>
            </ul>
        </div>
    </aside>
    <div class="main-wrapper">
        <!-- ! Main nav -->

        <nav class="main-nav--bg">
          <div class="container main-nav">
            <div class="main-nav-start">   
            </div>
            <div class="main-nav-end">  
            </button>
            <div class="notification-wrapper">
            </button>
            <ul class="users-item-dropdown notification-dropdown dropdown">
            
        
</ul>
</div>
<h3>Selamat Datang <?php echo $_SESSION['username'] ?></h3>
<div class="nav-user-wrapper">
    <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
      <span class="sr-only">My profile</span>
      <span class="nav-user-img">
        <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
        </span>
    </button>
    <ul class="users-item-dropdown nav-user-dropdown dropdown">
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-footer">
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</ul>
</div>
</div>
</div>
</nav>
<br />