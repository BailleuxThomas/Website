<?php
// setcookie('accept_cookie', true, time() +365*24*3600, null, null, false, true);

setcookie("accept_cookie", true, time() +365*24*3600, '/');

if (isset($_SERVER['HTTP_REFERER']) ANd !empty($_SERVER['HTTP_REFERER'])){
header('Location: '.$_SERVER['HTTP_REFERER']);}
else{
header('Location: index.php');
}
?>

