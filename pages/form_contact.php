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



        ini_set('SMTP','localhost');
        ini_set('smtp_port',1025);

        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql2 = "INSERT INTO t_contact (ID_contact,t_name,t_email,t_telephone,t_categories,t_message) VALUES (NULL, '$name','$mail','$telephone','$categories','$message1')";
        if ($conn->query($sql2) === TRUE) {
//


            $destinataire = $mail;
            $objet = 'Message bien envoye';

            $messageMail = 'Merci d\'avoir envoye une demande de souscription pour un abonnement pour '.$categories.', nous vous contacterons dans les prochains jours.';

//            $headers .= "From: \"Souscription\" <me@example.com> . \r\n";
//            $headers .= "Reply-To: \"Souscription\" .
//            <me@example.com>\r\n";

            $headers =  'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: MegaSky <me@example.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= "X-Priority : 1\r\n";
            $ok = mail($destinataire, $objet, $messageMail,$headers);

            echo "Votre message a bien été envoyé";
            echo "<br>";
            echo "<a class=\"btn btn-outline-primary\" href='../index.php'>Home</a>";
        }


    }

}

?>