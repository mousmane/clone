<?php

/*
1 - Réaliser un formulaire HTML permettant de sélectionner un fruit et saisir un poids et saisir un poids
2 - Traitement permettant d'afficher le prix en passant par la fonction déclarée "calcul()"
3 - Faites en sorte de garder le ddernier selectionné et de garder le dernier poids sais dans le formulaire lorque celui-ci est validé
*/


require ('fonction.php');
require ('include/header.php');



$content = '';
if (isset($_POST['formulaire_fruit']) || (is_numeric($_POST['poids'])))
{
    $content .= '<p>'.  calcul($_POST['fruit'], $_POST['poids']);
}


?>

<h2 class="text-center">Ma Boutique</h2><hr>

<form method="post" action="" class="col-md-6 offset-md-3"><!-- method : comment vont circuler les données ? - action : URL de destination -->

  <div class="form-group">
    <label for="fruit">Fruit</label>
        <select class="form-control" id="sexe" name="fruit">
            <option value="cerise"> <?php  ?>Cerises</option>
            <option value="pomme">  <?php  ?>Pommes</option>
            <option value="banane"> <?php  ?>Bananes</option>
            <option value="peche">  <?php  ?>Pêches</option>
        </select>
<!-- Si un Fruit est bien défini, a bien été seléctionné et que ce fruit est égal à bananes, affiche le sélectionné -->

        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="text" class="form-control" id="mdp" name="poids" placeholder="poids" value="<?php $_POST['poids']?>">
        </div>
  </div>
  <button type="submit" name="formulaire1" value="valid_form" class="btn btn-dark col-md-12">Validation de votre Panier</button>
</form>



<?php
echo "<hr> <a href='boutique.php'>RETOUR A LA BOUTIQUE </a>"; 
require_once 'include/footer.php';

?>


 <!-- <a href="fiche_produit.php?choix=peches">  Pêches</a> <br> -->

