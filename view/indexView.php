<!-- add your header here -->
<?php require ('header.php'); ?>

<!-- describe your project here -->
<form action="index.php" method="post">
<div>
<input type="text" name="project-name"><label for="project-name"> Nom du projet</label>
</div>
<div>
<input type="text" name="project-step"><label for="project-step"> Etape du projet</label>
</div>
<div>
<textarea type="textarea" rows="4" cols="50" name="project-step-description"></textarea><label for="project-step-description"> Description de l'étape</label>
</div>
<div>
<input type="submit"></button>
</div>
</form>

<!-- add your footer here -->
<?php require ('footer.php'); ?>


