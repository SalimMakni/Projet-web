<?php
function listusers()
{
    require_once("pdo.php");
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "SELECT * FROM client";
  
}

class outil
{
   
    public $id;
    public $Nom_prenom;
    public $email;
    public $login ;
    public $Numero;
    public $Date_Naissance; 
    public $Adresse;
    public $pwd;

    public function __construct($id, $Nom_prenom, $email, $prix, $Numero,$Date_Naissance,$Adresse,$pwd)
    {
        $this->id = $id;
        $this->Nom_prenom = $nom;
        $this->email = $email;
        $this->login  = $login ;
        $this->Numero = $Numero;
        $this->Date_Naissance = $Date_Naissance;
        $this->pwd = $pwd
    }
}
?>

Colonne (int)
Colonnepwd (varchar)