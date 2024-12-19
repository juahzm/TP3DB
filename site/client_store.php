<?php
require_once('connex/connex.php');
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  header('location:client_create.php');
}



$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$birthday = $_POST['birthday'];


$password = password_hash($password, PASSWORD_BCRYPT,['cost'=>10]);

$sql = "INSERT INTO user (name, username, password, birthday) values ('$name', '$username', '$password', '$birthday' )";


if(mysqli_query($connex, $sql)){
    header('location:client_login.php');
}else{
    echo "ERROR ".mysqli_error($connex);
}


?>