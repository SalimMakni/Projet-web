<?php
require_once "pdo.php";

function getProduitById($id)
{
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $stmt = $pdo->prepare("SELECT * FROM produit WHERE id = :id");
    $stmt->execute(array(':id' => $id));
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    return $produit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = getProduitById($id);

    if ($produit) {
        echo "<h1>" . htmlspecialchars($produit['Nom']) . "</h1>";
        echo "<p>Marque : " . htmlspecialchars($produit['Marque']) . "</p>";
        echo "<p>Prix : " . htmlspecialchars($produit['Prix']) . "</p>";
        echo "<p>Propriétés : " . htmlspecialchars($produit['Proprietes']) . "</p>";
        echo "<p><a href='produit.php'>Retour à la liste des articles</a></p>";
    } else {
        echo "Aucun produit trouvé avec cet ID.";
    }
} else {
    echo "Aucun ID spécifié.";
}
?>
