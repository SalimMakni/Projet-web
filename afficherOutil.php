<?php
function getOutil($id)
{
require_once('pdo.php');
$cnx=new connexion();
$pdo=$cnx->CNXbase();
$req=
"SELECT * FROM utilisateur where id=$id and produit_nom=$nom produit_marque=$marque produit_proprietes=$proprietes and prix=$prix" ;
$res=$pdo->query($req) or print_r($pdo->errorInfo());
return $res;
}
?>