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

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'megasky'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM t_contact";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

echo  "<table class=\"table\">";
echo "    <thead >
    <tr class='bg-danger' >
      <th scope = \"col\" >ID</th>
      <th scope = \"col\" >Name</th >
      <th scope = \"col\" >Mail</th >
      <th scope = \"col\" >Telephone</th >
       <th scope = \"col\" >Categorie</th >
      <th scope = \"col\" >Message </th >
      <th scope = \"col\">Action</th>
    </tr >
  </thead >";
while ($row = mysqli_fetch_array($query)) {

    echo ("<tbody >"."<tr >"."<th scope = \"row\" >".$row['ID_contact']."</th ><td >".$row['t_name']."</td ><td >".$row['t_email']."</td ><td>".$row['t_telephone']."</td ><td>".$row['t_categories']."</td ><td>".$row['t_message']."</td ><td> <form method='post' action='message_query.php?id=".$row['ID_contact']."'><input type=\"submit\" class=\"btn btn - outline - danger\" value=\"Delete\" name=\"message\"></form><form method='post' action='message_show.php?id=".$row['ID_contact']."'><input type=\"submit\" class=\"btn btn - outline - danger\" value=\"Open\" name=\"show\"></form></td></tr></tbody>");


}
echo ("</table");


?>

</body>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


