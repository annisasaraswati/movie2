<?php
$conn = mysqli_connect("localhost","root","","movie");

//check connection
if(mysqli_connect_errno()){
    echo "koneksi ke database gagal :" .mysqli_connect_error();
}

?> 