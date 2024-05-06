<?php
require_once "pdo.php";

function afficherFormulaireInscription()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nom_prenom = $_POST["Nom_prenom"];
        $login = $_POST["login"];
        $email = $_POST["email"];
        $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
        $adresse = $_POST["Adresse"];
        $numero = $_POST["Numero"];
        $date_naissance = $_POST["Date_Naissance"];
       

        $client = new client();
        $client->addClient($id,$nom_prenom, $login, $email, $pwd, $adresse, $numero, $date_naissance);

        header("Location: index.html");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="signup.php">
        <label for="nom_prenom">Nom et prénom</label>
        <input type="text" name="nom_prenom" required><br>

        <label for="login">Login</label>
        <input type="text" name="login" required><br>

        <label for="email">Email</label>
        <input type="email" name="email" required><br>

        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" required><br>

        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" required><br>

        <label for="numero">Numéro de téléphone</label>
        <input type="number" name="numero" required><br>

        <label for="date_naissance">Date de naissance</label>
        <input type="date" name="date_naissance" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
