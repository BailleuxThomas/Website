<?php


    global $db;

    $db->query('SELECT * FROM users');
    

    $req = $db->query("
    UPDATE users 
    SET pseudo='Sizzer' 
    WHERE id=12 
    LIMIT 1
    ");

?>