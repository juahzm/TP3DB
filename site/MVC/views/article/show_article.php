<main>
    <h1>See article</h1>

    <p>Titre:<?= $data['forum_titre']; ?></p>
    <p>Article:<?= $data['forum_article']; ?></p>
    <p>Date:<?= $data['forum_date']; ?></p>
    <p>User<?= $data['id_user']; ?></p>

    <a href="?controller=article&function=edit&id_user=<?= $data['user_id_user']; ?>" class="button">Edit</a>
    <form action="delete_article.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id_user']; ?>">
        <input type="submit" value="Delete" class="button">
    </form>
</main>