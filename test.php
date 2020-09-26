<?php
            $mv = $conn->query("SELECT * FROM movies");
            while ($data = $mv->fetch_array()):
        ?> 

        <?php endwhile ?>

        <h5 class="card-title"><?= $data['nama_movie']?></h5>


  tag detail

        <?php
    if(isset($_GET['id'])){
        $id = $GET['id'];
    }
    else{
        die ("Error. No ID Selected");
    }
    include "connect.php";
    $query = mysqli_query($conn, "SELECT * FROM movie WHERE id='$id'");
    $data = mysqli_fetch_array($query);
?>