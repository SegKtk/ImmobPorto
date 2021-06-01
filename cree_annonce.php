<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body> -->



	
		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Chambre(s)</div>
    		<input type="number" name="nbr_chambre" class="form-control" placeholder="combien de chambre avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  		<br>
  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Salon(s)</div>
    		<input type="number" name="nbr_salon" class="form-control" placeholder="combien de salon avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  		<br>
  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Douche(s)</div>
    		<input type="number" name="nbr_douche" class="form-control" placeholder="combien de douche avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  		<br>
  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Prix de location :</div>
    		<input type="number" name="prix" class="form-control" placeholder="...en FCFA" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  		<br>
  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Photo</div>
    		<input type="file" class="form-control" placeholder="...en FCFA" aria-label="Input group example" aria-describedby="btnGroupAddon" name="fileToUpload" id="fileToUpload" required>
  		</div>

  		<?php 
  			$_SESSION['err'] = "";
  			echo $_SESSION['err']; 
  		?>
		
	

<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>-->