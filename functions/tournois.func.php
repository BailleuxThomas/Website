<?php
global $db;

$person = $db->query('SELECT * FROM users');

while($members = $person->fetch()){
    if($members['email'] === $_SESSION['email']){
        $members['email'] = $_SESSION['email'];

        $users = array(
            $members['id'],
            $members['nom'],
            $members['prenom'],
            $members['age'],
            $members['email'],
            $members['pseudo'],
            $members['image'],
            $members['role'],
        );
    }
}



if($users[7] === 'tournois' || $users[7] === 'admin' ){
    
}else{
    header('Location: index.php');
}

?>