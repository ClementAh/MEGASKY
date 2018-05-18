
<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'megasky'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM t_pos_pago";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

?>

<?php
$row = mysqli_fetch_array($query);
$name = $row['t_name'];
$pics = $row['t_pictures'];
$canais = $row['t_canais'];
$canais2 = $row ['t_canais_hd'];
$equipamento = $row['t_equipamento'];
$price = $row['price'];
$description = $row['t_description'];

?>

<!-- Slider TV -->


<div id="TvExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#TvExampleIndicators" data-slide-to="0" class="active" style="background-color: #FD4A4A"></li>
        <li data-target="#TvExampleIndicators" data-slide-to="1"></li>

    </ol>

    <!-- First slide -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card" style="width: 20rem;">
                <div class="categorie">
                    <p><?php echo $name ?></p>
                </div>
                <?php echo '<img src="./assets/img/'.$pics.'"/>'; ?>
                <div class="description container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="canais col-md-3">
                                        <p><span><?php echo $canais ?></span> CANAIS</p>

                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span><?php echo $canais2 ?></span> <br>CANAIS HD</p>
                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span><?php echo $equipamento ?></span> EQUIPAMENTO</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="price">
                    <span>R$<?php echo $price ?></span> <p><?php echo $description ?></p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="#">ASSINAR</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card" style="width: 20rem;">
                <div class="categorie">
                    <p>SMART HD</p>
                </div>
                <img class="card-img-top" src="./assets/img/spider.jpg" alt="Card image cap">
                <div class="description container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="canais col-md-3">
                                        <p><span>103</span> CANAIS</p>

                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span>0</span><br> CANAIS HD</p>
                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span>1</span> EQUIPAMENTO</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="price">
                    <span>R$ 32,45</span> <p>NO PRIMERO MES</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="#">ASSINAR</a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="card" style="width: 20rem;">
                <div class="categorie">
                    <p>SMART II HD</p>
                </div>
                <img class="card-img-top" src="./assets/img/hunger.jpg" alt="Card image cap">
                <div class="description container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="canais col-md-3">
                                        <p><span>103</span> CANAIS</p>

                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span>0</span><br> CANAIS HD</p>
                                    </div>
                                    <div class="canais col-md-3">
                                        <p><span>1</span> EQUIPAMENTO</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="price">
                    <span>R$ 32,45</span> <p>NO PRIMERO MES</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="#">ASSINAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Second slide -->

        <div class="carousel-item">
            <div class="carousel-item active">
                <div class="card" style="width: 20rem;">
                    <div class="categorie">
                        <p>SMART</p>
                    </div>
                    <img class="card-img-top" src="./assets/img/hunger.jpg" alt="Card image cap">
                    <div class="description container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="canais col-md-3">
                                            <p><span>103</span> CANAIS</p>

                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>0</span><br> CANAIS HD</p>
                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>1</span> EQUIPAMENTO</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="price">
                        <span>R$ 32,45</span> <p>NO PRIMERO MES</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="button btn btn-primary" href="#">DETALHES</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="#">ASSINAR</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card" style="width: 20rem;">
                    <div class="categorie">
                        <p>SMART HD</p>
                    </div>
                    <img class="card-img-top" src="./assets/img/spider.jpg" alt="Card image cap">
                    <div class="description container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="canais col-md-3">
                                            <p><span>103</span> CANAIS</p>

                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>0</span><br> CANAIS HD</p>
                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>1</span> EQUIPAMENTO</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="price">
                        <span>R$ 32,45</span> <p>NO PRIMERO MES</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="button btn btn-primary" href="#">DETALHES</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="#">ASSINAR</a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="card" style="width: 20rem;">
                    <div class="categorie">
                        <p>SMART II HD</p>
                    </div>
                    <img class="card-img-top" src="./assets/img/hunger.jpg" alt="Card image cap">
                    <div class="description container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="canais col-md-3">
                                            <p><span>103</span> ANAIS</p>

                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>0</span><br>CANAIS HD</p>
                                        </div>
                                        <div class="canais col-md-3">
                                            <p><span>1</span> EQUIPAMENTO</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="price">
                        <span>R$ 32,45</span> <p>NO PRIMERO MES</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="button btn btn-primary" href="#">DETALHES</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-primary" href="#">ASSINAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <a class="carousel-control-prev" href="#TvExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#TvExampleIndicators" role="button" data-slide="next" style="color: #FD4A4A">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

