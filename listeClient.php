<?php
require_once "pdo.php";
// Requête pour récupérer les clients depuis la base de données
$query = "SELECT * FROM client";
$stmt = $pdo->query($query);
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

