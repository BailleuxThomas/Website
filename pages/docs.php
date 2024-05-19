<?php
include './functions/admin.func.php';
?>

<div class="container">
  <div class="row">
    <div class="col">
        <?php
        $scandir = scandir("../");
        foreach($scandir as $fichier){
        echo "$fichier<br>";
        }
        ?>
        </div>
    </div>
</div
