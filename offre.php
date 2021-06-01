<?php

class Offre{
    private $id_offre;
    private $nbr_chambre;
    private $nbr_salon;
    private $nbr_douche;
    private $prix;
    private $photo1;
    private $photo2;
    private $id_user;
    private $is_active=true;

    public function __construct($nbr_chambre,$nbr_salon,$nbr_douche,$prix,$photo1,$photo2,$id_user)
    {
        $this->nbr_chambre=$nbr_chambre;
        $this->nbr_salon=$nbr_salon;
        $this->nbr_douche=$nbr_douche;
        $this->prix=$prix;
        $this->photo1=$photo1;
        $this->photo2=$photo2;
        $this->id_user=$id_user;        
    }

    public function save_offre(){
        require_once('connexion.php');
        $sql="insert into offres(nbr_chambre,nbr_salon,nbr_douche,prix,photo1,id_user) values(".$this->nbr_chambre.",".$this->nbr_salon.",".$this->nbr_douche.",".$this->prix.",'".$this->photo1."',".$this->id_user.")";
        $result = $conn->prepare($sql);
        $result->execute();
    }

    public function supprimer_offre(){
        require_once('connexion.php');
        $sql = "delete from offres where id_offre=".$this->id_offre;
        $result = $conn->prepare($sql);
        $result->execute();
    }

   
    public function desactiver_offre(){
        require_once('connexion.php');
        $sql = "update offres set is_active=false where id_offre=".$this->id_offre;
        $result = $conn->prepare($sql);
        $result->execute();
    }

    public function activer_offre(){
        require_once('connexion.php');
        $sql = "update offres set is_active=true where id_offre=".$this->id_offre;
        $result = $conn->prepare($sql);
        $result->execute();
    }

    public function set_photo1($photo){
        $this->photo1 = $photo;
    }

    public function set_photo2($photo){
        $this->photo2 = $photo;
    }

    public function set_chambre($n){
        $this->nbr_chambre = $n;
    }

    public function set_salon($n){
        $this->nbr_salon = $n;
    }
    
    public function set_douche($n){
        $this->nbr_douche = $n;
    }

    public function set_prix($n){
        $this->prix = $n;
    }

}
?>

