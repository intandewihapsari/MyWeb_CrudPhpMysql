<?php
    $server ="localhost";
    $username = "root";
    $password = "";
    $database ="crud_gc";
    $conn = new mysqli($server,$username,$password,$database);

    if($conn->connect_error){
        die("Gagal Koneksi : ".$conn->connect_error);
    }
?>