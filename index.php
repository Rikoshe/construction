<?php
require('controller.php');
getDataBase();

$req = $bdd->query('SELECT id, date_creation, project_name, construction_step, step_description DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM projects ORDER BY date_creation DESC LIMIT 0, 5');

require('indexView.php');

// require('controller.php');

// if (isset($_GET['action'])) {
//     if ($_GET['action'] == 'listProjects') {
//         listProjects();
//     }
//     elseif ($_GET['action'] == 'post') {
//         if (isset($_GET['id']) && $_GET['id'] > 0) {
//             post();
//         }
//         else {
//             echo 'Erreur : aucun projet reconnu';
//         }
//     }
// }
// else {
//     listProjects();
// }
?>