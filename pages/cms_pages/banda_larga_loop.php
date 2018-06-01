
<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'megasky'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM t_banda_larga";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}


while ($row = mysqli_fetch_array($query)) {

    $name = $row['t_name'];
    $price =  $row['t_price'];
    $description = $row['t_description'];
    $id_banda_larga = $row['ID_banda_larga'];


    echo
    ("<div class=\"card\" style=\"width: 20rem;\"> 

    <div class=\"card-header\">
        <ul class=\"nav justify-content-center\">
        
             <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"../create_pre_pago.php?id=".$id_banda_larga."\">Create</a>
             </li>
             
             <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"../update_pre_pago.php?id=".$id_banda_larga."\">Update</a>
             </li>
             
             <li class=\"nav-item\">
                 <a class=\"nav-link\" href=\"../delete_query.php?id=".$id_banda_larga."&amp;name=".$row['t_name']."\">Delete</a>
             </li>
             
         </ul>
   </div> 
      
    "."<div class=\"titleCat\">
    "."<p>".$name."</p>
    "."</div>

    "."<div class=\"card-body col-md-12\">"."
        "."<div class=\"container\">
             "."<div class=\"row\">
             
                "."<div class=\"spotPrice col-md-12\">
                    "."<p>A partir de</p><span class=\"price2\">R$ ".$price."</span><span class=\"afterPrince\">/mês</span>
                "."</div>
                
             "."</div>
        "."<div class=\"row\">
     
      
        "."<div class=\"condition col-md-12\">
            "."<p>".$description."</p>
        "."</div>
    
    "."</div>
    
    </div>
    
    "."</div>
    "."<div class=\"container\">
    "."<div class=\"row\">
    "."<div class=\"col-md-6\">
    "."<a class=\"button btn btn-primary\" href=\"./detalhes_pre_pago_cms.php?id=".$id_banda_larga."\">DETALHES</a>
    "."</div>
    "."<div class=\"col-md-6\">
    "."<a href=\"#\" class=\"btn btn-primary\">ASSINA</a>
    "."</div>
    "."</div>
    "."</div>
    "."</div>
    "."</div>");


}
