<?php
session_start();
require_once('connex/connex.php');

if($_SERVER['REQUEST_METHOD'] != 'POST'){ //s'il n'y a pas une authentification post, je ne peux pas acceder. obligatoire.
    header('location:client_login.php');
  }
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  

$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($connex, $sql);



$count = mysqli_num_rows($result);
var_dump($count);
if($count == 1){
  

    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dbPassword = $user['password'];

    if(password_verify($password, $dbPassword)){
     
    session_regenerate_id(); //la suivante c'est la cle a passer sur toutes les pages que je veux securiser, atention!!!!!
    
    // <?php
    // session_start();
    // if(!isset($_SESSION['fingerPrint']) || $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
    //     header('location:client_login.php');
    // }
    /*?> */ 
  
    $_SESSION['id_user'] = $user['id_user']; //pour les articles ca va etre important... INSERT... id = $_SESSION['id'] 
    $_SESSION['name'] = $user['name'];
    $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
print_r($_SESSION);
    
    header('location:home_index.php');
    }else{
        header('location:client_login.php?msg=2');
    }

 }else{
    header('location:client_login.php?msg=1');
}


?>