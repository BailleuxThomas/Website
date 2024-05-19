<?php

function is_user($email, $password)
{

    global $db;

    $a = [
        'email' => $email,
    ];

    $sql = "SELECT * FROM users WHERE email = :email";
    $req = $db->prepare($sql);
    $req->execute($a);
    $user = $req->fetch();

    if(empty($user)){
        return false;
    }

    if(password_verify($password,$user['password'])){
        return true;
    }

    return false;
}
