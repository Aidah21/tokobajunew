<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $nama; ?> <sup><?= $role ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <hr class="sidebar-divider d-none d-md-block">
            

            
            <!-- Nav Item - Tables -->
            <?php if($role == "kasir") : ?>
            <li class="nav-item <?= $halaman == 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_home_kasir.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Home</span></a>
            </li>
            <?php endif; ?>

            <?php if($role == "kasir") : ?>
            <li class="nav-item <?= $halaman == 'data baju' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_list_baju.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Baju</span>
                </a>
            </li>
            <?php endif; ?>

          <?php if($role == "kasir") : ?>
            <li class="nav-item <?= $halaman == 'data pelanggan' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_pelanggan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Pelanggan</span>
                </a>
            </li>
            <?php endif; ?>


            
            <!-- Nav Item - Tables -->
            <?php if($role == "owner") : ?>
            <li class="nav-item <?= $halaman == 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_home_owner.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Home</span></a>
            </li>
            <?php endif; ?>

            
            <?php if($role == "owner") : ?>
            <li class="nav-item <?= $halaman == 'laporan' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_list_transaksi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan Transaksi</span></a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_home_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Home</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'data baju' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_barang.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Baju</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'data transaksi' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_transaksi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Transaksi</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'data pelanggan' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_pelanggan.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Pelanggan</span>
                </a>
            </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
