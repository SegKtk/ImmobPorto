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

<!---  NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Immob-Porto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> c</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="d-flex">
      <!--	<button class="form-control me-2"><a href="deconnexion.php">Déconnecter</a></button>
      	<button class="form-control me-2"><a href="deconnexion.php"></a></button> -->
      	<form action="deconnexion.php">
      		<input class="form-control me-2 btn btn-outline-dark" type="submit" href="deconnexion.php" value="Déconnecter">
      	</form>
     
      	<!-- Button trigger modal -->
      	<form class="me-2 ms-2">
      		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  				Créer une annonce
			</button>
      	</form>



        
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button>

		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  			<div class="offcanvas-header">
    			<h5 id="offcanvasRightLabel">Votre Profile</h5>
    			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  			</div>
 		    <div class="offcanvas-body">
  		    ICI EST LE CORPS DU PROFILE
  			</div>
		</div>
      </div>
    </div>
  </div>
</nav>

<!----------------------    TABLEAU              --->

<table class="table table-dark" style="margin-top: 50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
    </tr>
    					
  </thead>
  <tbody>

  	<?php 
  		
  		session_start();
  		
  		$req = "select * from offres where id_user=".$_SESSION['id_user'];
  		$result = $conn->prepare($req);
  		$result->execute();
  		$i = 0;
  		if ($result)
  		while($ligne = $result->fetch(PDO::FETCH_ASSOC))
  		{
  	?>

    <tr>

      <th scope="row"><?php echo $ligne['id_offre'];?></th>
      <td> <img src="<?php echo $ligne['photo1'];    ?>" class="img-fuild" alt="image" width="200px" heigth = "50px">	<br><br> <button type="button" class="btn btn-danger">Supprimer</button>
 <button type="button" class="btn btn-warning">Modifier</button>
      </td>
      <td><?php echo $ligne['nbr_chambre']." Chambre(s)<br>", $ligne['nbr_salon']." Salon(s)<br>", $ligne['nbr_douche']." Douche(s)<br>"; ?></td>
      <td><?php echo $ligne['prix'];  ?></td>
      
    </tr>
    <?php $i++; } ?>
  </tbody>
</table>   





<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Créer une annonce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="saveOffre.php" method="post" enctype="multipart/form-data">
      		<?php require_once 'cree_annonce.php'; ?>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        		<input type="submit" name="btconfirm" value="Confirmer" class="btn btn-primary"> 
      		</div>
      	</form>
        
      </div>
      
    </div>
  </div>
</div>





	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!--<script type="text/javascript" src="bootstrap4/bootstrap.js"></script>-->
	<!--<script type="text/javascript" src="bootstrap5/bootstrap.bundle.min.js"></script>-->
</body>
</html>
