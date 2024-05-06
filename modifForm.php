<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<?php
 require_once "pdo.php";
 require_once "header.php";
 require_once "session.php";
 Verifier_session();

/* récupération des données du formulaire */
$id_etd=$_GET['id_etd'];

try{
    $req="SELECT * FROM etudiant where id='$id_etd'";
    $res=$pdo->query($req);
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    if (count($data)===1){
        $fname=$data[0]["nom"];
        $lname=$data[0]["prenom"];
        $sexe=$data[0]["sexe"];
        $an_naissance=$data[0]["an_naissance"];
        $photo=$data[0]["photo"];
    }
} catch(PDOException $e){
    echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
}


?>

<fieldset>
                <legend>Modifier un étudiant</legend>
               
                <form action="modifier.php" method="post" enctype="multipart/form-data">
                    <table class='table table-striped'>

            <tr>    <label name="id"   >Etudiant : <?php echo $id_etd; ?> </label> <input type="hidden" name="id" id="id" value="<?php echo($id_etd)?>">  </tr>
                
            <tr> <td> <label for="fname">Nom :</label> </td><td><input type="text" name="fname" id="fname" value="<?php echo($fname)?>"></td>  </tr>
            <tr><td> <label for="lname">Prénom :</label></td><td><input type="text" name="lname" id="lname" value="<?=$lname?>"> </tr></td>
            <tr> <td><label for="">Sexe : </label> </td><td>
            <?php if($sexe==="" || $sexe==="M"):?>
                <input type="radio" name="sexe" id="masculin" value="M" checked><label for="masculin">Masculin</label>
                <input type="radio" name="sexe" id="feminin" value="F"><label for="feminin">Feminin</label>
            <?php else:?>
                <input type="radio" name="sexe" id="masculin" value="M"><label for="masculin">Masculin</label>
                <input type="radio" name="sexe" id="feminin" value="F" checked><label for="feminin">Feminin</label>
            <?php endif;?>  </td></tr>
            <tr> <td>  <label for="">Année de naissance</label> </td><td>
        <select name="an_naissance" id="an_naissance">
            <?php 
                $year=date("Y");
                for($a=1950;$a<=$year;$a++)

                   if($a==$an_naissance)
                        echo "<option value='$a' selected>$a</option>";
                    else
                    echo "<option value='$a'>$a</option>";
            ?> 
        </select>  </td></tr>
       

        <tr> <td>Photo:  <input type="file" name="photo"  /> </td>  <td><img src= "images/<?=$photo?>" width="50" height="50"></td>  </tr>

       <table>
       
        <input type="submit" name="Envoyer" value="Envoyer">                          
    </form>

</fieldset>

</body>
</html>
