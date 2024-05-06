<?php
$con=mysqli_connect("localhost","root","","client");# la fonction mysqli_connect() renvoie un objet MySQL qui peut être utilisé pour exécuter des requêtes sur la base de données
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());#
}
