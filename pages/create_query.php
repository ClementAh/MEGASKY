<?php

// Pos Pago //

if(isset($_POST['createPosPago'])) {

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

    $sql = "INSERT INTO t_pos_pago (ID_pos_pago,t_name , t_pictures, t_canais , t_canais_hd , t_equipamento, price, t_description) VALUES (NULL, '$name', '$pictures','$canais','$canaishd','$equipamento','$price','$description')";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    echo "Creation is good";
    echo "<a href='./cms_pages/pos_pago_cms.php'>FORMS</a>";
}


// Pre pago //


if(isset($_POST['createPrePago'])) {
    $name = ($_POST['name']);
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

    $sql = "INSERT INTO t_pre_pago (ID_pre_pago,t_name ,t_price, t_description) VALUES (NULL, '$name', '$price','$description')";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    echo "Creation successfull";
    echo "<a href='./cms_pages/pre_pago_cms.php'>FORMS</a>";
}
?>


<?php

if(isset($_POST['createBandaLarga'])) {
$name = ($_POST['name']);
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

$sql = "INSERT INTO t_banda_larga (ID_banda_larga,t_name ,t_price, t_description) VALUES (NULL, '$name', '$price','$description')";

$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
echo "Creation successfull";
echo "<a href='./cms_pages/banda_larga_cms.php'>Return</a>";
}
?>

