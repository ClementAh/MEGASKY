<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>MegaSky</title>
</head>
<body>

<!-- Navbar -->


<nav class="navbar navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a href="../index.php"><img class="logo" src="../assets/img/megasky.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navlink navbar collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="../pages/banda_larga.php">BANDA LARGA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/pre_pago.php">SKY PRE PAGO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/pos_pago.php">SKY POS PAGO</a>
            </li>
        </ul>

        <a class="btn btn-primary" href="#" >ASSINE JA</a>
    </div>
</nav>

<!-- Slider -->




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../assets/img/sky.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../assets/img/sky.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../assets/img/sky.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="footer container-fluid">
    <div class="row">
        <div class="logo col-md-3">
            <img class="imgfooter" src="../assets/img/megaFooter.png">
        </div>
        <div class="linkFooter col-md-6">
            <ul>
                <li>
                    <a href="">INCIO</a>
                </li>
                <li>
                    <a href="">SOBRE</a>
                </li>
                <li>
                    <a href="../pages/banda_larga.php">BANDA LARGA</a>
                </li>
                <li>
                    <a href="../pages/pre_pago.php">SKY PRE PAGO</a>
                </li>
                <li>
                    <a href="../pages/pos_pago.php">SKY POS PAGO</a>
                </li>
                <li>
                    <a href="">CONTATO</a>
                </li>
            </ul>

        </div>
        <div class="number col-md-3">
            <p>62 000 000</p>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>