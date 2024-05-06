<?php
require_once "pdo.php";
session_start();
session_unset(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    $client = new client();
    $result = $client->login($login, $pwd);

    if ($result) {
        header("Location: check_login.php");
        exit;
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="post" action="login.php">
        <label for="login">Login :</label>
        <input type="text" name="login" id="login" required><br>
        <label for="pwd">Mot de passe :</label>
        <input type="password" name="pwd" id="pwd" required><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
