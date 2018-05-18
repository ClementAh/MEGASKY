<?php

if(isset($_POST['posPago'])) {

    $name = ($_POST['name']);
    $pictures = ($_POST['pictures']);
    $canais = ($_POST['canais']);
    $canais2 = ($_POST['canaisHD']);
    $equipamento = ($_POST['equipamento']);
    $description = ($_POST['description']);
    $price = ($_POST['price']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "megasky";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql2 = "INSERT INTO t_pos_pago(ID_pos_pago,t_name,t_pictures,t_canais,t_canais_hd,t_equipamento,t_description,price) VALUES (NULL, '$name','$pictures','$canais','$canais2','$equipamento','$description','$price')";
    if ($conn->query($sql2) === TRUE) {
        echo "Votre demande a bien été envoyée !";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

}

if(isset($_POST['prePago'])) {
    $name = ($_POST['name']);
    $price = ($_POST['price']);
    $description = ($_POST['description']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "megasky";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql2 = "INSERT INTO t_pre_pago(ID_pre_pago,t_name,t_price,t_description) VALUES (NULL, '$name','$price','$description')";
    if ($conn->query($sql2) === TRUE) {
        echo "Votre demande a bien été envoyée !";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

}

