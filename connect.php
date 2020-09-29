<<<<<<< HEAD
<?php
$conn = mysqli_connect("localhost","root","","movie");

//check connection
if(mysqli_connect_errno()){
    echo "koneksi ke database gagal :" .mysqli_connect_error();
}

=======
<?php
$conn = mysqli_connect("localhost","root","","db_movie");

//check connection
if(mysqli_connect_errno()){
    echo "koneksi ke database gagal :" .mysqli_connect_error();
}

>>>>>>> 1839bdf6454dc1dee4e8f3a73d6f16feca59b832
?>