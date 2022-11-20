<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpnativecrud";

    //menghubungkan database
    $conn = new mysqli($server, $username, $password, $dbname);
    //cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal : " . $conn->connect_error);
    }
    echo "Koneksi Berhasil";

?>