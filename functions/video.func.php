<?php
function get_video(){
    global $db;

    $req = $db->query("
    SELECT * FROM video
    WHERE video.id='{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}

?>