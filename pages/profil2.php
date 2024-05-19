<?php

include './functions/connected.func.php';

include './functions/log.func.php';

if(isset($_POST['update'])){
  if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $id = $users[0];

    $update = $db->prepare('UPDATE users SET pseudo= ? WHERE id= ?');
    $update->execute(array($pseudo, $id));
    header('Location: ./index.php?page=profil');
  }
}

?>

<div class="container">
  <div class="row">
      <div class="col-md-6">
      <form method="POST">
        <img src="./img/profil/<?php echo $users[6]?>" alt="./img/profil/<?php echo $users[6]?>" />
        <br>
        <input type="file" name="" id="">
      </div>
      <div class="col">
        <ul>
          <li>
            Pseudo:
          <input type="text" name="pseudo" placeholder="<?php echo $users[5]?>">
          </li>
          <li>
            Nom:
            <input type="text" placeholder="<?php echo $users[1]?>">
          </li>
          <li>
            Prénom:
            <input type="text" placeholder="<?php echo $users[2]?>">
          </li>
          <li>
            Age:
            <?php echo $users[3]?>
          </li>
          <li>
            Adresse email:
            <input type="text" placeholder="<?php echo $users[4]?>">
          </li>
          <li>
            Nouveau mot de pass:
          </li>
        </ul>
        <input type="submit" name="update">
      </div>
    </form>
  </div>
</div>



