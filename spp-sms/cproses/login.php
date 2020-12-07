<?php
    session_start();

    include '../config/database.php';
    include '../controller/login.inc.php';

    $adm = new Admin();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($adm->checkAdmin($username, md5($password)) == true) 
    {
        // Cek Admin 
        foreach ($adm->checkAdmin($username, md5($password)) as $val) {
            # code...
        }
        $_SESSION['role'] = 'admin';
        $_SESSION['name'] = $val['nama'];

        header('location: ../?akses='.md5('home'));
    } 
    else 
    {
        echo "Gagal";
    }
    
?>