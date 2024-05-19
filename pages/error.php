<div class="container">
    <div class="row">
    <div class="col text-center text-align-center">
    <h1>Page error</h1>

        <a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                 echo ('index.php');
            }else{
                echo ('index.php');
            } ?>">Retour à la page précédente</a>
    </div>
    </div>
</div>