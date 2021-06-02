<?php require_once 'connexion.php'; ?>




<?php 

        $req = "select * from offres order by id_offre desc";
        $result = $conn->prepare($req);
        $result->execute();
        $limite = 0;


         while(($ligne = $result->fetch(PDO::FETCH_ASSOC)) && ($limite < 9))
            {

 ?>
<div class="col mb-5">
    <div class="card h-100">
    <!-- Product image-->
        <img class="card-img-top" src="<?php echo $ligne['photo1']; ?>" alt="..." />
                            <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                                    <!-- Product name-->
                <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                <?php echo $ligne['prix']." FCFA"; ?>
            </div>
        </div>
                            <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
        </div>
    </div>
</div>
<?php $limite++; } ?>