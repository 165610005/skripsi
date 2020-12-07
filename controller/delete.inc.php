<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Delete extends Database
    {

        function delSiswa($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `siswa` WHERE id_siswa = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }

        function delKontak($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `kontak` WHERE id_kontak = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }

        function delAnggota($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `anggota_group` WHERE id_siswa = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }

        function delIsiGroup($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `anggota_group` WHERE id_group = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }

        function delGroup($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `group_kontak` WHERE id_group = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }

        function delRiwayat($a)
        {
            // hapus data siswa
            $sql = "DELETE FROM `pesan_terkirim` WHERE id_pesan_terkirim = '$a'";
            $d= mysqli_query($this->connect, $sql);
        }
    }
?>