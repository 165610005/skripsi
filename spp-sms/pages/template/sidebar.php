<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?akses=<?= md5('home');?>" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
        <span class="brand-image img-circle elevation-3" style="opacity: .8; margin-top: 6px;"><b>TAMANSISWA Bah Jambi</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item bg-primary">
            <a href="?akses=<?= md5('home');?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                HOME
                <span class="right badge badge-success">Online</span>
              </p>
            </a>
          </li>
          <li class="nav-header">PESAN</li>
          <li class="nav-item">
            <a href="?akses=<?= md5('pesan-personal');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-envelope"></i>
              <p>
                Kirim Pesan Personal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?akses=<?= md5('pesan-masal');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Kirim Pesan Masal
              </p>
            </a>
          </li>
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
            <a href="?akses=<?= md5('kontak');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-address-book"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?akses=<?= md5('siswa');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-users"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?akses=<?= md5('template-pesan');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-cogs"></i>
              <p>
                Template Pesan
              </p>
            </a>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
            <a href="?akses=<?= md5('pesan-terkirim');?>" class="nav-link">
              <i style="color: #007bff;" class="nav-icon fas fa-file-invoice"></i>
              <p>
                Pesan Terkirim
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>