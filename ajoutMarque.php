<?php
require_once "pdo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $Nom = $_POST["Nom"];
    $Marque = $_POST["Marque"];
    $prix = $_POST["Prix"];
    $proprietes = $_POST["Proprietes"];

    $client = new produit();
    $client->ajouterProduit($id,$Nom, $Marque, $prix, $proprietes);

    header("Location: produit.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form method="post" action="ajouterProduit.php">
        <label for="nom">Nom du produit :</label>
        <input type="text" name="nom" required><br>

        <label for="marque">Marque :</label>
        <input type="text" name="marque" required><br>

        <label for="prix">Prix :</label>
        <input type="number" name="prix" required><br>

        <label for="proprietes">Caractéristiques :</label>
        <input type="text" name="proprietes" required><br>

        <input type="submit" value="Ajouter le produit">
    </form>
</body>
</html>
