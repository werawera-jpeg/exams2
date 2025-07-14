<?php
require("../../inc/fonction.php");

$email = $_GET['email'];
$mdp = $_GET['mdp'];

$id = verifyuser($email, $mdp);

if ($id > 0){
header("Location: ../../pages/modele.php?page='home.php'&id=$id");

}else{
header("Location: ../../pages/modele.php?page='add.php'");
    
}

?>