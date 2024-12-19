<?php


function client_controller_index() {
    render("");
}

function client_controller_create()
{
    require_once(MODEL_DIR . "/client.php");
    $data = client_insert($request);
    return render("client/create.php", $data);
}


function client_controller_store($request)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=client');
    }
    //print_r($request);
    require_once(MODEL_DIR . "/client.php");
    $data = client_insert($request);
    header('location:?controller=client&function=show&id=' . $data);
}
