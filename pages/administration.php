<?php
include './functions/admin.func.php';
?>

<div class="container">
  <div class="row">
    <div class="col">
<p>User: root</p>
<p>Mdp: root</p>
</div>
    </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col">
<a href="https://soft.o2switch.net:2083/cpsess4236044261/frontend/o2switch/index.html?login=1&post_login=73900979817547" target="_blank" rel="noopener noreferrer">Système</a>
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