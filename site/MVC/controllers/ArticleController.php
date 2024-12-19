<?php


function article_controller_article_index() {

    render("");
}

function article_controller_create()
{
    require_once(MODEL_DIR . "/client.php");
    $data = article_insert($request);
    return render("article/create_article.php", $data);
}


function article_controller_store($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }
    //print_r($request);
    require_once(MODEL_DIR . "/articles.php");
    $data = article_insert($request);
    header('location:?controller=Article&function=show&id=' . $data);
}

function article_controller_show($request)
{
    $id = $request['user_id_user'];
    require_once(MODEL_DIR . "/articles.php");
    $data = article_select_id($$user_id_user);
    return render("article/show_article.php", $data);
}

function article_controller_edit($request)
{
    $id = $request['user_id_user'];
    require_once(MODEL_DIR . "/articles.php");
    $data = article_select_id($user_id_user);

    return render("article/article_edit.php", $data);
}

function article_controller_store_update($request)
{

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }

    require_once(MODEL_DIR . "/articles.php");
    $data = article_update($request);
    if ($data) {
        header('location:?controller=article');
    } else {
        echo "error";
    }
}


function article_controler_delete($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article');
    }

    $id = $request['user_id_user'];
    require_once(MODEL_DIR . "/articles.php");
    $data = article_delete($user_id_user);
    if ($data) {
        header('location:?controller=article');
    } else {
        echo "error";
    }
}
