
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL; ?>"  class="brand-link">
      <img src="<?= BASE_URL ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AKU SEKOLAH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASE_URL ?>/dist/img/users.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">USERS</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?= ($data['title'] == "Dashboard" ? 'menu-is-opening menu-open' : '') ?>">
            <a href="<?= BASE_URL; ?>/dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if($_SESSION["user_login"]['role'] == "ADMIN"){ ?>
          <li class="nav-item <?= ($data['title'] == "Master" ? 'menu-is-opening menu-open' : '') ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                MASTER DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/masteruser" class="nav-link <?= ($data['title_page'] == "Data Master User" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>USERS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/masterguru" class="nav-link <?= ($data['title_page'] == "Data Master Guru" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>GURU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/mastersiswa" class="nav-link <?= ($data['title_page'] == "Data Master Siswa" || $data['title_page'] == "Isi Raport" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SISWA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/masterkelas" class="nav-link <?= ($data['title_page'] == "Data Master Kelas" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KELAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/mastermatpel" class="nav-link <?= ($data['title_page'] == "Data Master Mata Pelajaran" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MATA PELAJARAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL; ?>/masterekstra" class="nav-link <?= ($data['title_page'] == "Data Master Bakat Minat" ? 'active' : '') ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BAKAT MINAT</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= BASE_URL; ?>/emosisiswa" class="nav-link <?= ($data['title_page'] == "Emosi Siswa" ? 'active' : '') ?> ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                INPUT EMOSI
                <!-- <span class="badge badge-info right">2</span> -->
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-header d-none">RAPOR SISWA</li>
          <li class="nav-item d-none">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                RAPOR
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <?php if($_SESSION["user_login"]['role'] == "ADMIN"){ ?>
          <li class="nav-header">PENGATURAN</li>
          <li class="nav-item <?= ($data['title'] == "Pegaturan" ? 'menu-is-opening menu-open' : '') ?>">
            <a href="<?= BASE_URL; ?>/pengaturantahunajaran" class="nav-link <?= ($data['title_page'] == "Tahun Ajaran" ? 'active' : '') ?> ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                TAHUN AJARAN
              </p>
            </a>
          </li>
           <li class="nav-item <?= ($data['title'] == "Pegaturan" ? 'menu-is-opening menu-open' : '') ?>">
            <!-- <a href="<?= BASE_URL; ?>/dashboard" class="nav-link "> -->
            <a href="<?= BASE_URL; ?>/masterpengumuman" class="nav-link <?= ($data['title_page'] == "Pengumuman" ? 'active' : '') ?> ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                PENGUMUMAN
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?= BASE_URL; ?>/login/logout" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                LOG OUT
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
    
  <?php 
    // include 'modal-tahun-ajaran.php'; 
  ?>