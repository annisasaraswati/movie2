<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'connect.php';

	// membuat variabel untuk menampung data dari form
  $id             = $_POST['id'];
  $nama           = $_POST['nama'];
  $genre          = $_POST['genre'];
  $cast           = $_POST['cast'];
  $trailer        = $_POST['trailer'];
  $sinopsis       = $_POST['sinopsis'];
  $img            = $_FILES['img']['name'];
  
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($img != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $img); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['img']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $new_img = $angka_acak.'-'.$img; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'photo/'.$new_img); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE movies SET nama_movie = '$nama', genre = '$genre', cast = '$cast', 
                   trailer = '$trailer', sinopsis = '$sinopsis', img = '$new_img'";
                    $query .= "WHERE id_movie = '$id'";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpeg, jpg atau png.');window.location='add.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE movies SET nama_movie = '$nama', genre = '$genre', cast = '$cast', trailer = '$trailer', 
      sinopsis = '$sinopsis'";
      $query .= "WHERE id_movie = '$id'";
      $result = mysqli_query($conn, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
        //tampil alert dan akan redirect ke halaman home.php
        //silahkan ganti home.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
          print_r($result);
      }
    }