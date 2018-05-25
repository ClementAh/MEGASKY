
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Pre Pago</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>


<a href="./forms.php">FORMS</a>

<form class="form-group" method="post">
    <input type="text" class="form-control" name="name" placeholder="name">
    <input type="text" class="form-control" name="price" placeholder="price">
    <textarea class="form-control" name="description" placeholder="description"></textarea>
    <input type="submit" name="updateBandaLarga" class="form-control" value="update">

</form>

</body>
</html>

<?php
if(isset($_POST['updateBandaLarga'])) {
    $id = ($_GET['id']);
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

    $sql = "UPDATE t_banda_larga SET t_name = '$name', t_price = '$price', t_description = '$description'WHERE ID_banda_larga = '$id' ";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    echo "Update successfull";
    echo "<a href='./cms_pages/banda_larga_cms.php'>Return</a>";

}
?>







