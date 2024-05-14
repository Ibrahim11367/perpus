<?php

$servername = "localhost";
    $username = "root";
    $password = "";
    $db = "belajar_php";
    $conn = mysqli_connect($servername, $username, $password, $db);
    
    if (mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else {
        echo "Koneksi Berhasil";
    }

?>