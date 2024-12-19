<h1>Edit article</h1>

<form action="?controller=article&function=article_store_update" method="post">

    <input type="hidden" name="user_id_user" id="user_id_user" value="<?= $data['user_id_user']; ?>">
    <label for="forum_titre">article title</label>
    <input type="text" name="forum_titre" id="forum_titre" value="<?= $data['forum_titre']; ?>">

    <label for="forum_article">Article</label>
    <input type="text" name="forum_article" id="forum_article" value="<?= $data['forum_article']; ?>">

    <label for="forum_date">Date</label>
    <input type="text" name="forum_date" id="forum_date" value="<?= $data['forum_date']; ?>">

    <input type="submit" value="Save">

</form>