<?php

function get_users()
{
    global $db;

    $req = $db->query("
    SELECT * FROM users
    WHERE users.id='{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}

?>