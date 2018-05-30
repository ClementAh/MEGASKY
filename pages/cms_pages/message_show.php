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
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/banda_larga_cms.php">Banda Larga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/message_cms.php">Message</a>
            </li>
            <li>
                <a class="nav-link" href="./chat.php">Chat</a>
            </li>


        </ul>
    </div>
</nav>
<?php

if(isset($_POST['show'])) {

    $id = $_GET['id'];
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'megasky'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM t_contact WHERE ID_contact = '$id'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_array($query)) {
        echo("<div class=\"showMessage container\">

                 <div class=\"row\">
                     <div class='col-md-12'>
                       <p><span class='msg'>ID : </span> " . $id . "</p> 
                    </div>
                 </div>
                 
                 <div class='row'>
                    <div class='col-md-12'>
                      <p><span class='msg'>Nome : </span>". $row['t_name'] . "</p>  
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-md-12'>
                        <p><span class='msg'> Email : </span> " . $row['t_email'] . "</p>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-md-12'>
                       <p><span class = 'msg'>Telephone : </span> " . $row['t_telephone'] . "</p>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-md-12'>
                        <p><span class='msg'> Categorie : </span>" . $row['t_categories'] . "</p>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-md-12'>
                       <p><span class =\"msg\"> Message : </span> " . $row['t_message'] . "</p> 
                    </div>
                </div>
                
                
                
                </div>
 
 
 ");
    }


}

?>
<div class="container">
    <div class="row">
        <div class="link col-md-12"style="text-align: center">
            <a class="btn btn-outline-primary" href="./message_cms.php" role="button">Back</a>
        </div>
    </div>
</div>





</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

</body>