<?php
require_once "pdo.php";

$login = $_POST['login'];
$pwd = $_POST['pwd'];

$client = new client();
$result = $client->login($login, $pwd);

if ($result) {
    header("Location: produit.php");
    exit;
} else {
    echo "Identifiants incorrects. Veuillez réessayer.";
}
?>
