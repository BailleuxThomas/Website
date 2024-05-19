<?php



global $db;

$req    = $db->query('SELECT * FROM posts');
$req2   = $db->query('SELECT * FROM commentaires');
$br = "<br>";


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

$options = array(
    'pseudo' => FILTER_SANITIZE_STRING,
    'commentaire' => FILTER_SANITIZE_STRING);

$aucunhtml = filter_input_array(INPUT_POST, $options);


?>



    <div class="row">
        <div class="col-sm-9">
            <?php
            while ($data = $req->fetch()) {
            ?>
            <?php

for ($i=0; $i < 1; $i++) { 
    if($data['id']% 2 == 1){
    ?>
            <div class="media">
                <a href="img/posts/<?= $data['image'] ?>" target="_blank" rel="noopener noreferrer"><img
                        class="imagearticle" src="img/posts/<?= $data['image'] ?>" class="mr-3 design-border"
                        alt="img/posts/<?= $data['image'] ?>"></a>
                <div class="media-body">
                    <h5 class="mt-0"><?= $data['title'] ?></h5>
                    <p><?php echo substr(nl2br($data['content']), 0, 100).('...'); ?></p>
                    <p>Skills utilisés: <?= $data['skill']?></p>
                    <a href="<?= $data['url'] ?>" target="_blank" rel="noopener noreferrer"><?= $data['url'] ?></a>
                    <br>
                    <br>
                    <a href="<?= $data['url_github'] ?>" target="_blank"
                        rel="noopener noreferrer"><?= $data['url_github'] ?></a>
                    <br>
                    <br>
                    <a class="clickarticle1" href="index.php?page=post&id=<?= $data['id'] ?>">Lire l'article complet</a>
                </div>
            </div>
            <hr style="border:3px dashed #7f8fa6;">
            <?php   }else{
    ?> <div class="media">
                <div class="media-body">
                    <h5 class="mt-0"><?= $data['title'] ?></h5>
                    <p><?php echo substr(nl2br($data['content']), 0, 100).('...'); ?></p>
                    <p>Skills utilisés: <?= $data['skill']?></p>
                    <a href="<?= $data['url'] ?>" target="_blank" rel="noopener noreferrer"><?= $data['url'] ?></a>
                    <br>
                    <br>
                    <a href="<?= $data['url_github'] ?>" target="_blank"
                        rel="noopener noreferrer"><?= $data['url_github'] ?></a>
                    <br>
                    <br>

                    <a class="clickarticle2" href="index.php?page=post&id=<?= $data['id'] ?>">Lire l'article complet</a>
                </div>
                <a href="img/posts/<?= $data['image'] ?>" target="_blank" rel="noopener noreferrer"><img
                class="imagearticle" src="img/posts/<?= $data['image'] ?>" class="mr-3 design-border"
                        alt="img/posts/<?= $data['image'] ?>"></a>
            </div>
            <hr style="border:3px dashed #7f8fa6;">
            <?php
}         
}


?>
            <br>
            <br>
            <?php
            }

            $req->closeCursor(); 

            ?>
        </div>
        <div class="col-sm-3 profil">
            <div class="profilcolor">
                <span class="badge badge-pill badge-info">Vous êtes connecté</span>
                <br>
                <hr style="border:1px dashed #7f8fa6;">
                <p style="word-wrap:break-word">
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
                setlocale(LC_TIME, 'fra_fra');
                echo $br;
                echo ucfirst(strftime('%A %d %B %Y, %H:%M')); // jeudi 11 octobre 2012, 16:03
                echo $br;

                ?>
                    <a href="index.php?page=deco">Déconnexion</a>
                </p>
                <hr style="border:1px dashed #7f8fa6;;">

                <div class="commentaire">
                    <p style="text-align:center">Chat</p>

                    <?php

$pseudo = $users[5];

$insulte = array('tg','fdp','nique ta mere','pd','pute','salope','bite' , 'baisable' , 'baise' , 'baiser' , 'bander' , 'branler' , 'branlette' , 'bordel' , 'burnes' , 'chatte' , 'sexe'
, 'chiant', 'chiante' , 'chiasse' , 'chier' , 'chiottes' , 'con' , 'conne' , 'connerie' , 'coucougnettes' , 'couille', 'couillu' , 'cul' , 'déconner' , 'déconneur' , 'emmerder' , 'emmerdant'
 , 'emmerdeureuse' , 'empapaouter' , 'enculer' , 'entuber' , 'faire chier' , 'faire une pipe' , 'foutoir' , 'foutre' , 'foutre le camp' , 'foutu' , 'gueule' , 'gueuler' , 'merde' , 'merder',
 'merdier' , 'merdique' , 'niquer' , 'nique ta mère' , 'pisser' , 'putain' , 'pute' , 'roubignoles' , 'roupettes' , 'roustons' , 'se faire sauter' , 'sucer' , 'ta gueule' , 'tirer un coup' , 'turlutte',
 'zigounette' , 'zob', 'baiser', 'baiser ta pute de mere', 'baiser ton chien', 'baiser ton père', ',tes un baiser');



if (isset($_POST['sendcommentaire'])) {
    if(isset($_POST['commentaire']) AND !empty($_POST['commentaire'])){
        if(in_array(strtolower($_POST['commentaire']), $insulte)){
            $errordenvoi = "Pas d'insulte merci";
        }else{
        $commentaire = $aucunhtml['commentaire'];

        $requete = $db->prepare('INSERT INTO commentaires(pseudo, commentaire)
        VALUES(:pseudo, :commentaire)');
    
    
        $requete->bindValue(':pseudo', $pseudo);
        $requete->bindValue(':commentaire', $commentaire);
        $requete->execute();

        echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
        exit;
        }
}
}
    ?>

                    <?php
            while ($data = $req2->fetch()) {


for ($i=0; $i < 1; $i++) { 
    ?>

            <div>
            <p><?php echo $data['pseudo']; ?>:</p>
            <p><?php echo $data['date'];?></p>
            <p><?php echo $data['commentaire']; ?>
            <hr style="border:1px dashed #7f8fa6;">
            </div>


<?php        }} ?>
<br>
<br>

<?php

if(isset($errordenvoi)){
    ?>
<p class="errorinscription">
    <?php
    echo $errordenvoi;
}

?>
</p>

                    <form method="POST">
                        <label for="commentaire">Commenter:</label>
                        <input name="commentaire" id="commentaire" name="commentaire" type="text">
                        <input type="submit" name="sendcommentaire" value="envoyer">
                    </form>
                </div>
            </div>
        </div>
    </div>



<div class="pubthomas">
<a href="index.php?page=presentation" title="CLIQUE ICI">
<img class="pubthomas" src="img/posts/thomas.png" alt="Image de Bailleux Thomas + bouton afin de voir ma présentation">
</a>
</div>