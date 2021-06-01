<?php require_once 'connexion.php'; ?>

<?php 

$target_dir = "images/clients/";

$target_file = $target_dir.basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Vérifie si le fichier est une vraie image ou pas.
if(isset($_POST["btcompte"])) {
  $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - ".$check["mime"].".";
    $uploadOk = 1;
  } else {
    $err = "<span style='color:red;'>Ceci n'est pas une image.</span>";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload1"]["size"] > 900000) {
  $err = "<span style='color:red;'>Désolé l'image est trop grande.</span>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $err = "<span style='color:red;'>Désolé, seuls les formats JPG, JPEG, PNG & GIF sont autorisés.</span>";
  $uploadOk = 0;
}

// Je vérifie si l'enregistrement de l'image est autorisé.
if ($uploadOk == 0) {
  echo $err;
// Si tout est ok
} else {
  if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
    echo "Le fichier ".htmlspecialchars(basename($_FILES["fileToUpload1"]["name"]))." est bien télécharger.";


    //$current_offre->save_offre();

    $req = "insert into utilisateur(nom,email,password,photo) values('".$_POST['nom']."','".$_POST['email']."','".$_POST['password']."','".$_POST['photo']."'";
        $result = $conn->prepare($req);
        $result->execute();


  } else {
    echo "<span style='color:red;'>Désolé, une erreure s'est produite pendant le téléchargement.</span>";
  }
}


 ?>