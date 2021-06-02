<?php require_once 'connexion.php'; ?>




<?php 

        $req = "select * from offres order by id_offre desc";
        $result = $conn->prepare($req);
        $result->execute();
        $limite = 0;



         while(($ligne = $result->fetch(PDO::FETCH_ASSOC)) && ($limite < 9))
            {
                $req1 = "select * from utilisateur,offres where utilisateur.id_user = ".$ligne['id_user'];
                $result1 = $conn->prepare($req1);
                $result1->execute();
                $ligne1 = $result1->fetch(PDO::FETCH_ASSOC);


 ?>
<div class="col mb-5">
    <div class="card h-100">
    <!-- Product image-->
        <img class="card-img-top" src="<?php echo $ligne['photo1']; ?>" alt="..." />
                            <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                                    <!-- Product name-->
                <h5 class="fw-bolder">Par <?php echo $ligne1['nom']; ?></h5>
                                    <!-- Product price-->
                <?php echo $ligne['prix']." FCFA"; ?>
                <br>Contacter : <a href="http://<?php echo $ligne1['email']; ?>" class="link-primary"><?php echo $ligne1['email']; ?></a> 
            </div>
        </div>
                            <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Voir Détails</a></div>
        </div>
    </div>
</div>
<?php $limite++; } ?>