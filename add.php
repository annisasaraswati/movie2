<?php

//panggil file koneksi
include 'connect.php';

    $nama_movie     = $_POST['nama_movie'];
    $genre          = $_POST['genre'];
    $cast           = $_POST['cast'];
    $trailer        = $_POST['trailer'];
    $trailer        = explode('=', $trailer);
    $trailer        = $trailer[1];
    $sinopsis       = $_POST['sinopsis'];

    $rand           = rand();
    $ekstensi       = array('png','jpg','jpeg');
    $img            = $_FILES['img']['name'];
    $ukuran         = $_FILES['img']['size'];
    $ext            = pathinfo($img, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi)){
    header("location:index.php?alert=gagal_ekstensi");
} else {
    if($ukuran < 1044070){
        $pict = $rand.''.$img;
        move_uploaded_file($_FILES['img']['tmp_name'], 'photo/'.$rand.''.$img);
        mysqli_query($conn, "insert into movies values ('', '$nama_movie','$genre','$cast','$trailer','$sinopsis', '$pict')");

        header("location:index.php?alert=berhasil");
    } else {
        header("location:index.php?alert=gagal_ukuran");
    }
}
?>