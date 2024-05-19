<?php

global $db;

$req    = $db->query('SELECT * FROM tuto');
$req3    = $db->query('SELECT * FROM posts');
$req2   = $db->query('SELECT * FROM commentaires');



?>



<?php 
    include 'body/presentation.php';
?>


<?php
    include 'body/projet.php';
?>

<br>
<br>
<br>

<?php
    include 'body/tuto.php';
?>

<?php
    include 'body/contact.php';
?>





<div class="pubthomas">
    <a href="index.php?page=presentation" title="CLIQUE ICI">
        <img class="pubthomas" src="img/posts/fusee.png"
            alt="Image de Bailleux Thomas + bouton afin de voir ma présentation">
    </a>
</div>