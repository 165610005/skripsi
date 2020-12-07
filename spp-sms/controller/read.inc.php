<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Read extends Database
    {

        function countSiswa()
        {
            // menghitung jumlah siswa
            $sql = "SELECT count(*) as jsiswa FROM siswa";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function countKontak()
        {
            // menghitung jumlah kontak
            $sql = "SELECT count(*) as jkontak FROM kontak";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function countGroup()
        {
            // menghitung jumlah group
            $sql = "SELECT count(*) as jgroup FROM group_kontak";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showSiswa()
        {
            // menampilkan data siswa
            $sql = "SELECT * FROM siswa";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showKontak()
        {
            // menampilkan data siswa
            $sql = "SELECT * FROM kontak k INNER JOIN siswa s ON k.id_siswa=s.id_siswa";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showKontakByID($id)
        {
            // menampilkan data siswa
            $sql = "SELECT * FROM kontak k INNER JOIN siswa s ON k.id_siswa=s.id_siswa WHERE id_kontak = '$id'";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showGroup()
        {
            // menampilkan data group
            $sql = "SELECT * FROM group_kontak";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showGroupByID($id)
        {
            // menampilkan data group berdasarkan ID tertentu
            $sql = "SELECT * FROM group_kontak WHERE id_group = '$id'";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showAnggota($id)
        {
            // menampilkan data anggota di dalam group
            $sql = "SELECT * FROM anggota_group ag INNER JOIN siswa s ON ag.id_siswa=s.id_siswa INNER JOIN kontak k ON k.id_siswa=s.id_siswa WHERE id_group = '$id'";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showKontakBS()
        {
            // menampilkan data siswa Sesuai ID
            $sql = "SELECT s.id_siswa as ids, s.nama, s.alamat, s.kelas, s.nama_wali, k.no_hp, k.id_kontak, ag.id_siswa FROM kontak k INNER JOIN siswa s ON k.id_siswa=s.id_siswa LEFT JOIN anggota_group ag ON ag.id_siswa=s.id_siswa WHERE ag.id_siswa IS NULL";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function countAnggotaByGroup($id)
        {
            // menampilkan data group berdasarkan ID tertentu
            $sql = "SELECT count(*) as ja FROM anggota_group WHERE id_group = '$id'";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showTemplate()
        {
            // menampilkan data template
            $sql = "SELECT * FROM template_pesan";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }

        function showRiwayatPesan()
        {
            // menampilkan data pesan
            $sql = "SELECT * FROM pesan_terkirim p INNER JOIN siswa s ON p.id_siswa=s.id_siswa";
            $d= mysqli_query($this->connect, $sql);
            $hasil = array();
            while($row = mysqli_fetch_array($d))
            {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
?>