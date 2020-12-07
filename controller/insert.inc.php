<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Create extends Database
    {

        function inSiswa($a, $b, $c, $d)
        {
            // menambah data siswa
            $sql = "INSERT INTO `siswa`(`nama`, `alamat`, `kelas`, `nama_wali`, `status`) VALUES ('$a', '$b', '$c', '$d', 'Aktif')";
            $d= mysqli_query($this->connect, $sql);
        }

        function inKontak($a, $b, $c)
        {
            // menambah data kontak
            $sql = "INSERT INTO `kontak`(`id_siswa`, `nama_kontak`, `no_hp`) VALUES ('$a','$b','$c')";
            $d= mysqli_query($this->connect, $sql);
        }

        function inGroup($a, $b)
        {
            // menambah data group
            $sql = "INSERT INTO `group_kontak`(`nama_group`, `keterangan`) VALUES ('$a','$b')";
            $d= mysqli_query($this->connect, $sql);
        }

        function addAnggota($a, $b)
        {
            // menambah data group
            $sql = "INSERT INTO `anggota_group`(`id_group`, `id_siswa`) VALUES ('$a','$b')";
            $d= mysqli_query($this->connect, $sql);
        }

        function riwayatPesan($a, $b, $c)
        {
            // menambah data group
            $sql = "INSERT INTO `pesan_terkirim`(`id_siswa`, `pesan`, `tanggal_terkirim`, `status`) VALUES ('$a','$b',NOW(),'$c')";
            $d= mysqli_query($this->connect, $sql);
        }
    }
?>