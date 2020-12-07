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
                <h1><b>Siswa</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li class="breadcrumb-item active">Siswa</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">PESAN TERKIRIM</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Penerima (Wali)</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th width="100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;
                            foreach ($sr->showRiwayatPesan() as $rp) {
                          ?>
                          <tr>
                              <td><?= $no++;?></td>
                              <td><?= $rp['nama_wali'];?></td>
                              <td><?= $rp['pesan'];?></td>
                              <td><?= date('l, d M Y - h:i A', strtotime($rp['tanggal_terkirim']));?></td>
                              <td>
                                <?php
                                  if ($rp['status'] == 'Berhasil') {
                                ?>
                                  <small class="badge badge-success"><i class="fas fa-check-double"></i> Berhasil</small>
                                <?php
                                  } else {
                                ?>
                                  <small class="badge badge-danger"><i class="fas fa-check-double"></i> Gagal</small>
                                <?php
                                  }
                                  
                                ?>
                              </td>
                              <td align="center">
                                <a href="cproses/delete.php?act=<?= md5('delriwayat');?>&id=<?= $rp['id_pesan_terkirim'];?>" onclick="return confirm('Apa anda akan menghapus riwayat pesan ini?')" class="btn btn-xs btn-danger"  data-toggle="tooltip" data-placement="top" title="Hapus riwayat pesan INI!"><i class="fas fa-trash"></i></a>
                              </td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Penerima (Wali)</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th width="100px;">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
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
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
