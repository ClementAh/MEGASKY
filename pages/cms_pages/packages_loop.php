<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'megasky'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT *
FROM t_packages ";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_array($query)) {

    echo
    ("<div class=\"card\" style=\"width: 20rem;\"> 
   
    "."<div class=\"titleCat\">
    "."<p>".$row['name']."</p>
    "."</div>
    
    <form method='post' action='./infopackage.php?id=".$row['ID_packages']."'>
    <input type='submit' name='package' value='show more'>
</form>

"."</div> 
    
    
    
    ");

}

