<?php
class connexion
{
public function CNXbase()
{
$dbc=new PDO('mysql:host=localhost;dbname=produit'
,'root'
,'');
return $dbc;
}
public function CNXbase1()
{
$dbc1=new PDO('mysql:host=localhost;dbname=client'
,'root'
,'');
return $dbc1;
}

}
?>
