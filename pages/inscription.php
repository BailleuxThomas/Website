<?php

global $db;

$inscriptionpseudo = isset($_POST['pseudo']);
$inscriptionnom = isset($_POST['nom']);
$inscriptionprenom = isset($_POST['prenom']);
$inscriptionage = isset($_POST['age']);
$inscriptionemail = isset($_POST['email']);

if($inscriptionpseudo == true){
    $inscriptionpseudo = $_POST['pseudo'];
}
if($inscriptionnom == true){
    $inscriptionnom = $_POST['nom'];
}
if($inscriptionprenom == true){
    $inscriptionprenom = $_POST['prenom'];
}
if($inscriptionage == true){
    $inscriptionage = $_POST['age'];
}
if($inscriptionemail == true){
    $inscriptionemail = $_POST['email'];
}


if (isset($_SESSION['membre'])) {
    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
}


$options = array(
    'pseudo' => FILTER_SANITIZE_STRING,
    'nom' => FILTER_SANITIZE_STRING,
    'prenom' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
    'age' => FILTER_SANITIZE_NUMBER_FLOAT);

$aucunhtml = filter_input_array(INPUT_POST, $options);

if (isset($_POST['inscription'])) {
    if(empty($_POST['pseudo']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['pseudo'])){
        $errorinscription = 'Votre pseudo doit être une chaine de caractères (alphanumérique) !'; 
}elseif(empty($_POST['email']) || !filter_var($_POST['email'])){
    $errorinscription = 'Votre pseudo doit être une chaine de caractères (alphanumérique) !'; 
}elseif(empty($_POST['password1']) || $_POST['password1'] != $_POST['password2']){
    $errorinscription = "Rentrer un mot de passe valide";
}elseif(empty($_POST['age']) || !preg_match('/^[1-9][0-9]{0,15}$/', $_POST['age'])){
    $errorinscription = 'Veuillez indiqué votre âge';
}elseif(empty($_POST['nom']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['nom'])){
    $errorinscription = 'Votre nom doit être une chaine de caractères (alphanumérique) !';
}elseif(empty($_POST['prenom']) || !preg_match('/[a-zA-Z0-9]+/', $_POST['prenom'])){
    $errorinscription = 'Votre prénom doit être une chaine de caractères (alphanumérique) !';
// }elseif(isset($_FILES['image']) AND !empty($_FILES['image']['name'])){
//     $tailleMax = 2097152;
//     $extensionValides = array('jpg', 'jpgeg', 'gif', 'png');
//     if($_FILES['image']['size'] <= $tailleMax){
//         $extensionUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
//         if(in_array($extensionUpload, $extensionValides)){
//             $chemin = "img/" .$_POST['pseudo'].".".$extensionUpload;
//             $result = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
//             if($result){
//             $updateavatar = $db->prepare('INSERT INTO users(image)
//             VALUES(:image)');
//             $updateavatar->execute(array(
//                 'image' => $_POST['pseudo'].".".$extensionUpload,
//               ));
//             }else{
//                 $errorinscription = "Il y a un problème avec l'envoi de votre image de profil";
//             }
//         }else{
//             $errorinscription = "Votre image de profil doit être au format jpg, jpgeg, gif ou png";
//         }
//     }else{
//         $errorinscription = "Votre image de profil ne doit pas dépasser 2Mo";
//     }
// 

}else{

    $pseudo = $aucunhtml['pseudo'];
    $nom = $aucunhtml['nom'];
    $prenom = $aucunhtml['prenom'];
    $email = $aucunhtml['email'];
    $age = $aucunhtml['age'];

    $req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo');

    $req->bindValue(':pseudo', $pseudo);
    $req->execute();
    $result = $req->fetch();

    $req1 = $db->prepare('SELECT * FROM users WHERE email = :email');

    $req1->bindValue(':email', $_POST['email']);
    $req1->execute();
    $result1 = $req1->fetch();

    if($result){
        $errorinscription = 'Le username que vous avez choisi existe déjà';
    }elseif($result1){
        $errorinscription = "L'email que vous utilisez existe déjà";
    }else{
    
        $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
    $requete = $db->prepare('INSERT INTO users(pseudo, email, password, age, nom, prenom)
    VALUES(:pseudo, :email, :password, :age, :nom, :prenom)');

    $requete->bindValue(':pseudo', $pseudo);
    $requete->bindValue(':email', $email);
    $requete->bindValue(':password', $password);
    $requete->bindValue(':age', $age);
    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    

    $requete->execute();
    echo "<script>alert(\"Votre inscription à bien été réussie\")</script>";

    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
    }

}

}
?>

<div class="container">
    <form method="post" enctype="multipart/form-data">

<label class="inscription" for="pseudo">Pseudo:</label>
<input class="inscription" type="text" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="<?php if(trim($inscriptionpseudo) == false);else{echo $inscriptionpseudo;} ?>" >
<br>
<label class="inscription" for="nom">Nom:</label>
<input class="inscription" type="text" id="nom" placeholder="Votre nom" name="nom" value="<?php if(trim($inscriptionnom) == false);else{echo $inscriptionnom;} ?>">
<br>
<label class="inscription" for="prenom">Prénom:</label>
<input class="inscription" type="text" id="prenom" placeholder="Votre prénom" name="prenom" value="<?php if(trim($inscriptionprenom) == false);else{echo $inscriptionprenom;} ?>">
<br>
<label class="inscription" for="age">Age:</label>
<input class="inscription" type="number" id="age" placeholder="Votre âge" name="age" value="<?php if(trim($inscriptionage) == false);else{echo $inscriptionage;} ?>">
<br>
<label class="inscription" for="mail">Mail:</label>
<input class="inscription" type="mail" id="mail" placeholder="Votre mail" name="email" value="<?php if(trim($inscriptionemail) == false);else{echo $inscriptionemail;} ?>" required>
<br>
<label class="inscription" for="password1">Mot de passe:</label>
<input class="inscription" type="password" id="password1" placeholder="Votre mot de passe" name="password1">
<br>
<label class="inscription" for="password2">Confirmation de votre password</label>
<input class="inscription" type="password" id="password2" placeholder="Confirmation de votre mot de passe" name="password2">
<br>
<!-- <label class="inscription" for="image">Votre image:</label>
<input type="file" id="image" name="image" accept=".jpg, .jpeg, .png"> -->
<br>
<br>


<input type="submit" name="inscription" value="envoyer">

</form>  



<?php

if(isset($errorinscription)){
    ?>
<p class="errorinscription">
    <?php
    echo $errorinscription;
    ?>
    </p>
    <?php
}



?>


<br>
<br>

<a href="<?php if(empty($_SERVER['HTTP_REFERER'])){
                 echo ('index.php');
            }else{
                echo ('index.php');
            } ?>">Retour à la page précédente</a>

</div>