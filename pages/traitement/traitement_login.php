<?php
require("../../inc/fonction.php");

$email = $_GET['email'];
$mdp = $_GET['mdp'];

$id = verifyuser($email, $mdp);

header("Location: ../../pages/modele.php?page='home.php'&id=$i");

?>