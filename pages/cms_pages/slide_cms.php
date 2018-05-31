<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS MESSAGE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

<nav class="navCms navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src ="../../assets/img/megasky.png" width="100px" , height="35px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pos_pago_cms.php">Pos Pago</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pre_pago_cms.php">Pre Pago</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="banda_larga_cms.php">Banda Larga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="message_cms.php">Message</a>
            </li>
            <li>
                <a class="nav-link" href="chat.php">Chat</a>
            </li>
            <li>
                <a class="nav-link" href="slide_cms.php">Slide</a>
            </li>
            <li>
                <a class="nav-link" href="packages.php">Package</a>
            </li>
            <li>
                <a class="nav-link" href="packages.php"">Package</a>
            </li>




        </ul>
    </div>
</nav>

<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'megasky'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM t_slide";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}


echo ("<div class=\"card-header\">
   <ul class=\"nav justify-content-center\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../slide_create.php\">Create</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../update_slide.php\">Update</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../delete_query.php\">Delete</a>
      </li>
    </ul>
  </div>");




    while ($row = mysqli_fetch_array($query)) {

        echo("  
  
         <div class=\"jarallax\" >
                <img class=\"jarallax-img\" src=\"../../assets/img/" . $row['t_pictures'] . "\" style='height:100vh; width: 100%;'>
                
             <div class='container' style='position: absolute;'>
             <div class='row'>
             <div class='col-md-12'>
             <h1>" . $row['big_title'] . "</h1>
             </div>
             </div>
         
            <div class='row'>
            <div class='col-md-12'>
            <h3>" . $row['t_description'] . "</h3> 
            </div>
            </div>
         
            <div class='row'>
            <div class='col-md-12'>
            <a class='btn btn-primary' href='" . $row['t_link'] . "'>Show more</a>
            </div>
            </div>
         
            </div>  <!-- CONTAINER -->
      
         </div> <!-- JARALLAX -->
");

}

?>
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>

<!-- Include it if you want to use Video parallax -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-video.min.js"></script>

<!-- Include it if you want to parallax any element -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-element.min.js"></script>

<!-- Boostrap -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>