
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


$row = mysqli_fetch_array($query);
?>

<!-- Slider TV -->


<div id="TvExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#TvExampleIndicators" data-slide-to="0"  style="background-color: #FD4A4A"></li>
        <li data-target="#TvExampleIndicators" data-slide-to="1"></li>

    </ol>
    <div class=\"carousel-inner\">
        <!-- First slide -->


        <?php
        while ($row = mysqli_fetch_array($query)) {
            echo
            ("
                <div class=\"carousel-item active\">
                
                <div class=\"card\" style=\"width: 20rem;\">
                
                "."<div class=\"categorie\">
                "."<p>".$row['t_name']."</p>
                "." </div> <!-- Categorie -->
                 
             "."<img src=\"./assets/img/". $row['t_pictures']."\"/>
             
             "."<div class=\"description container-fluid\">
             "."<div class=\"row\">
             "."<div class=\"col-md-12\">
             "."<div class=\"container-fluid\">
             "."<div class=\"row\">
             
             "."<div class=\"canais col-md-3\">
             "."<p><span>".$row['t_canais']."</span> CANAIS</p>
             "."</div>
             
             "."<div class=\"canais col-md-3\">
             "."<p><span>".$row['t_canais_hd']."</span> <br>CANAIS HD</p>
             "."</div>
             
             "."<div class=\"canais col-md-3\">
             "."<p><span>".$row['t_equipamento']."</span> EQUIPAMENTO</p>
             "."</div>
             
             "."</div> <!-- Row -->
             "."</div><!-- Container - fluid -->
        
             "."</div> <!-- col - md -12 -->
             "."</div> <!-- row -->
             "."</div> <!-- container - fluid -->
        
             "."<div class=\"price\">
             "."<span>R$ ".$row['price']."</span> <p>".$row['t_description']."</p>
             "."</div>
             
             "."<div class=\"container-fluid\">
             "."<div class=\"row\">
             
             "."<div class=\"col-md-6\">
             "."<a class=\"button btn btn-primary\" href=\"#\">DETALHES</a>
             "."</div>
             
             "."<div class=\"col-md-6\">
             "."<a class=\"btn btn-primary\" href=\"#\">ASSINAR</a>
             "."</div>
             
             "."</div> <!-- div class = row -->
             
             "."</div> <! -- div class = container - fluid -->
             "."</div> <! --  cards -->
             
             
             "."</div>"); // Carousel inner

        }
        ?>
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
