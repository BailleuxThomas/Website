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
        if(strtolower($_POST['commentaire'])){
            
            if(strcmp(($_POST['commentaire']), $insulte !== 0)){
                print_r(strcmp(($_POST['commentaire']), $insulte !== 0));
            }

            
        }else{
            $errordenvoi = "Pas d'insulte merci";
        }
}
}
    ?>

                <?php
            while ($data = $req2->fetch()) {


for ($i=0; $i < 1; $i++) { 
    ?>

                <div>
                    <p>
                        <?php echo $data['pseudo']; ?>:
                    </p>
                    <p>
                        <?php echo $data['date'];?>
                    </p>
                    <p>
                        <?php echo $data['commentaire']; ?>
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