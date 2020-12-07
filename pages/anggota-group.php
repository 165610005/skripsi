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
                <h1><b>ANGGOTA GROUP</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li class="breadcrumb-item active">Anggota Group</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <a href="?akses=<?= md5('kontak');?>" class="btn btn-info">Kembali</a>
        <hr/>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                  <div class="card-header">
                    <?php
                        foreach ($sr->showGroupByID($_GET['id']) as $ktg) {
                            # code...
                        }
                    ?>
                    <h3 class="card-title">Anggota Group <?= $ktg['nama_group'];?></h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Wali</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nomor HP</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;
                            foreach ($sr->showAnggota($_GET['id']) as $sk) {
                          ?>
                          <tr>
                              <td><?= $no++;?></td>
                              <td><?= $sk['nama_kontak'];?></td>
                              <td><?= $sk['nama'];?></td>
                              <td><?= $sk['kelas'];?></td>
                              <td><?= $sk['no_hp'];?></td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Wali</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nomor HP</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
              </div>
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

<!-- jQuery -->
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
<!-- DataTables -->
<script src="vendor/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="vendor/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vendor/dist/js/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

  })
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
