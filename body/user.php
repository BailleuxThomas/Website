<?php
global $db;

$person = $db->query('SELECT * FROM users');


if(isset($users)){

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


?>



<div class="menu-left">
    <div class="profil">    
        <div class="profilcolor">
        <span class="badge badge-pill badge-info ml-5">Vous êtes connecté</span>
            <br>
            <hr style="border:1px dashed #7f8fa6;">
            <p class="ml-5" style="word-wrap:break-word">
                Bienvenue à toi,
                <?php
                echo $br;
                echo (ucfirst($users[1]).' ');
                echo ucfirst($users[2]);
                echo $br;
                echo ucfirst($users[4]);
                echo $br;
                echo $br;
                echo ('<img class="photoprofil" src="img/posts/'.$users[6].'" alt="img/posts/'.$users[6].'">');
                echo $br;
                date_default_timezone_set('Europe/Paris');
                setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
                echo ucfirst(strftime('%A %d %B %Y, %H:%M')); // jeudi 11 octobre 2012, 16:03
                echo $br;
                ?>
                <a href="index.php?page=profil">Votre profil</a>
                <a href="index.php?page=deco">Déconnexion</a>
            </p>
            <hr style="border:1px dashed #7f8fa6;;">
        </div>
    </div>
</div>

<? }?>

