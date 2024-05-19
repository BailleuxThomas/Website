<?php

include './functions/tournois.func.php';

include './functions/tournois-race.func.php';

include './functions/tournois-push.func.php';


global $db;

$req= $db->query('SELECT * FROM tournois');
?>



<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Pseudo Equipe 1</th>
            <th scope="col">Civilisation Equipe 1</th>
            <th scope="col">Score 1</th>
            <th scope="col">Score 2</th>
            <th scope="col">Speudo Equipe 2</th>
            <th scope="col">Civilisation Equipe 2</th>
            <!-- <th scope="col">Replay</th> -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <form method="post" enctype="multipart/form-data">
              <th scope="row"><input class="Pseudo1" type="text" id="Pseudo1" placeholder="Pseudo Joueur 1"
                  name="Pseudo1" value="<?php if(trim($Pseudo1) == false);else{echo $Pseudo1;} ?>" require></th>
              <td>
                <select name="Race1">
                  <?php foreach($tab as $race => $value){?>
                  <option require>
                    <?php echo $race;}?>
                  </option>
                </select>
              </td>
              <td><input class="Score1" type="number" id="Score1" placeholder="score Joueur 1" name="Score1" min="0"
                  max="10" value="<?php if(trim($Score1) == false);else{echo $Score1;} ?>" require></td>
              <td><input class="Score2" type="number" id="Score2" placeholder="score Joueur 2" name="Score2" min="0"
                  max="10" value="0" require></td>
              <td><input class="Pseudo2" type="text" id="Pseudo2" placeholder="Pseudo Joueur 2" name="Pseudo2" value=""
                  require></td>
              <td><select name="Race2">
                  <?php foreach($tab as $race => $value){?>
                  <option require>
                    <?php echo $race;}?>
                  </option>
                </select></td>
              <!-- <td><input type="file" name="" id=""></td> -->
              <button type="submit" name="pushscore" value="Envoyer" class="btn btn-primary mb-2">Balance ton
                score</button>
            </form>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br>

<?php

if(isset($errorinscription)){
    ?>
<p class="errorinscription">
  <?php
    echo $errorinscription;
}
    ?>



<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Pseudo Equipe 1</th>
            <th scope="col">Civilisation</th>
            <th scope="col">Score</th>
            <th scope="col">Speudo Equipe 2</th>
            <th scope="col">Civilisation</th>
            <th scope="col">Replay</th>
          </tr>
        </thead>
        <tbody>
          <?php 
    while ($data = $req->fetch()) {
?>
          <tr>
            <th scope="row">
              <?= $data['Pseudo1'] ?>
            </th>
            <td>
              <img class="civilisationimg" src="./img/civilisation/<? foreach($tab as $race => $value){
                if($data['Race1']==$race){
                echo $value;
                };
              } ?>" alt="">
            </td>
            <?php if($data['Score1'] > $data['Score2']){
    echo  '<td><strong class="civilisationgreen">'. $data['Score1'].'</strong> - <strong class="civilisationred">'. $data['Score2'].'</strong></td>';
}else if($data['Score1']==$data['Score2']){
    echo  '<td><strong class="civilisationnul">'. $data['Score1'].'</strong> - <strong class="civilisationnul">'. $data['Score2'].'</strong></td>'; 
}
else{
    echo  '<td><strong class="civilisationred">'. $data['Score1'].'</strong> - <strong class="civilisationgreen">'. $data['Score2'].'</strong></td>';
}?>
            <td>
              <?= $data['Pseudo2'] ?>
            </td>
            <td>
              <img class="civilisationimg" src="./img/civilisation/<? foreach($tab as $race => $value){
                if($data['Race2']==$race){
                echo $value;
                };
              } ?>" alt="">
            </td>
            <td><a href="http://" target="_blank" rel="noopener noreferrer" download>
                <?= $data['Replay'] ?>
              </a></td>
            <?
    }
?>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>