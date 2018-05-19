<?php

if(isset($_POST['message'])) {

    $id = $_GET['id'];

    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'megasky'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = "DELETE FROM t_contact WHERE ID_contact = $id";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }

    echo "Delete with success !";
    echo "<a class=\"btn btn-outline-primary\" href='message_cms.php'>Return</a>";
}