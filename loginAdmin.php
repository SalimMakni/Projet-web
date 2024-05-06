<?php
session_start();
session_unset();
header("location:listeArticle.php");
// Définir vos identifiants de connexion
$login_defini = "salim.makni@gmail.com";
$mot_de_passe_defini = "1234";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier les identifiants
    if ($login === $login_defini && $mot_de_passe === $mot_de_passe_defini) {
        $_SESSION['logged_in'] = true;
        header('Location: listeClient.html');
        exit;
    } else {
        $erreur = "Login ou mot de passe incorrect.";
    }
}
?>

