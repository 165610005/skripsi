<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Update extends Database
    {

        function upSiswa($id, $a, $b, $c, $d)
        {
            // update data siswa
            $sql = "UPDATE `siswa` SET `nama`='$a',`alamat`='$b',`kelas`='$c',`nama_wali`='$d' WHERE  `id_siswa`='$id'";
            $d= mysqli_query($this->connect, $sql);
        }

        function upKontak($id, $a, $b, $c)
        {
            // update data kontak
            $sql = "UPDATE `kontak` SET `id_siswa`='$a',`nama_kontak`='$b',`no_hp`='$c' WHERE `id_kontak` = '$id'";
            $d= mysqli_query($this->connect, $sql);
        }

        function upAtas($id, $a)
        {
            // update template atas
            $sql = "UPDATE `template_pesan` SET `template_atas`='$a' WHERE `id_template`='$id'";
            $d= mysqli_query($this->connect, $sql);
        }

        function upBawah($id, $a)
        {
            // update template atas
            $sql = "UPDATE `template_pesan` SET `template_bawah`='$a' WHERE `id_template`='$id'";
            $d= mysqli_query($this->connect, $sql);
        }
    }
?>