<?php
    $rootDir = $_SERVER['DOCUMENT_ROOT'].'/Aniwatch/';
    
    $server = "localhost"; 
    $user = "root";
    $pass = '';
    $db  = "aniwatch";

    $koneksi  = mysqli_connect($server, $user, $pass, $db);

    if  (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL" . mysqli_connect_errno();
        exit();
    }
?>