<?php

global $db;

$Pseudo1 = isset($_POST['Pseudo1']);
$Race1 = isset($_POST['Race1']);
$Score1 = isset($_POST['Score1']);
$Pseudo2 = isset($_POST['Pseudo2']);
$Race2 = isset($_POST['Race2']);
$Score2 = isset($_POST['Score2']);


if($Pseudo1 == true){
    $Pseudo1 = $_POST['Pseudo1'];
}
if($Race1 == true){
    $Race1 = $_POST['Race1'];
}
if($Score1 == true){
    $Score1 = $_POST['Score1'];
}
if($Pseudo2 == true){
    $Pseudo2 = $_POST['Pseudo2'];
}
if($Race2 == true){
    $Race2 = $_POST['Race2'];
}
if($Score2 == true){
    $Score2 = $_POST['Score2'];
}



$options = array(
    'Pseudo1' => FILTER_SANITIZE_STRING,
    'Race1' => FILTER_SANITIZE_STRING,
    'Score1' => FILTER_SANITIZE_NUMBER_FLOAT,
    'Pseudo2' => FILTER_SANITIZE_STRING,
    'Race2' => FILTER_SANITIZE_STRING,
    'Score2' => FILTER_SANITIZE_NUMBER_FLOAT);

    $aucunhtml = filter_input_array(INPUT_POST, $options);

if (isset($_POST['pushscore'])) {

        $Pseudo1 = $aucunhtml['Pseudo1'];
        $Race1 = $aucunhtml['Race1'];
        $Score1 = $aucunhtml['Score1'];
        $Pseudo2 = $aucunhtml['Pseudo2'];
        $Race2 = $aucunhtml['Race2'];
        $Score2 = $aucunhtml['Score2'];

        $requete = $db->prepare('INSERT INTO tournois(Pseudo1, Race1, Score1, Pseudo2, Race2, Score2)
        VALUES(:Pseudo1, :Race1, :Score1, :Pseudo2, :Race2, :Score2)');
    
        $requete->bindValue(':Pseudo1', $Pseudo1);
        $requete->bindValue(':Race1', $Race1);
        $requete->bindValue(':Score1', $Score1);
        $requete->bindValue(':Pseudo2', $Pseudo2);
        $requete->bindValue(':Race2', $Race2);
        $requete->bindValue(':Score2', $Score2);
        
    
        $requete->execute();
        echo "<script>alert(\"C'est bien envoyé :D\")</script>";
    
        echo('<script language="javascript">document.location="index.php?page=tournois"</script>');
        exit;
    
    }
    ?>