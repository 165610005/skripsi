<?php
    include '../config/database.php';
    include '../controller/insert.inc.php';

    $cr = new Create();

    $act = $_GET['act'];
    if ($act == md5('csiswa')) {
        // oop tambah siswa
        $a = $_POST['nama'];
        $b = $_POST['alamat'];
        $c = $_POST['kelas'];
        $d = $_POST['nWali'];
        
        $cr->inSiswa($a, $b, $c, $d);
        header('location:../?akses='.md5('siswa'));
    } elseif ($act == md5('ckontak')) {
        // oop tambah kontak
        $a = $_POST['id_siswa'];
        $b = $_POST['nWali'];
        $c = $_POST['nHp'];
        
        $cr->inKontak($a, $b, $c);
        header('location:../?akses='.md5('kontak'));
    } elseif ($act == md5('cgroup')) {
        // oop tambah group
        $a = $_POST['nama'];
        $b = $_POST['keterangan'];
        
        $cr->inGroup($a, $b, $c);
        header('location:../?akses='.md5('kontak'));
    } elseif ($act == md5('addAnggota')) {
        // oop tambah anggota ke group tertentu
        $id_group = $_GET['id'];
        $id_siswa = $_GET['ids'];

        // echo $id_siswa." - ".$id_siswa;
        $cr->addAnggota($id_group, $id_siswa);
        header('location:../?akses='.md5('tambah-anggota').'&id='.$id_group);
    } else {
        header('location:../?akses=404');
    }
    
?>