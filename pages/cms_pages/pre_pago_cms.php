<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src ="../../assets/img/megasky.png" width="100px", height="35px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/pos_pago_cms.php">Pos Pago</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/pre_pago_cms.php">Pre Pago</a>
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

$sql = "SELECT * FROM t_pre_pago";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}


while ($row = mysqli_fetch_array($query)) {


    echo
    ("<div class=\"card\" style=\"width: 20rem;\">
        "."<div class=\"menu\">
        "."<a href=\"../create_pre_pago.php?id=".$row['ID_pre_pago']."\"><i class=\"fas fa-plus\"></i></a>
        "."<a href=\"../update_pre_pago.php?id=".$row['ID_pre_pago']."\"><i class=\"fas fa-edit\"></i></a>
        "."<a href=\"../delete_query.php?id=".$row['ID_pre_pago']."\"><i class=\"fas fa-trash-alt\"></i></a>
        "."<div class=\"titleCat\">
        "."<p>".$row['t_name']."</p>
        "."</div>
        "."<div class=\"card-body col-md-12\">"."
        "."<div class=\"container\">
        "."<div class=\"row\">
        "."<div class=\"spotPrice col-md-12\">
        "."<p>A partir de</p><span class=\"price2\">R$ ".$row['t_price']."</span><span class=\"afterPrince\">/mês</span>
        "."</div>
        "."</div>
        "."<div class=\"row\">
        "."<div class=\"condition col-md-12\">
        "."<p>".$row['t_description']."</p>
        "."</div>
        "."</div>
        "."</div>
        "."</div>
        "."</div>
        "."<div class=\"container-full\">
        "."<div class=\"row\">
        "."<div class=\"col-md-6\">
        "."<a class=\"button btn btn-primary\" href=\"#\">DETALHES</a>
        "."</div>
        "."<div class=\"col-md-6\">
        "."<a href=\"#\" class=\"btn btn-primary\">ASSINA</a>
        "."</div>
        "."</div>
        "."</div>
        "."</div>");


}
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



