<?php
require_once('library/check_session.php');
require_once('connex/connex.php');
$sql = $sql = "SELECT forum.*, id_user FROM forum INNER JOIN user ON
user_id_user = user.id_user";
$result = mysqli_query($connex, $sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="article_create.php">Create Article</a></li>

        </ul>

    </nav>


    <main>



        <table>
            <thead>
                <tr>
                    <th>id forum</th>
                    <th>Article</th>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>User Id</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) {
                ?>
                    <tr>
                        <td><?= $row['id_forum'] ?></td>
                        <td><?= $row['forum_article'] ?></td>
                        <td><?= $row['forum_date'] ?></td>
                        <td><?= $row['forum_titre'] ?></td>
                        <td><?= $row['user_id_user'] ?></td>
                        <td><a href="see_article.php?id_user=<?= $row['id_user'] ?>" class="button">See</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </main>


</body>

</html>