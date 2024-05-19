<?php



// if (isset($_FILES['photo']['tmp_name'])) {
//     $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
//     move_uploaded_file($retour, "$uploads_dir/$_FILES");
//     if($retour) {
//         echo '<p>La photo a bien été envoyée.</p>';
//         // echo '<img src="' . $_FILES['photo']['name'] . '">';
//     }
// }
//   return $file_ary;
// }

$reponse = "";

if(isset($_FILES['files'])){
  $reponse= uploadFiles($_FILES);
}

function uploadFiles($files){

  if($files['files']['name'][0] == ""){
    return "S'il te plait choisi d'autre photos";
  }
  $folder = 'uploads/';

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
  transform: translate(-10px,10px);
}
#fileElem {
  display: none;
}


/* ------- */

</style>
<div class="container center">
    <div class="row justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
        <div id="drop-area">
    <p class="text-center">MET ICI TOUTE TES PHOTOS</p>
    <input type="file" id="fileElem" name="files[]" multiple  accept="image/*" onchange="handleFiles(this.files)">
    <label class="button" for="fileElem">Select some files</label>
    <input type="submit"/>
    <progress id="progress-bar" max=100 value=0></progress>
    <div id="gallery" /></div>
    </div>
</div>
<!-- <div class="note"><strong>Note: I've Removed the ability to actually upload files (it will error out silently since there is no error handler, so it'll still appear to work) because you guys were constantly filling up my Cloudinary account. Please <a href="https://cloudinary.com/invites/lpov9zyyucivvxsnalc5/j6iiupngdmwwwqspjtml">create your own account</a> and replace the "joezim007" and "ujpu6gyk" bits in the JavaScript with your own account's information.</strong></div> -->
  </div>

</form>



<script src="./js/import.js"></script>
