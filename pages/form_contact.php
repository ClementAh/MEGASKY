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

            $messageMail = "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>CMS DETALHES</title>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../../assets/css/styles.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">

</head>
<body style='background-color: #DFDFDF'>

<div class =\"image\">
    <img src=https://imgur.com/LJwFV2C style='width:200px;height:100px; margin-left: 25px; margin-top: 50px'>
</div>

<div class='contact'style='text-align: right;font-weight: bold;margin-right: 20px'>
    <p>MEGASKY</p>
    <p>62 000 000</p>
    <p>MEGASKY@gmail.com</p>
</div>
<br>

<div class=\"content\">
    <p style='text-align: center;font-size: 22px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean accumsan at libero sed bibendum.<span style='color: #FD4A4A;font-weight: bold'>$categories</span> Pellentesque sit amet rhoncus nulla. Sed tempus, Nulla imperdiet tristique lectus, eget finibus ex varius interdum. Etiam in justo massa. Vestibulum viverra nec orci nec luctus. Aenean auctor lobortis tortor ut pretium. Nunc eget lacinia leo. Donec eu dapibus mauris, vitae ultricies sem.</p>
</div>

<br>

<div style='text-align: center'>
<ul style='margin: 0;padding: 0;'>
    <li style='display: inline-block;margin-left : 10px;'><a href='http://localhost/MEGASKY/pages/banda_larga.php'><p style='font-weight: bold;font-size: 20px'>Banda Larga</a></li>
    <li style='display: inline-block;margin-left : 10px;'><a href='http://localhost/MEGASKY/pages/pre_pago.php'><p style='font-weight: bold;font-size: 20px'>Pre Pago</a></li>
    <li style='display: inline-block;margin-left : 10px;'><a href='http://localhost/MEGASKY/pages/pos_pago.php'><p style='font-weight: bold;font-size: 20px'>Pos Pago</a></li>
    <li style='display: inline-block;margin-left : 10px;'><a href='http://localhost/MEGASKY/index.php'><p style='font-weight: bold; font-size: 20px'>Home</a></li>
</ul>
   
</div>

</body>
</html>";



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
            echo "<a href=\"../index.php\">HOME</a>";
                                   
            
           
        }


    }

}

?>