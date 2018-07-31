<?php
//Connexion à la base de données
require_once "connexion.php";
 ?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>

 <!-- Main Content -->
 <main class="container my-5">
   <h2>Enregistrer un projet</h2>
   <form action="add_project_post.php" method="post">
     <p>Nom du projet :
       <input type="text" name="project_name">
     </p>
     <p>Etape du projet :
       <input type="text" name="project_step">
     </p>
     <p>Description de l'etape :
       <textarea name="step_description" id="" cols="30" rows="10"></textarea>
     </p>
     <p>Auteur du post :
      <input type="text" name="author_ID">
     </p>
     <p>
    <label for="postDate">Veuillez saisir la date de ce post :</label>
    <input type="date" id="postDate" name="post_date">
    </p>
   </form>
 </main>
 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>
