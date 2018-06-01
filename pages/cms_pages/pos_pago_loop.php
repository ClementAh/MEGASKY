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

    $pictures = $row['t_pictures'];
    $description = $row['t_description'];
    $name = $row['t_name'];
    $canais = $row['t_canais'];
    $canaishd = $row['t_canais_hd'];
    $equipamento = $row['t_equipamento'];
    $price = $row['price'];
    $id_pos_pago = $row['ID_pos_pago'];





    echo
    ("<div class=\"card\" style=\"width: 20rem;\">
  <div class=\"card-header\">
   <ul class=\"nav justify-content-center\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../create_pos_pago.php?id=".$id_pos_pago."\">Create</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../update_pos_pago.php?id=".$id_pos_pago."\">Update</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"../delete_query.php?id=".$id_pos_pago."\">Delete</a>
      </li>
    </ul>
  </div>
     "." <div class=\"categorie\">
     "."<p>".$name."</p>
     "."</div>
     "."<img src=\"../../assets/img/".$pictures."\"/>
     "."<div class=\"description container-fluid\">
     "."<div class=\"row\">
     "."<div class=\"col-md-12\">
     "."<div class=\"container-fluid\">
     "."<div class=\"row\">
     "."<div class=\"canais col-md-3\">
     "."<p><span>".$canais."</span> CANAIS</p>

     "."</div>
     "."<div class=\"canais col-md-3\">
     "."<p><span>".$canaishd."</span> <br>CANAIS HD</p>
     "."</div>
     "."<div class=\"canais col-md-3\">
     "."<p><span>".$equipamento."</span> EQUIPAMENTO</p>
     "."</div>
     "."</div>
     "."</div>

     "."</div>
     "."</div>

     "."</div>

     "."<div class=\"price\">
     "."<span>R$ ".$price."</span> <p>".$description."</p>
     "."</div>
     "."<div class=\"container-fluid\">
     "."<div class=\"row\">
     "."<div class=\"col-md-6\">
     "."<a class=\"button btn btn-primary\" href=\"./detalhes_pos_pago_cms.php?id=".$id_pos_pago."\">DETALHES</a>
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

