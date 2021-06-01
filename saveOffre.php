<?php 
	require_once 'connexion.php'; 

	require_once 'offre.php';




session_start();

$id = $_SESSION['id_user'];
$_SESSION['err']="";
$target_dir = "images/".$id."/";

mkdir($target_dir);
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Vérifie si le fichier est une vraie image ou pas.
if(isset($_POST["btconfirm"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - ".$check["mime"].".";
    $uploadOk = 1;
  } else {
    $_SESSION['err'] = "<span style='color:red;'>Ceci n'est pas une image.</span>";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 9000000) {
  $_SESSION['err'] = "<span style='color:red;'>Désolé l'image est trop grande.</span>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $_SESSION['err'] = "<span style='color:red;'>Désolé, seuls les formats JPG, JPEG, PNG & GIF sont autorisés.</span>";
  $uploadOk = 0;
}

// Je vérifie si l'enregistrement de l'image est autorisé.
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// Si tout est ok
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Le fichier ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." est bien télécharger.";
    $current_offre = new Offre($_POST['nbr_chambre'], $_POST['nbr_salon'], $_POST['nbr_douche'], $_POST['prix'],$target_file, $_SESSION['id_user']);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}




?>