<!DOCTYPE html>
<html>
  <?php
    include 'pages/template/head.php';
  ?>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php
    include 'pages/template/navbar.php';
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php
    include 'pages/template/sidebar.php';
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1><b>SISTEM INFORMASI PEMBAYARAN SPP</b><br/><span style="font-size: 18px;">Sekolah Tamansiswa Bah Jambi</span></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><i class="fas fa-home"></i> HOME</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-3" style="background-color: #007bff70;">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
              <?php
                foreach ($sr->countSiswa() as $cs) {
                  # code...
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Siswa</span>
                <span class="info-box-number"><?= $cs['jsiswa'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-3" style="background-color: #007bff70;">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-address-book"></i></span>
              <?php
                foreach ($sr->countKontak() as $ck) {
                  # code...
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Kontak</span>
                <span class="info-box-number"><?= $ck['jkontak'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-3" style="background-color: #007bff70;">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users-cog"></i></span>
              <?php
                foreach ($sr->countGroup() as $cg) {
                  # code...
                }
              ?>
              <div class="info-box-content">
                <span class="info-box-text">Group</span>
                <span class="info-box-number"><?= $cg['jgroup'];?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3" style="background-color: #007bff70;">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Saldo Pesan</span>
                <span class="info-box-number"><?= $value1;?> SMS <i style="font-size: 12px; color: red;"> (Berlaku hingga : <?= $value2;?>)</i></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Selamat Datang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                Akses anda sebagai ADMIN. Anda bisa mengirim pesan SMS Group maupun By Person maupun mengelola data Siswa dan Orang Tua wali.
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">
                Footer
              </div> -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php
    include 'pages/template/footer.php';
    ?>
  <!-- /.Footer -->
</div>
<!-- ./wrapper -->

<script src="vendor/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vendor/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="vendor/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="vendor/plugins/moment/moment.min.js"></script>
<script src="vendor/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vendor/dist/js/demo.js"></script>
</body>
</html>
