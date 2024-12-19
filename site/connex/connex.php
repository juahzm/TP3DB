<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "forum"; 

$connex = mysqli_connect($servername, $username, $password, $dbname, 3306);

if (mysqli_connect_error()) {
    echo "Failed to connect".mysqli_connect_error();
    exit();
}
mysqli_set_charset($connex, "utf8");

?>