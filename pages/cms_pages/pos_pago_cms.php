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

$sql = "SELECT * FROM t_pos_pago";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}


while ($row = mysqli_fetch_array($query)) {


    echo
    ("<div class=\"card\" style=\"width: 20rem;\">
  <div class=\"card-header\">
   <ul class=\"nav justify-content-center\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../create_pos_pago.php?id=".$row['ID_pos_pago']."\">Create</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../update_pos_pago.php?id=".$row['ID_pos_pago']."\">Update</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../delete_query.php?id=".$row['ID_pos_pago']."\">Delete</a>
      </li>
    </ul>
  </div>
     "." <div class=\"categorie\">
     "."<p>".$row['t_name']."</p>
     "."</div>
     "."<img src=\"../../assets/img/".$row['t_pictures']."\"/>
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
     "."</div>
     "."</div>

     "."</div>
     "."</div>

     "."</div>

     "."<div class=\"price\">
     "."<span>R$ ".$row['price']."</span> <p>".$row['t_description']."</p>
     "."</div>
     "."<div class=\"container-fluid\">
     "."<div class=\"row\">
     "."<div class=\"col-md-6\">
     "."<a class=\"button btn btn-primary\" href=\"./detalhes_pos_pago_cms.php?id=".$row['ID_pos_pago']."\">DETALHES</a>
     "."</div>
     "."<div class=\"col-md-6\">
     "."<a class=\"btn btn-primary\" href=\"#\">ASSINAR</a>
     "."</div>
     "."</div>
     "."</div>
     "."</div>");

}

?>

<?php

$sql2 = "SELECT * FROM t_packages";

$query = mysqli_query($conn, $sql2);

?>



<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : 'your-app-id',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.0'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>





