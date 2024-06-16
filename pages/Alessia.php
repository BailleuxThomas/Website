<?php
global $db;

$person = $db->query('SELECT * FROM users');

while($members = $person->fetch()){
    if($members['email'] === $_SESSION['email']){
        $members['email'] = $_SESSION['email'];

        $users = array(
            $members['id'],
            $members['nom'],
            $members['prenom'],
            $members['age'],
            $members['email'],
            $members['pseudo'],
            $members['image'],
            $members['role'],
        );
    }
}



if($users[7] === 'alessia'){
    
}else{
    header('Location: index.php');
}



$reponse = "";

if(isset($_FILES['files'])){
  $reponse= uploadFiles($_FILES);
}

function uploadFiles($files){

  if($files['files']['name'][0] == ""){
    return "S'il te plait choisi d'autre photos";
  }
  $folder = 'alessia/';

  $names = $files['files']['name'];
  $tmp_names = $files['files']['tmp_name'];

  $files_array = array_combine($tmp_names, $names);

  foreach($files_array as $tmp_folder => $image_name){
    move_uploaded_file($tmp_folder, $folder.$image_name);
  }
  
  return "succes";
}

if (isset($_SESSION['membre'])) {
}else{
    echo('<script language="javascript">document.location="index.php?page=dashboard"</script>');
    exit;
}

?>


<style>#drop-area {
  border: 2px dashed #ccc;
  border-radius: 20px;
  width: 480px;
  font-family: sans-serif;
  margin: 100px auto;
  padding: 20px;
}
#drop-area.highlight {
  border-color: purple;
}
p {
  margin-top: 0;
}
.my-form {
  margin-bottom: 10px;
}
#gallery {
  margin-top: 10px;
}
#gallery img {
  width: 150px;
  margin-bottom: 10px;
  margin-right: 10px;
  vertical-align: middle;
}
.button {
  display: inline-block;
  padding: 10px;
  background: black;
  cursor: pointer;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.button:hover {
  background: yellow;
  color: black;
}
#fileElem {
  display: none;
}
.menu-left{
  display:none;
}


/* ------- */

</style>

<div class="container center">
    <div class="row justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
        <div id="drop-area">
        <a class="justify-content-center" href="./alessia/">Voici ta sauvegarde</a>
    <p class="text-center">Tu mets ici tout ce que tu veux</p>
    <input type="file" id="fileElem" name="files[]" multiple onchange="handleFiles(this.files)">
    <label class="button" for="fileElem">Select some files</label>
    <input type="submit"/>
    <progress id="progress-bar" max=100 value=0></progress>
    <div id="gallery"></div>
    </div>
  </div>
</div>

</form>



<script src="./js/import.js"></script>
