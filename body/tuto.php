<div class="container">

<h2>Tutoriels</h2>

<div class="row">
<?php
 
for ($i=0; $i < 1; $i++) { 
    $data = $req->fetch();


?>
<div class="col-md-4">
   <div class="card mb-4 text-white bg-dark" style="height: 55vh;">
      <a href="img/tuto/<?= $data['image'] ?>" target="_blank" rel="noopener noreferrer"><img
         class="card-img-top" style="height: 20vh;object-position: top;object-fit: cover;" src="img/tuto/<?= $data['image'] ?>" class="mr-3 design-border"
             alt="img/tuto/<?= $data['image'] ?>"></a>
   <div class="card-body">
      <h5 class="card-title"><?= $data['title'] ?></h5>
      <p class="card-text"><?php echo substr(nl2br($data['content']), 0, 120).('...'); ?></p>
      <a class="clickarticle2" href="index.php?page=tutos&id=<?= $data['id'] ?>">Lire l'article complet</a>  
   </div>
   </div>
</div>

<?php
   }

?>
</div>
<a href="index.php?page=tutorial">Voir plus de contenu</a>
</div>