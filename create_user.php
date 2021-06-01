<?php echo("nie"); ?>

<?php require_once 'connexion.php'; session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon compte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!--<link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.css">-->
</head>
<body>

<form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Textarea</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  </div>

  <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre nom :</div>
    		<input type="text" name="nbr_chambre" class="form-control" placeholder="combien de chambre avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  <br>

    <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre mail :</div>
    		<input type="email" name="nbr_chambre" class="form-control" placeholder="combien de chambre avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  <br>

  <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Votre mail :</div>
    		<input type="email" name="nbr_chambre" class="form-control" placeholder="combien de chambre avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  <br>

  <br>

  		<div class="input-group">
 	    	<div class="input-group-text" id="btnGroupAddon">Mot de passe :</div>
    		<input type="email" name="nbr_chambre" class="form-control" placeholder="combien de chambre avez-vous?" aria-label="Input group example" aria-describedby="btnGroupAddon" required>
  		</div>
  <br>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
    <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

  <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>

  <div class="mb-3">
    <select class="form-select" required aria-label="select example">
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>

  <div class="mb-3">
    <input type="file" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Example invalid form file feedback</div>
  </div>

  <div class="mb-3">
  	<input type="submit" name="btcompte" class="btn btn-primary" value="Créer le compte">
  </div>
</form>







	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!--<script type="text/javascript" src="bootstrap4/bootstrap.js"></script>-->
	<!--<script type="text/javascript" src="bootstrap5/bootstrap.bundle.min.js"></script>-->
</body>
</html>
