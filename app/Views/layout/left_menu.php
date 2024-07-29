    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/logo.png">
            </div>
            <div class="sidebar-brand-text mx-3">DISKOMINFO KAB.TOBA</div>
        </a>
        <style>
            .img-profile {
                width: 50px;
                /* Atur ukuran gambar sesuai kebutuhan, misalnya 50px */
                height: 55px;
                /* Atur ukuran gambar sesuai kebutuhan, misalnya 50px */
            }
        </style>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider my-0"> -->

        <!-- Nav Item - Dashboard -->
        <li class="nav-item dashboard">
            <a class="nav-link" href="<?= base_url() ?>Dashboard/index">
                <img class="img-profile1 rounded-circle" src="<?= base_url() ?>image/icon/dashboard.png">
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>inventaris/index">
                <img class="img-profile1 rounded-circle" src="<?= base_url() ?>image/icon/material-management.png">
                <span>Inventaris</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>categoris/index">
                <img class="img-profile1 rounded-circle" src="<?= base_url() ?>image/icon/categories.png">
                <span>Categories</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>location/index">
                <img class="img-profile1 rounded-circle" src="<?= base_url() ?>image/icon/location.png">
                <span>Location</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->