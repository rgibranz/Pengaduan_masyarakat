<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if ($this->session->userdata('level') == 'admin'): ?>
        
        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/masyarakat') ?>">Masyarakat</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/petugas') ?>">Petugas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('login/logout') ?>">logout</a>
        </li>

    <?php elseif ($this->session->userdata('level') == 'petugas'): ?>

        <!-- Heading -->
        <div class="sidebar-heading">
            Petugas
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('petugas') ?>">Pengaduan</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('login/logout') ?>">logout</a>
        </li>

    <?php elseif ($this->session->userdata('level') == 'masyarakat'): ?>

        <div class="sidebar-heading">
            Masyarakat
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('masyarakat') ?>">">Pengaduan</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('masyarakat/tulis_pengaduan') ?>">">Tulis Pengaduan</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('login/logout') ?>">logout</a>

        </li>
    <?php endif ?>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>
<!-- End of Sidebar -->