<?php
require_once('user.outil.php');
$us=new utilisateur();
$us->user_cin=$_POST['ville'];
$us->user_nom=$_POST['nom'];
$row=$us-> recherche_user();
$n= $row->fetchColumn(0) ; // fetchColumn(0) retourne la valeur //relative à
                           //la première colonne (n° 0) ou FALSE s'il n'y a plus de ligne.
if($n==0) { $us->insertuser();
header('location:liste.php'); }
else { header('location:inscriptionForm.html');
}?> 