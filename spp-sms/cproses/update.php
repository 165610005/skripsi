<?php
    include '../config/database.php';
    include '../controller/update.inc.php';

    $cr = new Update();

    $act = $_GET['act'];
    if ($act == md5('upSiswa')) {
        // oop update Siswa
        $id = $_GET['id'];
        $a = $_POST['nama'];
        $b = $_POST['alamat'];
        $c = $_POST['kelas'];
        $d = $_POST['nWali'];
        
        $cr->upSiswa($id, $a, $b, $c, $d);
        header('location:../?akses='.md5('siswa'));
    } elseif ($act == md5('upKontak')) {
        // oop update kontak
        $id = $_GET['id'];
        $a = $_POST['id_siswa'];
        $b = $_POST['nWali'];
        $c = $_POST['nHp'];
        
        $cr->upKontak($id, $a, $b, $c);
        header('location:../?akses='.md5('kontak'));
    } elseif ($act == md5('upAtas')) {
        // oop update template atas
        $id = $_GET['id'];
        $a = $_POST['tAtas'];
        
        $cr->upAtas($id, $a);
        header('location:../?akses='.md5('template-pesan').'&msg=success');
    } elseif ($act == md5('upBawah')) {
        // oop update template bawah
        $id = $_GET['id'];
        $a = $_POST['tBawah'];
        
        $cr->upBawah($id, $a);
        header('location:../?akses='.md5('template-pesan').'&msg=success');
    } else {
        header('location:../?akses=404');
    }
    
?>