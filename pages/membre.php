<?php

include './functions/admin.func.php';

$req= $db->query('SELECT * FROM users');

?>

<div class="container">
  <div class="row">
    <div class="col">
        <table class="table table-dark">
          <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Pseudo</th>
              <th scope="col">Nom</th>
              <th scope="col">Prenom</th>
              <th scope="col">Age</th>
              <th scope="col">Rôles</th>
            </tr>
          </thead>
          <tbody>
<?php 
    while ($data = $req->fetch()) {
?>
            <tr>
              <th scope="row"><?= $data['id'] ?></th>
              <td><?= $data['pseudo'] ?></td>
              <td><?= $data['nom'] ?></td>
              <td><?= $data['prenom'] ?></td>
              <td><?= $data['age'] ?></td>
              <td><?= $data['role'] ?></td>
<?
    }
?>
            </tr>
          </tbody>
        </table>

        </div>
    </div>
    <hr>
    <a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                 echo ('index.php?page=admin');
            }else{
                echo $_SERVER['HTTP_REFERER'];
            } ?>">Retour à la page précédente</a>
</div>
