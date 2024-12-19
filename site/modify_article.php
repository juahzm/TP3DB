<?php

require_once('library/check_session.php');
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

</main>


<h1>Modify Article</h1>

<form action="modify_article_store.php" method = "post">
   
   <input type="hidden" name = "id_user" value="<?= $id; ?>">
   <label for="forum_titre">article title</label>
   <input type="text" name = "forum_titre" id = "forum_titre" value="<?= $client['forum_titre']; ?>">

   <label for="forum_article">Article</label>
   <input type="text" name = "forum_article" id = "forum_article" value="<?= $client['forum_article']; ?>">

   <label for="forum_date">Date</label>
   <input type="text" name = "forum_date" id = "forum_date" value="<?= $client['forum_date']; ?>">

   <input type="hidden" name = "user_id_user" value="<?= $client['user_id_user']; ?>">

  
   
   <input type ="submit" value = "Update">

    </form>


</body>
</html>