<?php
// database access
function getDataBase(){
try {
  $data = new PDO('mysql:host=localhost;dbname=projects;charset=utf8', 'root', '');
}

catch(Exception $e){
  die("Erreur" .$e->getMessage());
}
}

// show projects list
function listProjects($db){
//Requete la base de données
$request = $bdd->query("SELECT * FROM projects");
//Extraction des informations
$projects = $request->fetchall(PDO::FETCH_ASSOC);
return $projects;
}

// add a project to the projects' list
function post(){

}

// show members list
function listMembers(){

}
?>
