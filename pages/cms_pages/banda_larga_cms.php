<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS BANDA LARGA</title>
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
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/banda_larga_cms.php">Banda Larga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cms_pages/message_cms.php">Message</a>
            </li>
            <li>
                <a class="nav-link" href="./chat.php">Chat</a>
            </li>
            <li>
                <a class="nav-link" href="./slide_cms.php">Slide</a>
            </li>


        </ul>
    </div>
</nav>

<?php include "./banda_larga_loop.php" ?>