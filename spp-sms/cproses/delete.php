<?php
    include '../config/database.php';
    include '../controller/delete.inc.php';

    $del = new Delete();

    $act = $_GET['act'];
    if ($act == md5('delsiswa')) {
        // hapus data siswa
        $a = $_GET['id'];
        
        $del->delSiswa($a);
        header('location:../?akses='.md5('siswa'));
    } elseif ($act == md5('delkontak')) {
        // hapus data kontak
        $a = $_GET['id'];
        
        $del->delKontak($a);
        header('location:../?akses='.md5('kontak'));
    } elseif ($act == md5('delanggota')) {
        // hapus anggota group
        $a = $_GET['id'];
        $b = $_GET['ids'];
        
        $del->delAnggota($b);
        header('location:../?akses='.md5('tambah-anggota').'&id='.$a);
    } elseif ($act == md5('delgroup')) {
        // hapus group
        $a = $_GET['id'];

        $del->delIsiGroup($a);
        $del->delGroup($a);
        header('location:../?akses='.md5('kontak'));
    } elseif ($act == md5('delriwayat')) {
        // hapus group
        $a = $_GET['id'];

        $del->delRiwayat($a);
        header('location:../?akses='.md5('pesan-terkirim'));
    } else {
        header('location:../?akses=404');
    }
    
?>