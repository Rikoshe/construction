<?php
// database access
function getDataBase(){
try {
  $data = new PDO('mysql:host=localhost;dbname=construction;charset=utf8', 'root', '');
}

catch(Exception $e){
  die("Erreur" .$e->getMessage());
}
}

// show projects list
function listProjects(){

}

// add a project to the projects' list
function post(){

}

// show members list
function listMembers(){

}
?>
