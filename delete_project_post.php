<?php
//Connexion à la base de donnée
require_once "connexion.php";
//Suppression des données
$request = $bdd->prepare("DELETE FROM projects WHERE id= ?");
$request->execute([$_POST["id"]]);
//Redirige l'utilisateur
header("Location: delete_project.php");
 ?>
