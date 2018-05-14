<?php

if(isset($_POST['assine'])) {

    $tabErreur = array();
    $name = ($_POST['name']);
    $mail = ($_POST['mail']);
    $telephone = ($_POST['telephone']);
    $categories = ($_POST['categories']);
    $message1 = ($_POST['message']);

    if ($_POST["name"] == "")
        array_push($tabErreur, "Veuillez saisir votre nom");
    if ($_POST["mail"] == "")
        array_push($tabErreur, "Veuillez saisir votre mail");
    if ($_POST["telephone"] == "")
        array_push($tabErreur, "Veuillez saisir votre telephone");
    if ($_POST["categories"] == "")
        array_push($tabErreur, "Veuillez saisir votre categories");
    if ($_POST["message"] == "")
        array_push($tabErreur, "Veuillez saisir votre message");
    if (count($tabErreur) != 0) {
        $message = "<ul>";
        for ($i = 0; $i < count($tabErreur); $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);


    } else {


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
        $sql2 = "INSERT INTO t_contact (ID_contact,t_name,t_email,t_telephone,t_categories,t_message) VALUES (NULL, '$name','$mail','$telephone','$categories','$message1')";
        if ($conn->query($sql2) === TRUE) {
            echo "Votre demande a bien été envoyée !";
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }

    }

}