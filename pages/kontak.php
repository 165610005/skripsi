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
                <h1><b>Kontak</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li class="breadcrumb-item active">Kontak</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">DAFTAR KONTAK</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <a class="btn btn-app bg-info" data-toggle="modal" data-target="#tambahKontak">
                      <i class="fas fa-plus"></i>Tambah Kontak Baru
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahKontak" role="dialog">
                      <div class="modal-dialog modal-lg">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header bg-info">
                            <h4 class="modal-title">Tambah Kontak</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form action="cproses/insert.php?act=<?= md5('ckontak');?>" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Nama Siswa</label>
                                <select class="form-control select2" name="id_siswa" data-placeholder="Cari nama group untuk pesan masal" required style="width: 100%;">
                                  <option value=""></option>
                                  <?php
                                    foreach ($sr->showSiswa() as $ids) {
                                  ?>
                                    <option value="<?= $ids['id_siswa'];?>"><?= $ids['nama'];?></option>
                                  <?php
                                    }
                                  ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Kontak (Nama Wali)</label>
                                <input type="text" name="nWali" class="form-control" placeholder="Masukkan Nama Wali" required>
                              </div>
                              <div class="form-group">
                                <label>Nomor HP (Aktif)</label>
                                <input type="number" name="nHp" class="form-control" placeholder="Masukkan Nomor HP (Hanya Angka : 081234567891)" required>
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
                                <th>Nama Kontak</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nomor HP</th>
                                <th width="110px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;
                            foreach ($sr->showKontak() as $sk) {
                          ?>
                          <tr>
                              <td><?= $no++;?></td>
                              <td><?= $sk['nama_kontak'];?></td>
                              <td><?= $sk['nama'];?></td>
                              <td><?= $sk['kelas'];?></td>
                              <td><?= $sk['no_hp'];?></td>
                              <td align="center">
                                <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#updateKontak<?= $sk['id_kontak'];?>" data-toggle="tooltip" data-placement="top" title="Edit Kontak!"><i class="fas fa-edit"></i></button>
                                <a href="cproses/delete.php?act=<?= md5('delkontak');?>&id=<?= $sk['id_kontak'];?>" onclick="return confirm('Apa Anda Akan Menghapus Data?')" class="btn btn-xs btn-danger"  data-toggle="tooltip" data-placement="top" title="Hapus Kontak!"><i class="fas fa-trash"></i></a>
                                <a href="?akses=<?= md5('pesan-personal');?>&id=<?= $sk['id_kontak'];?>" class="btn btn-xs btn-secondary" data-toggle="tooltip" data-placement="top" title="Kirim Pesan ke <?= $sk['nama_kontak'];?>!"><i class="fas fa-envelope"></i></a>
                              </td>
                          </tr>
                          <!-- Modal -->
                          <div class="modal fade" id="updateKontak<?= $sk['id_kontak'];?>" role="dialog">
                            <div class="modal-dialog modal-lg">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header bg-info">
                                  <h4 class="modal-title">Update Kontak</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form action="cproses/update.php?act=<?= md5('upKontak');?>&id=<?= $sk['id_kontak'];?>" method="post">
                                  <div class="modal-body">
                                    <div class="form-group">
                                      <label>Nama Siswa</label>
                                      <select class="form-control select2" name="id_siswa" data-placeholder="Cari nama group untuk pesan masal" required style="width: 100%;">
                                        <option value="<?= $sk['id_siswa'];?>" selected><?= $sk['nama'];?></option>
                                        <?php
                                          foreach ($sr->showSiswa() as $uids) {
                                        ?>
                                          <option value="<?= $uids['id_siswa'];?>"><?= $uids['nama'];?></option>
                                        <?php
                                          }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label>Kontak (Nama Wali)</label>
                                      <input type="text" name="nWali" class="form-control" value="<?= $sk['nama_kontak'];?>" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Nomor HP (Aktif)</label>
                                      <input type="number" name="nHp" class="form-control" value="<?= $sk['no_hp'];?>" required>
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
                                <th>Nama Kontak</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nomor HP</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">GROUP</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <a class="btn btn-app bg-info" data-toggle="modal" data-target="#tambahGroup">
                      <i class="fas fa-plus"></i>Tambah Group Baru
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahGroup" role="dialog">
                      <div class="modal-dialog modal-lg">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header bg-info">
                            <h4 class="modal-title">Tambah Group</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form action="cproses/insert.php?act=<?= md5('cgroup');?>" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Group" required>
                              </div>
                              <div class="form-group">
                                <label>keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan Group" required>
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
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Group</th>
                                <th>Anggota</th>
                                <th>Keterangan</th>
                                <th width="170px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $ng = 1;
                            foreach ($sr->showGroup() as $sg) {
                          ?>
                          <tr>
                              <td><?= $ng++;?></td>
                              <td><?= $sg['nama_group'];?></td>
                              <?php
                                foreach ($sr->countAnggotaByGroup($sg['id_group']) as $cg) {
                                  # code...
                                }
                              ?>
                              <td><?= $cg['ja'];?> &nbsp <i style="color: blue; font-size:14px;" class="fas fa-user"></i></td>
                              <td><?= $sg['keterangan'];?></td>
                              <td align="center">
                                <a href="?akses=<?= md5('anggota-group');?>&id=<?= $sg['id_group'];?>" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="Lihat Anggota!"><i class="fas fa-eye"></i></a>
                                <a href="?akses=<?= md5('tambah-anggota');?>&id=<?= $sg['id_group'];?>" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Anggota!"><i class="fas fa-edit"></i></a>
                                <a href="cproses/delete.php?act=<?= md5('delgroup');?>&id=<?= $sg['id_group'];?>" onclick="return confirm('Apa Anda Akan Menghapus Group?')" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Group!"><i class="fas fa-trash"></i></a>
                                <a href="?akses=<?= md5('pesan-masal');?>&id=<?= $sg['id_group'];?>" class="btn btn-xs btn-secondary" data-toggle="tooltip" data-placement="top" title="Kirim pesan ke GROUP ini!"><i class="fas fa-envelope"></i></a>
                              </td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Group</th>
                                <th>Anggota</th>
                                <th>Keterangan</th>
                                <th width="170px;">Aksi</th>
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
