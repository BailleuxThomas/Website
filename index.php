<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// // Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
// ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

include './functions/main-functions.php';
include './functions/tuto.func.php';

function allmembers(){
    global $db;
    $global['membre'];
}
$pages = scandir('pages/');
if (isset($_GET['page']) && !empty($_GET['page'])) {
    if (in_array($_GET['page'] . '.php', $pages)) {
        $page = $_GET['page'];
    } else {
        $page = "error";
    }
} else {
    $page = "dashboard";
}
$pages_functions = scandir('functions/');
if (in_array($page . '.func.php', $pages_functions)) {
    include 'functions/' . $page . '.func.php';
}
$br = "<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="Content-Type" content="text/html,charset=ISO-8859-15,utf-9">
    <script src="./js/signature.js"></script>
    <title>TomBook 🐷</title>
</head>
<body>
    <?php
    if ($page != 'login' && !isset($_SESSION['membre']) && $page != 'inscription' && $page != 'cgu') {
        echo('<script language="javascript">document.location="index.php?page=login"</script>');
    exit;
    }
    include 'body/topbar.php';
    ?>
    <?php
        include 'pages/' . $page . '.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
    <!-- <script>guest()</script> ICI on se connecte automatiquement -->
<?php

$pages_js = scandir('js/');
if(in_array($page . '.func.js',$pages_js)){
?>
    <script type="text/javascript" src="js/<?= $page?>.func.js"></script>
<?php
    }
?>

<?php
include 'body/footer.php';
?>


<?
include 'body/botbar.php';
?>

<?php
    include 'body/user.php';
?>


</body>

</html>