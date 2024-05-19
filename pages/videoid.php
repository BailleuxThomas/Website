<?php
include './functions/video.func.php';

$video = get_video();
if ($video == false) {
    header("Location:index.php?page=error");
} else {
?>


<div class="container">
    <div class="row">
        <div class="col">
            <?

            $path = './video/'.$video->url;

        if(file_exists($path)){
            echo '<video 
            controls 
            width="100%" height="400px"
            preload="auto"
            poster="./img/video/video1.jpg">>
      
          <source src="https://bailleuxthomas.com/'.$path.'"
                  type="video/mp4">
              ';}

            ?>
</div>



    <div class="col">
        <h2 class="posttitle"><?= $video->title ?></h2>
        <br>
        <br>
        <a href="img/video/<?= $video->img ?>" target="_blank" rel="noopener noreferrer"><img src="img/video/<?= $video->img ?>" alt="<?= $video->title ?>"
        width="100%"></a>
            <br>
            <br>
            <br>
            <br>

            <?php


            ?>
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
                <h2 class="text-center"><?= nl2br($video->title);?></h2>
            <p><?= nl2br($video->content); ?></p>
            </div>
        </div>
    </div>

<?php
}
    ?>
