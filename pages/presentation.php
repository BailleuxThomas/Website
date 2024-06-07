<?php

if (isset($_SESSION['membre'])) {
}else{
    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
}

?>


<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>Comment est venue cette envie pour le code?</h1>
    
            <p>J'ai eu le privilège d'intégrée la section "Turing" au sein de la formation "BeCode".</p>
            <p>Grâce à elle, j'ai découvert une passion mais aussi une manière différente d'apprendre, être optimiste, toujours rester focus sur ses objectif.</p>
    
            <h2>Pourquoi moi ?</h2>
    
            <p>A la fin de mes études, j'ai eu la chance de réaliser beaucoup de petit boulot bien varié et pas forcément super.</p>
            <p>En ce moment je travail pour la société "Match SA" en tant que préparateur de commande, cela fait déjà quatre ans que je suis parmi eux. </p>
            <p>Je bosse sur ce site, afin de vous prouver que je suis motivée d'apprendre.</p>
            <p>Et pour ce faire rien de mieux qu'un travail réalisé avec une vrai détermination.</p>
    
            <hr>
          <p>Bailleux Thomas</p>
          <a href="mailto:thomasbailleux2@gmail.com" title="Contactez-moi par mail">thomasbailleux2@gmail.com</a>
          <br>
          <a href="https://www.linkedin.com/in/bailleuxthomas-dev/" target="_blank" title="Clique hésite pas!">linkedin.com/in/bailleuxthomas-dev/</a>
          <br>
          <a href="https://github.com/BailleuxThomas" target="_blank" title="Clique hésite pas!">github.com/BailleuxThomas</a>
        
        </div>
        <div class="col-sm">
            <img width="80%" src="img/posts/2.jpg" alt="Une photo de moi :D">
    <br>
    <br>
                <a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                     echo ('index.php');
                }else{
                    echo $_SERVER['HTTP_REFERER'];
                } ?>">Retour à la page précédente</a>
    
            <div>
            </div>
        </div>
    </div>
</div>