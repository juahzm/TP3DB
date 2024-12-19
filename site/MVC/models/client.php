<?php

function client_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO user (name, username, password, birthday) values ('$name', '$username', '$password', '$birthday' )";


    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}
