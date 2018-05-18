<!-- Banda larga slider -->


<div id="BandaExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#BandaExampleIndicators" data-slide-to="0" class="active" style="background-color: #FD4A4A"></li>
        <li data-target="#BandaExampleIndicators" data-slide-to="1"></li>

    </ol>
    <?php

    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'megasky'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM t_pre_pago";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }

    ?>

    <?php
    $row = mysqli_fetch_array($query);
    $name = $row['t_name'];
    $price = $row['t_price'];
    $description = $row['t_description'];

    ?>
    <!-- First slide -->
    <div class="Banda carousel-inner">
        <div class="carousel-item active">
            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p><?php echo $name ?></p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ <?php echo $price ?></span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p><?php echo $description ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p>2 MEGA + WI-FI</p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ 49,90</span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p>TENHA INTERNET EM CASA PARA TODA A FAMILIA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p>4 MEGA + WI-FI</p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ 74,90</span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p>MUITA VELOCIDADE PARA VOCÊ CURTIR O MELHOR DA INTERNET</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Second slide -->

        <div class="carousel-item">
            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p>LIGHT + WI-FI</p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ 39,90</span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p>PLANO DE 1 MEGA COM VELOCIDADE EM DOBRO</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p>2 MEGA + WI-FI</p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ 49,90</span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p>TENHA INTERNET EM CASA PARA TODA A FAMILIA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <div class="titleCat">
                    <p>4 MEGA + WI-FI</p>
                </div>

                <div class="card-body col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="spotPrice col-md-12">
                                <p>A partir de</p><span class="price2">R$ 74,90</span><span class="afterPrince">/mês</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="condition col-md-12">
                                <p>MUITA VELOCIDADE PARA VOCÊ CURTIR O MELHOR DA INTERNET</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-full">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="button btn btn-primary" href="#">DETALHES</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">ASSINA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <a class="carousel-control-prev" href="#BandaExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#BandaExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
