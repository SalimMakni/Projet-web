<?php
function listusers()
{
    require_once("pdo.php");
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "SELECT * FROM produit";
  
}

class outil
{
   
    public $id;
    public $nom;
    public $marque;
    public $prix;
    public $proprietes;

    public function __construct($id, $nom, $marque, $prix, $proprietes)
    {
        $this->id = $id;
        $this->Nom = $nom;
        $this->Marque = $marque;
        $this->Prix = $prix;
        $this->Proprietes = $proprietes;
    }
}
?>
