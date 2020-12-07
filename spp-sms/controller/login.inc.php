<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Admin extends Database
    {
        function checkAdmin($username, $password)
        {
            $sql = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
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