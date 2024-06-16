<?php
global $db;

$person = $db->query('SELECT * FROM users');


if(isset($_SESSION['email'])){
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
}
?>

<nav id="navbar" class="navtopbar">
<div class="container-fluid topbar">
  <div class="row">
    <div class="col">
      <ul class="ultopbar">
        <li class="litopbar"><a href="index.php">Accueil</a></li>
        <?php if(isset($_SESSION['membre'])){echo '<li class="litopbar"><a href="index.php?page=blog">Blog</a></li>'; }?>
        <?php if(isset($_SESSION['membre'])){echo '<li class="litopbar"><a href="index.php?page=tutorial">Tuto</a></li>'; }?>
        <?php if(isset($_SESSION['membre'])){echo '<li class="litopbar"><a href="index.php?page=video">Plaisir</a></li>'; }?>
        <?php if(isset($_SESSION['membre'])){if($users[7] === 'tournois' OR $users[7] === 'admin') {echo '<li class="litopbar"><a href="index.php?page=tournois">Tournois</a></li>'; }}?>
        <img class="imagetopbar" src="img/posts/astro.png" alt="">
        <li class="litopbar"><a href="index.php?page=cgu">CGU</a></li>
        <?php if(isset($_SESSION['membre'])){echo '<li class="litopbar"><a href="index.php#contact">Contact</a></li>'; }?>
        <?php if(isset($_SESSION['membre'])){if($users[7] === 'alessia'){echo '<li class="litopbar"><a href="index.php?page=alessia">Alessia</a></li>';}}?>
        <?php if(isset($_SESSION['membre'])){if($users[7] === 'admin'){echo '<li class="litopbar"><a href="index.php?page=admin">Admin</a></li>';}}?>
      </ul>
    </div>
  </div>
</div>
</nav>
