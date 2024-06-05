<?php
include './functions/admin.func.php';
?>

<div class="container">
  <div class="row">
    <div class="col">
   <libellé>Contenu sans utiliser de balise html</libellé>
   <textarea id="story" name="story" rows="5" cols="33">
    
    </textarea>
    </input>
    </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col">
        <a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                 echo ('index.php?page=admin');
            }else{
                echo $_SERVER['HTTP_REFERER'];
            } ?>">Retour à la page précédente</a>
        </div>
    </div>
</div>