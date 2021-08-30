<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-house-user"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Desa Namlea</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php if ($this->session->userdata('level') == 'admin') : ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu
                </div>
                <!-- Nav Item - home
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home</span></a>
            </li> -->

                <!-- Nav Item - penduduk -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Penduduk/show') ?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Penduduk</span></a>
                </li>
                <!-- Nav Item - kelahiran -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kelahiran/show') ?>">
                        <i class="fas fa-fw fa-baby"></i>
                        <span>Kelahiran</span></a>
                </li>
                <!-- Nav Item - kematian -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kematian/show') ?>">
                        <i class="fas fa-fw fa-user-times"></i>
                        <span>Kematian</span></a>
                </li>
                <!-- Nav Item - menikah -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menikah/show') ?>">
                        <i class="fas fa-fw fa-user-friends"></i>
                        <span>Menikah</span></a>
                </li>
                <!-- Nav Item - penduduk datang -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penduduk_datang/show') ?>">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>Penduduk datang</span></a>
                </li>
                <!-- Nav Item - penduduk pindah -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penduduk_pindah/show') ?>">
                        <i class="fas fa-fw fa-people-carry"></i>
                        <span>Penduduk pindah</span></a>
                </li>
                <!-- Nav Item - kepala desa -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kepala_desa/show') ?>">
                        <i class="fas fa-fw fa-user-secret"></i>
                        <span>Kepala desa</span></a>
                </li>
            <?php else : ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Laporan
                </div>
                <!-- Nav Item - penduduk -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penduduk/laporan') ?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Laporan penduduk</span></a>
                </li>
                <!-- Nav Item - kelahiran -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kelahiran/laporan') ?>">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>Laporan kelahiran</span></a>
                </li>
                <!-- Nav Item - kematian -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kematian/laporan') ?>">
                        <i class="fas fa-fw fa-book-dead"></i>
                        <span>Laporan kematian</span></a>
                </li>
                <!-- Nav Item - menikah -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menikah/laporan') ?>">
                        <i class="fas fa-fw fa-user-edit"></i>
                        <span>Laporan menikah</span></a>
                </li>
                <!-- Nav Item - penduduk datang -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penduduk_datang/laporan') ?>">
                        <i class="fas fa-fw fa-walking"></i>
                        <span>Laporan penduduk datang</span></a>
                </li>
                <!-- Nav Item - penduduuk pindah -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penduduk_pindah/laporan') ?>">
                        <i class="fas fa-fw fa-people-arrows"></i>
                        <span>Laporan penduduk pindah</span></a>
                </li>
                <!-- Nav Item - grafik kematian -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/laporan') ?>">
                        <i class="fas fa-fw fa-chart-line"></i>
                        <span>Grafik kematian</span></a>
                </li>
                <!-- Nav Item - grafik kematian -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/grafikkelahiran') ?>">
                        <i class="fas fa-fw fa-chart-line"></i>
                        <span>Grafi kelahiran</span></a>
                </li>
            <?php endif; ?>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan</h6>
                        <a class="collapse-item" href="<?= base_url('penduduk/laporan') ?>">Laporan Penduduk</a>
                        <a class="collapse-item" href="<?= base_url('kelahiran/laporan') ?>">Laporan Kelahiran</a>
                        <a class="collapse-item" href="<?= base_url('kematian/laporan') ?>">Laporan kematian</a>
                        <a class="collapse-item" href="<?= base_url('menikah/laporan') ?>">Laporan Menikah</a>
                        <a class="collapse-item" href="<?= base_url('penduduk_datang/laporan') ?>">Laporan Penduduk Datang</a>
                        <a class="collapse-item" href="<?= base_url('penduduk_pindah/laporan') ?>">Laporan Penduduk Pindah</a>
                        <a class="collapse-item" href="<?= base_url('laporan') ?>">Laporan Penduduk Pindah</a>
                        <a class="collapse-item" href="<?= base_url('Admin/laporan') ?>">Grafik kelahiran dan kematian</a>
                        <a class="collapse-item" href="<?= base_url('Admin/grafikkelahiran') ?>">Grafik kelahiran</a>
                    </div>
                </div>
            </li> -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->