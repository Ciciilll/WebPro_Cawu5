<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "aplikasipengelolakeuangan";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "Koneksi berhasil!";
    } else{
        echo "Koneksi database gagal ".mysqli_connect_error();
    }
?>