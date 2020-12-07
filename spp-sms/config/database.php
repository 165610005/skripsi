<?php
    class Database
    {
    
        var $host = "localhost";
        var $uname = "root";
        var $pass = "";
        var $db = "spp-sms";
        var $connect = false;

        function __construct(){ //untuk memberi nilai awal dari properti
            $this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        }
    }
?>