
<?php
require_once('library/check_session.php');



if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:home_index.php');
}

require_once('connex/connex.php');


$id = mysqli_real_escape_string($connex,$_POST['id_user']);
$forum_titre = mysqli_real_escape_string($connex,$_POST['forum_titre']);
$forum_article = mysqli_real_escape_string($connex,$_POST['forum_article']);
$forum_date = mysqli_real_escape_string($connex,$_POST['forum_date']);
$user_id_user = mysqli_real_escape_string($connex,$_POST['user_id_user']);


$sql = "UPDATE forum SET forum_titre='$forum_titre', forum_article='$forum_article', forum_date='$forum_date' WHERE user_id_user = $id ";

if(mysqli_query($connex, $sql)){
    header('location:home_index.php');
}else{
    echo 'Error: '.mysqli_error($connex);
}


?>