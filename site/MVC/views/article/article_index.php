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
                <td><a href="?Controller=article&function=showid_user=<?= $row['id_user'] ?>" class="button">See</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>