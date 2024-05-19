<?php

include './functions/connected.func.php';

include './functions/log.func.php';

if(isset($_POST['update'])){
  if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) || isset($_POST['password']) AND !empty($_POST['password'])){
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $id = $users[0];

      $update = $db->prepare('UPDATE users SET pseudo = ?, password = ?  WHERE id = ?');
      $update->execute(array($pseudo, $password, $id));
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
            <input type="password" name="password">
          </li>
        </ul>
        <input type="submit" name="update">
      </div>
    </form>
  </div>
</div>



