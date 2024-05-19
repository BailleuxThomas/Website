

<?php
if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
}
?>

<?php if($showcookie) { ?>
<div class="cookie-alert">
En utilisant ce site Web, vous acceptez les Conditions <a href="index.php?page=cgu">Générales d'Utilisation</a> <br /><a href="pages/accept_cookie.php">OK</a>
</div>
<?php } 


?>


