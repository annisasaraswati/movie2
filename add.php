<?php

//panggil file koneksi
include 'connect.php';

    $nama_movie     = $_POST['nama_movie'];
    $genre          = $_POST['genre'];
    $cast           = $_POST['cast'];
    $trailer        = $_POST['trailer'];
    $trailer        = explode('=', $trailer);
    $trailer        = $trailer['1'];
    $sinopsis       = $_POST['sinopsis'];

mysqli_query($conn, "insert into movie values ('', '$nama_movie',
'$genre','$cast','$trailer','$sinopsis')");

header("location:index.php?alert=berhasil");

?>