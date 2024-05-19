<?php

function get_post()
{
    global $db;

    $req = $db->query("
    SELECT * FROM posts
    WHERE posts.id='{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}

?>