<?php
require_once('include/header.php');

//echo '<pre>'; print_r($_POST); echo '</pre>';
?>

<!-- 
Réaliser un formulaire HTML avec les champs suivant : pseudo, email et un bouton submit, en récupérant et en affichant les données directement sur la page formulaire4.php
-->

<h2 class="text-center">Formulaire de contact</h2><hr>

<form method="post" action="formulaire4.php" class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" name="formulaire1" value="valid_form" class="btn btn-dark col-md-12">Envoi</button>
</form>

<?php
require_once('include/footer.php');
?>