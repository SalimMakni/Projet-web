<?php
function recherche_user()
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req=
"SELECT count(*) FROM produit WHERE id='$this->id' " ;
$res=$pdo->query($req) or print_r($pdo->errorInfo());
return $res;
}
//fin de la classe
} ?>