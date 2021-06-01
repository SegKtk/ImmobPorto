<?php

class Demande{
    private $id_ask;
    private $commentaire;
    private $id_user;

    function __construct($commentaire,$id_user)
    {
        $this->commentaire = $commentaire;
        $this->id_user = $id_user;
    }
}
?>