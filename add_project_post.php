<?php
//db access
require_once "connexion.php";

//db request
$request = $bdd->prepare("INSERT INTO projects(date_creation, project_name, construction_step, step_description) VALUES(:date_creation, :project_name, :construction_step, :step_description)");
$request->execute([
  "date_creation" => $_POST["date_creation"],
  "project_name" => $_POST["project_name"],
  "construction_step" => $_POST["construction_step"],
  "step_description" => $_POST["step_description"]
]);
//user go back to add project page *
header("Location: add_project.php");

 ?>
