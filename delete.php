<?php
require_once("pdo.php");
$id = $_GET['id'];
$sql = "DELETE FROM etudiant where id =$id";
$pdo->exec($sql);
echo "Suppression de l'article' ".$id."avec succès !!";
header('location:listeArticle.php');
?>