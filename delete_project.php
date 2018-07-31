<?php
//Connexion à la base de données
require_once "connexion.php";
//Requete la base de données
$request = $bdd->query("SELECT id, name FROM projects");

//Extraction des informations
$products = $request->fetchall(PDO::FETCH_ASSOC);
 ?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>

 <!-- Main Content -->
 <main class="container my-5">
   <h2>Supprimer un post</h2>
   <ul>
   <?php
   //Affiche les produits récupérés en BDD
    foreach ($projects as $key => $project) {
      echo "<li>" . $project["project_name"] . "</li>";
   ?>
    <form action="delete_project_post.php" method="post">
      <input type="hidden" name="id" value=<?php echo $project["id"]; ?>>
      <input type="submit" value="Supprimer">
    </form>
    <?php
      }
    ?>
    </ul>
 </main>
 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>
