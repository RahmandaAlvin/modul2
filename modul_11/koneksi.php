<?php
//variable koneksi dengan database mysql
    $host = "localhost";
    $user = "root";
    $paswd = "";
    $name = "db_akademik";

    //proses koneksi
    $link = mysqli_connect($host,$user,$paswd,$name);

    //periksa koneksi, jika gagal akan menampilkan pesan error
    if(!$link) {
        die ("koneksi dengan database gagal : " .mysql_connect_errno() .
        " - ".mysql_connect_error() );
    }
?>