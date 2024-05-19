<?php

global $db;

$req= $db->query('SELECT * FROM video');

if (isset($_SESSION['membre'])) {
}else{
    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
}



?>




<div class="container">
<div class="row div-video">
   <div class="col-md-12">
   <video 
      controls 
      width="100%" height="400px"
      preload="auto"
      poster="./img/video/valorant.png">>
    <source src="https://bailleuxthomas.com/video/1V4VIPERDIA3.mp4"
            type="video/mp4">
   </div>
</div>



<div class="row">
<?php
  while ($data = $req->fetch()) {
?>

<?php


    ?>
    <div class="col-md-4">
         <div class="card mb-4 text-white bg-dark">
            <img class="card-img-top" src="img/video/<?= $data['img'] ?>" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title"><?= $data['title'] ?></h5>
               <p class="card-text"><?php if($data['content']){
               echo substr(nl2br($data['content']), 0, 130).('...');} ?>
               </p>
               <a class="clickarticle2" href="index.php?page=videoid&id=<?= $data['id'] ?>">Lire l'article complet</a>
            </div>
         </div>

</div>

<?php

   }
?>
</div>
</div>
</div>
