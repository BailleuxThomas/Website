<?php

$tuto = get_tuto();
if ($tuto == false) {
    header("Location:index.php?page=error");
} else {
?>


<div class="container">
    <div class="row">
        <div class="col">
            <?

            $path = 'https://bailleuxthomas.com/video/'.$tuto->video;

        if(file_exists($path)){
            echo '<video 
            controls 
            width="100%" height="400px"
            preload="auto"
            poster="./img/video/video1.jpg">>
      
          <source src="./'.$path.'"
                  type="video/mp4">
              ';}

            ?>
</div>



    <div class="col">
        <h2 class="posttitle"><?= $tuto->title ?></h2>
        <!-- <h6 class="posttitle">Par <?= $tuto->writer ?> le <?= date("d/m/Y à H:i", strtotime($tuto->date)) ?></h6> -->

        <p>En ligne le <?= date("d/m/Y à H:i", strtotime($tuto->date)) ?></p>
        <br>
        <br>
        <a href="img/tuto/<?= $tuto->image ?>" target="_blank" rel="noopener noreferrer"><img src="img/tuto/<?= $tuto->image ?>" alt="<?= $tuto->title ?>"
        width="100%"></a>
            <br>
            <br>
            <br>
            <br>

            <?php

            if($tuto->url){
                echo ('Voici le projet en ligne => <a href="'.$tuto->url.'" target="_blank" rel="noopener noreferrer"> '.$tuto->url.'</a>');
            }

            ?>
            <br>
            <br>
            <a href="<?= $tuto->url_github; ?>" target="_blank" rel="noopener noreferrer"><?= $tuto->url_github; ?></a>
            <br>
            <br>
            <a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                 echo ('index.php');
            }else{
                echo $_SERVER['HTTP_REFERER'];
            } ?>">Retour à la page précédente</a>
        </div>
    </div>
</div>

<br>


    


    <div class="container">
        <div class="row">
            <div class="col">
                <hr style="border:1px dashed #7f8fa6;">
                <h2 class="text-center"><?= nl2br($tuto->title2);?></h2>
            <p><?= nl2br($tuto->content); ?></p>
            </div>
        </div>
    </div>

<?php
}
    ?>
