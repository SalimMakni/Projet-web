<?php
require_once "pdo.php";

function listusers()
{
    require_once("pdo.php");
    $cnx = new connexion();
    $pdo = $cnx->CNXbase();
    $req = "SELECT * FROM produit";
    $res = $pdo->query($req) or print_r($pdo->errorInfo());
    return $res;
}

$stmt = listusers();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Liste des Produits</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>id</th>
                <th>Nom</th>
                <th>Marque</th>
                <th>Caractéristiques</th>                       
                <th><a href="ajoutMarque.php">Ajouter</a><br></th>
                <th><a href="edit_article.php">Modifier</a><br></th>
                <th><a href="delete_article.php">Supprimer</a></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= htmlentities($row['id']) ?></td>
                    <td><?= htmlentities($row['Nom']) ?></td>
                    <td><?= htmlentities($row['Marque']) ?></td>
                    <td><?= htmlentities($row['Prix']) ?></td>
                    <td><?= htmlentities($row['Proprietes']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
