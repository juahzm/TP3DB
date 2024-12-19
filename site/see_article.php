<?php

if(isset($_GET['id_user']) && $_GET['id_user']!=null){

    require_once('connex/connex.php');
   
    $id = mysqli_real_escape_string($connex,$_GET['id_user']);
    $sql = "SELECT forum.*, id_user FROM forum INNER JOIN user ON user_id_user = id_user where forum.user_id_user = '$id'";
    $result = mysqli_query($connex, $sql);


    $count = mysqli_num_rows($result);
    
    if($count == 1){
        $client = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
    }else{
        header('location: home_index.php');
    }
}else{
    header('location: home_index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Article</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<nav>
<ul>
 
    <li><a href="home_index.php">Home</a></li>

</nav>



<main>
<h1>See article</h1>

    <p>Titre:<?= $client['forum_titre']; ?></p>
    <p>Article:<?= $client['forum_article']; ?></p>
    <p>Date:<?= $client['forum_date']; ?></p>
    <p>User<?= $client['id_user']; ?></p>

    <a href="modify_article.php?id_user=<?= $client['user_id_user']; ?>" class="button">Edit</a>
    <form action="delete_article.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id_user']; ?>">
            <input type="submit" value="Delete" class="button">
        </form>
</main>

</body>
</html>