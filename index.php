<<<<<<< HEAD
<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ec1c7d40ae.js" crossorigin="anonymous"></script>

    <title>Kumpulan Movie & Cinema</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#">Movie & Cinema</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i> 
			</button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="create.php">Create</a>
                    </li>
                    <li lass="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Recomendation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><b>Welcome to Our Website</b></div>
                <div class="intro-heading text-uppercase"></div>
                <a class="btn btn-secondary btn-xl text-uppercase text-light js-scroll-trigger" href="#about">MORE... >></a>
            </div>
        </div>
    </header>


    <!-- Content -->
    <div class="container mt-5">
        <!-- About -->
        <div id="about" class="mb-5">
            <h3 class="mb-4 text-center">About Movie & Cinema</h3>
            <div class="row text-justify">
                <p><b>Film (cinema)</b> asalnya dari kata cinematographie yang memiliki arti cinema (gerak), tho atau phytos (cahaya) dan graphie atau grhap (tulisan, gambar, citra). Sehingga bisa diartikan Film merupakan mewujudkan gerak dengan cahaya.
                    Mewujudkan atau Melukis gerak dengan cahaya tersebut menggunakan alat khusus, seringkali alat yang digunakan adalah kamera.</p>
            </div>
        </div>
        <!-- End About -->


        <!--movie-->
        <div id="movie" class="mb-5">
            <h3 class="mb-4 text-center">Movie You Like</h3>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="photo/1.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="photo/2.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="photo/3.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="list" class="mb-5">
        <h3 class="mb-4 text-center">List Film Minggu Ini</h3>
        <div class="row" style="margin: 30px;">
            <div class="card" style="width:300px; margin: 10px;">
                <img class="card-img-top" src="photo/8.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Jumanji</h5>
                    <a href="detail.php" class="btn btn-secondary" >See Detail</a>
                </div>
            </div>
        </div>
    </div>

<!--
    <div id="recommend" class="mb-5">
        <h3 class="mb-4 text-center">Recommendation</h3>
        <div class="row">
            <div class="col-md-6">
                <form class="my-form">
                    <div class="form-group">
                        <label for="form-name">Name</label>
                        <input type="email" class="form-control" id="form-name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="form-email">Genre</label>
                        <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="form-subject">Batasan Umur</label>
                        <input type="text" class="form-control" id="form-subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="form-message">Trailer</label>
                        <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-warning" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    </div>
-->

    <!--footer-->
    <footer class="bg-secondary pt-4 pb-2 text-light text-center">
        <p>&copy; 2020, Movie & Cinema</p>
    </footer>
    <!--End footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

=======
<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ec1c7d40ae.js" crossorigin="anonymous"></script>

    <title>Kumpulan Movie & Cinema</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#">Movie & Cinema</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i> 
			</button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="create.php">Create</a>
                    </li>
                    <li lass="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Recomendation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><b>Welcome to Our Website</b></div>
                <div class="intro-heading text-uppercase"></div>
                <a class="btn btn-secondary btn-xl text-uppercase text-light js-scroll-trigger" href="#about">MORE... >></a>
            </div>
        </div>
    </header>


    <!-- Content -->
    <div class="container mt-5">
        <!-- About -->
        <div id="about" class="mb-5">
            <h3 class="mb-4 text-center">About Movie & Cinema</h3>
            <div class="row text-justify">
                <p><b>Film (cinema)</b> asalnya dari kata cinematographie yang memiliki arti cinema (gerak), tho atau phytos (cahaya) dan graphie atau grhap (tulisan, gambar, citra). Sehingga bisa diartikan Film merupakan mewujudkan gerak dengan cahaya.
                    Mewujudkan atau Melukis gerak dengan cahaya tersebut menggunakan alat khusus, seringkali alat yang digunakan adalah kamera.</p>
            </div>
        </div>
        <!-- End About -->


        <!--carousel movie-->
        <div id="movie" class="mb-5">
            <h3 class="mb-4 text-center">Movie You Like</h3>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/banner/banner-1.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/banner/banner-2.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/banner/banner-3.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end product-->

    <!--list movie-->
    <div class="movie-selection-header" style="height: 41px; text-align: center; width: 100%; margin: auto; padding: 50px;">
        <h2>List Film Minggu Ini</h2>
    </div>

    <!-- oiya lupa gaada datanya hehe  -->
    <div class="row" style="margin: 30px;">
    <?php
            $mv = $conn->query("SELECT * FROM movies");
            while ($data = $mv->fetch_assoc()):
        ?>
        <div class="card" style="width:300px; margin: 10px;">
            <img class="card-img-top" src="images/lak.jpg" alt="Picture in here">
            <div class="card-body text-center">
                <h4 class="card-title" style="padding: auto;">Ini Judulnya</h4>
                 <a href="detail.php" class="btn btn-secondary" >See Detail</a>
            </div>
        </div>
        <?php endwhile?>
    </div>
    <!--end list-->

<!--
    <div id="recommend" class="mb-5">
        <h3 class="mb-4 text-center">Recommendation</h3>
        <div class="row">
            <div class="col-md-6">
                <form class="my-form">
                    <div class="form-group">
                        <label for="form-name">Name</label>
                        <input type="email" class="form-control" id="form-name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="form-email">Genre</label>
                        <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="form-subject">Batasan Umur</label>
                        <input type="text" class="form-control" id="form-subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="form-message">Trailer</label>
                        <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-warning" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    </div>
-->

    <!--footer-->
    <footer class="bg-secondary pt-4 pb-2 text-light text-center">
        <p>&copy; 2020, Movie & Cinema</p>
    </footer>
    <!--End footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> -->
</body>

>>>>>>> 1839bdf6454dc1dee4e8f3a73d6f16feca59b832
</html>