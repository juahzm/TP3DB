<?php
session_start();
require_once('connex/connex.php');
if (!isset($_SESSION['fingerPrint']) || $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header('location:client_login.php');
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location:home_index.php');
}

foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "DELETE FROM forum WHERE user_id_user ='$id_user'";

if (mysqli_query($connex, $sql)) {
    header('location:home_index.php');
} else {
    echo 'Error: ' . mysqli_error($connex);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Article</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="create_article.php">Create Article</a></li>
            <li><a href="home_index.php">Home</a></li>

    </nav>







</body>


</html>