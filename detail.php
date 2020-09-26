 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row" style="float: left; padding: 30px; margin: auto;">
                    <img src="photo/8.jpg" alt="film pertama" style="width: auto; margin-left: 65%; height: 450px;">
                </div>
            </div>

            <div class="col">
                <div class="row" style="float: left; padding: 30px; margin: auto; position: absolute; width: 655px height: 450px;">
                    <iframe width="100%" height="450" style="margin-left: -30%;" src="https://www.youtube.com/embed/<?= $data['trailer']?>"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <hr style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-top: 2px solid rgba(0, 0, 0, 0.1); width: 75%;">
        <div style="margin-left: 15%;">
            <h4><?php echo $data['nama_movie']?></h4>
        </div>
        <hr style="margin-top: 1rem; margin-bottom: 1rem; border: 0; border-top: 2px solid rgba(0, 0, 0, 0.1); width: 75%;">

        <div class="col-sm-8" style="margin-left: 15%;">
            <div>
                <p><?php echo $data['sinopsis']?></p>
            </div><br>
            <div style="margin-right: 500px; width: 100%;">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Genre</th>
                            <td><?php echo $data['genre']?></td>
                        </tr>
                        <tr>
                            <th>Cast</th>
                            <td><?php echo $data['cast']?></td>
                        </tr>
                    </tbody>
                </table>
            </div><br><br>
            <div class="form-group row text-center">
                <div class="col">
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    <a href="index.php" class="btn btn danger">Cancel</a>
                </div>
            </div>
</body>
</html>