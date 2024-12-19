<?php
  require_once('connex/connex.php');
  
$msg = null;
if(isset($_GET['msg']) && $_GET['msg'] == 1){
    $msg = "Invalid username, try again";
}elseif(isset($_GET['msg']) && $_GET['msg'] == 2){
    $msg = "Invalid password, try again";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client_login</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    
<h1>Log in</h1>
<?=$msg;?>
<p>Please use your credentials</p>

<div>
    <form  action="authentication.php" method = "post">
    
       <!-- <label for="id_user" hidden >id_user</label>
       <input type="text" name = "id_user" id = "id_user"> -->
       <label for="username">username</label>
       <input type="text" name = "username" id = "username">
       <label for="password">password</label>
       <input type="password" name = "password" id = "password">
       <input type ="submit" value = "log in">
    
    </form>
</div>

</body>
</html>

