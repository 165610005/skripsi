<?php
  // Menyertakan file pendukung
  include_once 'config/zenziva.php';
  include_once 'config/database.php';
  include_once 'controller/insert.inc.php';
  include_once 'controller/read.inc.php';
  include_once 'controller/update.inc.php';
  include_once 'controller/delete.inc.php';

  session_start();
  $sr = new Read();

  // URL Handler
  if (isset($_SESSION['role'])) {
    switch ($_GET['akses']) {
      case md5('home'):
        // url home
        include 'pages/home.php';
        break;

      case md5('pesan-personal'):
        // url pesan personal
        include 'pages/pesan-personal.php';
        break;

      case md5('pesan-masal'):
        // url pesan masal
        include 'pages/pesan-masal.php';
        break;

      case md5('kontak'):
        // url kontak 
        include 'pages/kontak.php';
        break;

      case md5('siswa'):
        // url siswa 
        include 'pages/siswa.php';
        break;

      case md5('template-pesan'):
        // url template
        include 'pages/template-pesan.php';
        break;

      case md5('pesan-terkirim'):
        // url pesan terkirim 
        include 'pages/pesan-terkirim.php';
        break;

      case md5('tambah-anggota'):
        // url pesan terkirim 
        include 'pages/tambah-anggota.php';
        break;

      case md5('anggota-group'):
        // url pesan terkirim 
        include 'pages/anggota-group.php';
        break;
      
      default:
        // default url 
        include 'pages/404.php';
        break;
    }
  } else {
    // tidak ada sesi/session 
    include 'pages/login-form.php';
  }
  
?>