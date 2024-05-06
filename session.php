<?php
function Verifier_session(){
    if($_SESSION["Connecte"]!=="1"){
        header("location:login.php")
    }
}