<?php

function get_tuto()
{
    global $db;

    $req = $db->query("
    SELECT * FROM tuto
    WHERE tuto.id='{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}

?>