<?php
    include '../config/database.php';
    include '../controller/zenziva.inc.php';
    include '../controller/read.inc.php';
    include '../controller/insert.inc.php';

    $zn = new Zenziva();
    $sr = new Read();
    $cr = new Create();

    $act = $_GET['act'];
    if ($act == md5('single')) {
        // mengirim pesan personal
        foreach ($sr->showKontakByID($_POST['penerima']) as $pn) {
            # code...
        }
        $a = $pn['no_hp'];
        $b = $_POST['pesan'];

        if ($zn->sendMessage($a, $b) == 'Success') {
            $cr->riwayatPesan($pn['id_siswa'], $b, 'Berhasil');
            header('location:../?akses='.md5('pesan-personal').'&msgx=Pesan berhasil dikirim ke '.$pn['nama_wali']);
        } else {
            $cr->riwayatPesan($pn['id_siswa'], $b, 'Gagal');
            header('location:../?akses='.md5('pesan-personal').'&msgy=Pesan GAGAL dikirim ke '.$pn['nama_wali']);
        }
    } elseif ($act == md5('broadcast')) {
        // mengirim pesan masal
        $a = $_POST['penerima'];
        $b = $_POST['pesan'];

        foreach ($sr->showAnggota($a) as $pn) {
            // proses mengulang berdasarkan anggota group
            if ($zn->sendMessage($pn['no_hp'], $b) == 'Success') {
                $cr->riwayatPesan($pn['id_siswa'], $b, 'Berhasil');
                header('location:../?akses='.md5('pesan-personal').'&msgx=Pesan berhasil dikirim ke GROUP yg dipilih');
            } else {
                $cr->riwayatPesan($pn['id_siswa'], $b, 'Gagal');
                header('location:../?akses='.md5('pesan-personal').'&msgy=Pesan GAGAL dikirim ke GROUP yg dipilih');
            }
        }
    } else {
        header('location:../?akses=404');
    }
    
?>