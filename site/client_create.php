<?php
require_once('connex/connex.php');
// print_r($_SERVER); prends les infos pour authentication(key)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client_Create</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<h1>Create an account</h1>

<div>
    <form  action="client_store.php" method = "post">
       <label for="name">name</label>
       <input type="text" name = "name" id = "name">
       <label for="username">username</label>
       <input type="text" name = "username" id = "username">
       <label for="password">password</label>
       <input type="password" name = "password" id = "password">
       <label for="birthday">birthday</label>
       <input type="date" name = "birthday" id = "birthday">
       <input type ="submit" value = "Create">
    </form>
</div>            
    
</body>
</html>