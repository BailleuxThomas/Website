<?php

$post = get_post();
if ($post == false) {
    header("Location:index.php?page=error");
} else {
?>


<div class="container">
    <div class="row">
        <div class="col">
            <a href="img/posts/<?= $post->image ?>" target="_blank" rel="noopener noreferrer"><img src="img/posts/<?= $post->image ?>" alt="<?= $post->title ?>"
                    width="100%"></a>
        </div>
        <div class="col">
            <h2 class="posttitle"><?= $post->title ?></h2>
            <p><?= nl2br($post->content); ?></p>
            <br>
            <a href="<?= $post->url; ?>" target="_blank" rel="noopener noreferrer"><?= $post->url; ?></a>
            <br>
            <br>
            <a href="<?= $post->url_github; ?>" target="_blank" rel="noopener noreferrer"><?= $post->url_github; ?></a>
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

<?php
}
    ?>