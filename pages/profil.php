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
        <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer la photo du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer la photo du compte Tournoi";
            }else{echo "<input type='file' name='' id=''>";}?>
      </div>
      <div class="col">
        <ul>
          <li>
          <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer le pseudo du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer le pseudo du compte Tournoi";
            }else{echo "Pseudo: "; echo "<input type='text' placeholder='$users[5]'>";}?>
          </li>
          <li>
          <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer le nom du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer le nom du compte Tournoi";
            }else{echo "Nom: "; echo "<input type='text' placeholder='$users[1]'";}?>
          </li>
          <li>
          <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer le prénom du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer le prénom du compte Tournoi";
            }else{echo "Prénom: "; echo "<input type='text' placeholder='$users[2]'";}?>
          </li>
          <li>
            Age:
            <?php echo $users[3]?>
          </li>
          <li>
          <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer l'adresse email du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer l'adresse email du compte Tournoi";
            }else{echo "Adresse email: "; echo "<input type='text' placeholder='$users[4]'";}?>
          </li>
          <li>
            <?php if($users[0]=='9'){
              echo "Vous ne pouvez pas changer le mot de passe du compte Test";
            }elseif($users[0]=='18'){
              echo "Vous ne pouvez pas changer le mot de passe du compte Tournoi";
            }else{echo "Nouveau mot de pass: "; echo "<input type='password' name='password>'";}?>
          </li>
        </ul>
        <input type="submit" name="update">
      </div>
    </form>
  </div>
</div>



