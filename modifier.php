<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id = $_POST['id'];
$nom = $_POST['lname'];
$prenom = $_POST['fname'];
$sexe = $_POST['sexe'];
$an_naissance = $_POST['an_naissance'];
$photo=$_FILES['photo']['name'];
if ($photo=="")
{
    $sql = "UPDATE etudiant SET id=$id, nom='$nom', prenom='$prenom', sexe='$sexe', an_naissance=$an_naissance WHERE id=$id";
$pdo->exec($sql);
header('location:liste_etudiant.php');
} else
{
   $fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$sql = "UPDATE etudiant SET id=$id, nom='$nom', prenom='$prenom', sexe='$sexe', an_naissance=$an_naissance, photo='$photo' WHERE id=$id";
  
$pdo->exec($sql);
header('location:liste_etudiant.php');
}



?>



 