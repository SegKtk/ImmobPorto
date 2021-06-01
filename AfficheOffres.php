<?php
       /* if(isset($_POST['btsubmit'])){
            $mc=$_POST['motcle'];
            $reqSelect="Select * from automobile where marque like '%$mc%'";

        }
        else{
            $reqSelect = "Select * from automobile";
           }*/
        require_once('connexion.php');   
        $result = $conn->prepare($reqSelect);
        $result->execute();
        $nbr = pg_num_rows($result);
        echo "<p>Résultats de votre recherche</p>".$nbr;
        while($line = $result->fetch(PDO::FETCH_ASSOC))
        {

        ?>
        <div id="auto">
            <img src="<?php echo $line['photo']?>"><br>
            <?php echo $line['imm']; ?><br>
            <?php echo $line['marque']; ?><br>
            <?php echo $line['prix_loc']; ?><br>
        </div>
        <?php } ?>