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
                <h1><b>Pesan Masal</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> HOME</a></li>
                <li class="breadcrumb-item active">Kirim Pesan Masal</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php
          if (isset($_GET['msgx'])) {
        ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> BERHASIL!</h5>
            <?= $_GET['msgx'];?>. 
          </div>
        <?php
          }
        ?>

        <?php
          if (isset($_GET['msgy'])) {
        ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> GAGAL!</h5>
            <?= $_GET['msgy'];?>. Pastikan saldo pesan Anda mencukupi! 
          </div>
        <?php
          }
        ?>
        <form action="cproses/zenziva.php?act=<?= md5('broadcast');?>" method="post">
          <div class="row">
            <div class="col-md-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Penerima</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">

                  <div class="form-group">
                    <label>Pilih Penerima</label>
                    <select class="form-control select2" name="penerima" data-placeholder="Cari nama group untuk pesan masal" required style="width: 100%;">
                      <option value=""></option>
                      <?php
                        foreach ($sr->showGroup() as $ct) {
                          if(isset($_GET['id']) == $ct){
                      ?>
                        <option value="<?= $ct['id_group'];?>" selected><?= $ct['nama_group']." - ".$ct['keterangan'];?></option>
                      <?php
                          } else {
                      ?>
                        <option value="<?= $ct['id_group'];?>"><?= $ct['nama_group']." - ".$ct['keterangan'];?></option>
                      <?php
                          }
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-md-8">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Isi Pesan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <?php
                        foreach ($sr->showTemplate() as $tmpl) {
                            # code...
                        }
                    ?>
                    <textarea class="form-control" name="pesan" rows="12" required>
<?= $tmpl['template_atas'];?>


Tanggal : <?= date('l, d F Y');?>

Jumlah : Rp. 80.000-,
Keterangan : Periode (<?= date('Y')."/".(date('Y')+1);?>)
Batas Pembayaran : (<?= date('l, d F Y', strtotime(date('Y')."-".(date('m')+1)."-".date('d')));?>)
Catatan : "Pembayaran dilakukan di bagian Bendahara Sekolah"

<?= $tmpl['template_bawah'];?>
                    </textarea>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <input type="submit" value="KIRIM" class="btn btn-success float-right">
              <a href="#" class="btn btn-white float-right">Cancel</a>
            </div>
          </div>
        </form>
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
</body>
</html>
