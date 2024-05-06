<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/bootstrapmin">
    </head>
    <body>
        <header class='nav navbar'>
            <span class="gauche"><a href="#"><?=$_SESSION["user"]?></a></span>
            <span>
                <a href="ajoutMarque.php">Ajouter des articles</a>
                <a href="modif.php">Modifier des articles</a>
                <a href="delete.php">Supprimer des articles</a>
</span>
<span class="droite">
    <a href="deconnexion.php">Déconnexion</a>
</span>
</header>
</body>
</html>