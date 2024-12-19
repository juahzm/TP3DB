<?php
require_once('library/check_session.php');
session_regenerate_id();
require_once('connex/connex.php');

   
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  header('location:article_create.php');}

$forum_article = $_POST['forum_article'];
$forum_date= $_POST['forum_date'];
$forum_titre = $_POST['forum_titre'];
// $_SESSION['id_user'] = $user['id_user'];
$user_id_user = $_SESSION['id_user'];

$sql = "INSERT INTO forum (forum_article, forum_date, forum_titre, user_id_user) values ('$forum_article', '$forum_date', '$forum_titre', '$user_id_user')";


if(mysqli_query($connex, $sql)){
    
    header('location:home_index.php');
}else{
    echo "ERROR ".mysqli_error($connex);
}


    
?>

