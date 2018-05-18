
 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE POS PAGO</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>


<a href="./forms.php">FORMS</a>


<form class="form-group" method="post">
    <input type="text" name="name" placeholder="name" class="form-control">
    <input type="file" name="pictures" class="form-control">
    <input type="text" name="canais" placeholder="canais" class="form-control">
    <input type="text" name="canaishd" placeholder="Canais HD" class="form-control">
    <input type="text" name="equipamento" placeholder="Equimapemento" class="form-control">
    <input type="text" name="price" placeholder="Price" class="form-control">
    <textarea name="description" placeholder="Description" class="form-control"></textarea>
    <input type="submit" name="updatePosPago" value="Update" class="form-control">
</form>


<?php

// Pos Pago //

if(isset($_POST['updatePosPago'])) {
    $id = ($_GET['id']);
    $name = ($_POST ['name']);
    $pictures = ($_POST['pictures']);
    $canais = ($_POST['canais']);
    $canaishd = ($_POST['canaishd']);
    $equipamento = ($_POST['equipamento']);
    $price = ($_POST['price']);
    $description = ($_POST['description']);


    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'megasky'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = "UPDATE t_pos_pago SET t_name = '$name', t_pictures = '$pictures', t_canais = '$canais', t_canais_hd = '$canaishd', t_equipamento = '$equipamento', price = '$price', t_description = '$description'WHERE ID_pos_pago = '$id'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    echo "Update is good";
    echo "<a href='./cms_pages/pos_pago_cms.php'>FORMS</a>";
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

