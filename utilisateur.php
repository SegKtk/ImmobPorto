<?php

class Utilisateur {
    private $id;
    private $nom;
    private $email;
    private $password;
    private $photo;
    

    function __construct($nom,$email,$password,$photo)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
        
    }

    function save_user(){
        require_once('connexion.php');
        $sql = "insert into utilisateur(nom,email,password,photo) values('".$this->nom."','".$this->password."','".$this->photo."')";
        $result = $conn->prepare($sql);
        $result->execute();
        
        
    }
    /****VERIFIE SI UN UTILISATEUR EXISTE DEJA****/
    function si_existe(){
        require_once('connexion.php');
        $sql = "select count(*) from utilisateur where email='".$this->email."'and password='".$password."'";
        $result = $conn->prepare($sql);
        $result->execute();

        if($result['count']==0)
            return 0;
        else
            return 1; 
    }
  
    function get_id(){
        require_once('connexion.php');
        $sql = "select id_user from utilisateur where email='".$this->email."'";
        $result = $conn->prepare($sql);
        $result->execute();
        if($result)
            return $result['id_user'];
        else
            return 0;
    }
    function getnom(){
        return $this->nom;
    }
    function getemail(){
        return $this->email;
    }
    function getpassword(){
        return $this->password;
    }
    function getphoto(){
        return $this->photo;
    }

    function modifier_photo($photo){
        $this->photo = $photo;
        require_once('connexion.php');
        $sql = "update utilisateur set photo='".$photo."' where email='".$this->email."'";
        $result = $conn->prepare($sql);
        $result->execute();
        if($result)
            echo "<script> alert('modifier photo fait');</script>";
    }

    function modifier_nom($nom){
        $this->nom = $nom;
        require_once('connexion.php');
        $sql = "update utilisateur set nom='".$nom."' where email='".$this->email."'";
        $result = $conn->prepare($sql);
        $result->execute();
        if($result)
            echo "<script> alert('modifier nom fait');</script>";
    }

    function modifier_email($email){
        $this->email = $email;
        require_once('connexion.php');
        $sql = "update utilisateur set email='".$email."' where nom='".$this->nom."'";
        $result = $conn->prepare($sql);
        $result->execute();
        if($result)
            echo "<script> alert('modifier email fait');</script>";
    } 


}
?>