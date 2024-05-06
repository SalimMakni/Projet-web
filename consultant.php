<?php
require_once "pdo.php";

function enregistrerClient()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nom_prenom = $_POST["Nom_prenom"];
        $login = $_POST["login"];
        $email = $_POST["email"];
        $pwd = password_hash($_POST["pwd"]);
        $adresse = $_POST["Adresse"];
        $numero = $_POST["Numero"];
        $date_naissance = $_POST["Date_Naissance"];
        $login= $_POST["login"];
        $client = new client();
        $client->addClient($nom_prenom, $login, $email, $pwd, $adresse, $numero, $date_naissance);

        header("Location: index.html");
        exit;
    }
}


enregistrerClient();
?>