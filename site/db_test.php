<?php

require_once('connex/connex.php');

// $requete = "select * from forum.user";
$requete = "select username from user";

// $requete = "SELECT username, id_forum from user
// inner join forum on (forum_id_forum =id_forum)
// order by username DESC";

$result = mysqli_query($connex, $requete);

$usernames = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($usernames);

foreach ($result as $username) {
   print_r($username);
   echo "<br>";
}


?>