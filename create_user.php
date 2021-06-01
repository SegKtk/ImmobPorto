<?php require_once 'connexion.php';?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon compte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style type="text/css">
		.formule{
			padding-top: 33px;
		}
	</style>
	<!--<link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.css">-->
</head>
<body>

<?php require_once 'Nav.php'; ?>

<div class="formule">
	
	<form class="was-validated ps-5 pe-5 text-center border border-dark border-5" style="background-image:url('images/bgcpt.jpg');" action="saveUser.php" method="post" enctype="multipart/form-data">
	<legend class="bg-dark text-white text-center">Créer votre compte</legend>
  <div class="mb-3">

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre nom :</div>
    		<input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>


    <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre mail :</div>
    		<input type="email" name="email" class="form-control" placeholder="Entrez votre e-mail" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
 
  <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre mot de passe :</div>
    		<input type="password" name="password" class="form-control" placeholder="Tapez un mot de passe" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  <br>

  <div class="mb-3">
   <input type="file" class="form-control" placeholder="choisissez votre profil" aria-label="Input group example" aria-describedby="btnGroupAddon" name="fileToUpload1" id="fileToUpload1" required>
    <div class="invalid-feedback">Fichier invalide pour moment</div>
  </div>

  <div class="mb-3">
  	<input type="reset" name="annuler" class="btn btn-secondary" value="Annuler">
  </div>
  <div class="mb-3">
  	<input type="submit" name="btcompte" class="btn btn-success" value="Créer le compte">
  </div>
</form>
</div>








	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!--<script type="text/javascript" src="bootstrap4/bootstrap.js"></script>-->
	<!--<script type="text/javascript" src="bootstrap5/bootstrap.bundle.min.js"></script>-->
</body>
</html>
