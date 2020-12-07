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
                  <h3 class="card-title">DAFTAR SISWA</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <a class="btn btn-app bg-info" data-toggle="modal" data-target="#tambahSiswa">
                        <i class="fas fa-plus"></i>Tambah Siswa
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahSiswa" role="dialog">
                        <div class="modal-dialog modal-lg">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header bg-info">
                            <h4 class="modal-title">Tambah Siswa Baru</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form action="cproses/insert.php?act=<?= md5('csiswa');?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas, Contoh: 12-IPA1" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Wali</label>
                                    <input type="text" name="nWali" class="form-control" placeholder="Masukkan Nama Wali" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                    <hr/>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Nama Wali</th>
                            <th>Status</th>
                            <th width="200px;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $no = 1;
                          foreach ($sr->showSiswa() as $sSiswa) {
                        ?>
                          <tr>
                              <td><?= $no++;?></td>
                              <td><?= $sSiswa['nama'];?></td>
                              <td><?= $sSiswa['alamat'];?></td>
                              <td><?= $sSiswa['kelas'];?></td>
                              <td><?= $sSiswa['nama_wali'];?></td>
                              <td><?= $sSiswa['status'];?></td>
                              <td align="center">
                                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#upSiswa<?= $sSiswa['id_siswa'];?>"><i class="fas fa-edit"></i></button>
                                  <a href="cproses/delete.php?act=<?= md5('delsiswa');?>&id=<?= $sSiswa['id_siswa'];?>" onclick="return confirm('Apa Anda Akan Menghapus Data?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                              </td>
                          </tr>
                          <!-- Modal -->
                          <div class="modal fade" id="upSiswa<?= $sSiswa['id_siswa'];?>" role="dialog">
                              <div class="modal-dialog modal-lg">
                              
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header bg-info">
                                  <h4 class="modal-title">Tambah Siswa Baru</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="cproses/update.php?act=<?= md5('upSiswa');?>&id=<?= $sSiswa['id_siswa'];?>" method="post">
                                  <div class="modal-body">
                                      <div class="form-group">
                                          <label>Nama</label>
                                          <input type="text" name="nama" class="form-control" value="<?= $sSiswa['nama'];?>" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <input type="text" name="alamat" class="form-control" value="<?= $sSiswa['alamat'];?>" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Kelas</label>
                                          <input type="text" name="kelas" class="form-control" value="<?= $sSiswa['kelas'];?>" required>
                                      </div>
                                      <div class="form-group">
                                          <label>Nama Wali</label>
                                          <input type="text" name="nWali" class="form-control" value="<?= $sSiswa['nama_wali'];?>" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
                                      <button type="submit" class="btn btn-primary">SIMPAN</button>
                                  </div>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                        <?php
                          }
                        ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>#</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Kelas</th>
                              <th>Nama Wali</th>
                              <th>Status</th>
                              <th width="200px;">Aksi</th>
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
