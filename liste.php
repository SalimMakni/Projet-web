<?php
// Connexion à la base de données
$host = 'localhost';
$db   = 'produit';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

// Récupération des articles
$stmt = $pdo->query('SELECT * FROM produit');
$articles = $stmt->fetchAll();

// Afficher les articles
echo '<h1>Liste des Produits</h1>';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Image</th>';
echo '<th>id</th>';
echo '<th>Marque</th>';
echo '<th>Prix</th>';
echo '<th>Nom</th>';
echo '<th>Caracteristique</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($produit as $produits) {
    echo '<tr>';
    echo '<td><img src="images/' . $produit['image'] . '" alt="img" width="100" /></td>';
    echo '<td>' . $produits['Prix'] . '</td>';
    echo '<td>' . $produits['id'] . '</td>';
    echo '<td>' . $produits['Marque'] . '</td>';
    echo '<td>' . $produits['Nom'] . '</td>';
    echo '<td>' . $produits['id'] . '</td>';
    echo '<td>' . $produits['Proprietes'] . '</td>';
    echo '<td>';
    echo '<a href="delete.php?id=' . $produits['id'] . '">Modifier</a>';
    echo '<a href="modif.php?id=' . $produits['id'] . '">Supprimer</a>';
    echo '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '<a href="ajoutMarque.php">Ajouter un article</a>';

