<?php
function modifier_Article($id){
    require_once("pdo.php");
    $cnx=new connexion();
    $pdo=$cnx ->CNXbase();
    $req="update produit set produit_nom = '$this ->produit_nom  ' where produit_id=$id";
    $pdo1=$cnx ->CNXbase();
    $req1="update produit set produit_marque= '$this ->produit_marque  ' where produit_id=$id";
    $pdo2=$cnx ->CNXbase();
    $req2="update produit set produit_proprietes = '$this ->produit_proprietes ' where produit_id=$id";
    $pdo3=$cnx ->CNXbase();
    $req3="update produit set produit_proprietes = '$this ->produit_prix ' where produit_id=$prix";
    $pdo ->exec($req) or print_r($pdo->errorInfo());
    $pdo1 ->exec($req1) or print_r($pdo->errorInfo());
    $pdo2 ->exec($req2) or print_r($pdo->errorInfo());
    $pdo3 ->exec($req3) or print_r($pdo->errorInfo());

}