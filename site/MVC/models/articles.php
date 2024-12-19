<?php

function article_select()
{
    require_once(CONNEX_DIR);
    $sql = $sql = "SELECT forum.*, id_user FROM forum INNER JOIN user ON
user_id_user = user.id_user";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}


function article_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO forum (forum_article, forum_date, forum_titre, user_id_user) values ('$forum_article', '$forum_date', '$forum_titre', '$user_id_user')";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

function article_select_id($user_id_user)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $user_id_user);
    $sql = "SELECT forum.*, id_user FROM forum INNER JOIN user ON user_id_user = id_user where forum.user_id_user = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}


function article_update($request)
{

    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE forum SET forum_titre='$forum_titre', forum_article='$forum_article', forum_date='$forum_date' WHERE user_id_user = $id ";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

function article_delete($user_id_user)
{

    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $user_id_user);
    $sql =  "DELETE FROM forum WHERE user_id_user ='$id_user'";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}
