<?php
require_once('library/check_session.php');
require_once('connex/connex.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<nav>
<ul>
    <li><a href="home_index.php">Home</a></li>
  
</ul>
</nav>
    
<main>
    <h1>Create article</h1>

    <form action="article_create_store.php" method = "POST">
   <!-- <label for="user_id_user" hidden >user_id_user</label>
   <input type="hidden" name = "user_id_user" id = "user_id_user"> -->
   <label for="forum_titre">article title</label>
   <input type="text" name = "forum_titre" id = "forum_titre">

   <label for="forum_article">Article</label>
   <input type="text" name = "forum_article" id = "forum_article">

   <label for="forum_date">Date</label>
   <input type="text" name = "forum_date" id = "forum_date">
   
   <input type ="submit" value = "Save">

    </form>
    
</main>

</body>
</html>



