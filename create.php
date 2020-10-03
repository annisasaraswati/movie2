<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<div>
<form method="POST" action="add.php" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="form-group">
    <label for="nama_movie">Nama Film :</label>
    <input type="text" class="form-control" placeholder="Masukkan" name="nama_movie" required>
    <!--<div class ="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div> -->
    </div>

    <div class="form-group">
    <label for="genre">Genre :</label>
    <input type="text" class="form-control" placeholder="Masukkan" name="genre" required>
    <!--<div class ="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div> -->
    </div>

    <div class="form-group">
    <label for="cast">Cast :</label>
    <input type="text" class="form-control" placeholder="Masukkan" name="cast" required>
    <!--<div class ="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div> -->
    </div>

    <div class="form-group">
    <label for="trailer">Trailer :</label>
    <input type="text" class="form-control" placeholder="Masukkan" name="trailer" required>
    <!--<div class ="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div> -->
    </div>

    <div class="form-group">
    <label for="sinopsis">Sinopsis :</label>
    <textarea class="form-control" rows="10" name="sinopsis"></textarea>
    </div>

    <div class="form-group">
    <label>Upload Image : </label><br>
    <input type="file" name="img" required="">
    <p style="color : red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class="btn btn-primary">Cancel</a>
</div>
</form>
</body>
</html>