<?php
$content = '';
$erreur = '';
if(isset($_POST['formulaire1']))
{
    // foreach($_POST as $key => $value)
    // {
    //     $content .= $key . ' : ' . $value . '<br>'; 
    // }
    //----------------------------------------------
    // Exo 1 : Informer l'internaute si la taille du pseudo n'est pas comprise entre 2 et 20 caractères
    if(strlen($_POST['pseudo']) < 3 || strlen($_POST['pseudo']) > 20)
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3 text-center">Taille du pseudo non conforme !</div>';
    }


    //----------------------------------------------
    // Exo 2 : Faites en sorte d'informer l'internaute qu'il faut saisir un nom dans la cas où le champs est laissé vide
    // if(strlen($_POST['nom']) == 0)
    // if($_POST['nom'] == NULL) 
    // if(!$_POST['nom'])   
    if(empty($_POST['nom']))
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3 text-center">Merci de saisir un nom !</div>';  
    }

    //-----------------------------------------------
    // Exo 3 : Faites en sorte d'informer l'internaute si le code postal n'est pas de type numérique et que la taille n'est pas de 5 caractères
    if(!is_numeric($_POST['code_postal']) || strlen($_POST['code_postal']) != 5)
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3 text-center">Code postal non valide !</div>';  
    }

    //------------------------------------------------
    // Exo 4 : Faites en sorte d'informer l'internaute si l'email saisie n'est pas valide (indice : fonction prédéfinie filtre)
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3 text-center">Email au format non valide !</div>';  
    }
    
    //------------------------------------------------
    // Exo 5 : Faites en sorte d'informer l'internaute si le formulaire et bien rempli, donc qu'il n'y a pas d'erreurs
    if(empty($erreur))
    {
        $content .= '<div class="alert alert-success col-md-6 offset-md-3 text-center">Inscription OK!</div>'; 
    }
    $content .= $erreur;

}

require_once('include/header.php');
//echo '<pre>'; print_r($_POST); echo '</pre>';
?>

<!-- 
Réaliser un formulaire d'inscription HTML avec les champs suivants : 
 - pseudo, nom, prenom, mdp, email, sexe, adresse, ville, code_postal, pays
 - contrôler en PHP que l'on recupère bien toute les données saisies du formulaire
 - afficher les données saisies en haut du formulaire avec un affichage conventionnel (boucle)
 -->
 <h2 class="text-center">Formulaire d'inscription</h2><hr>
<?= $content ?>
<form method="post" action="" class="col-md-6 offset-md-3">
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Enter pseudo">
  </div>  
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter prenom">
  </div>
  <div class="form-group">
    <label for="mdp">Password</label>
    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <select class="form-control" id="sexe" name="sexe">
      <option value="homme">Homme</option>
      <option value="femme">Femme</option>
    </select>
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <textarea class="form-control" id="adresse" name="adresse" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" aria-describedby="emailHelp" placeholder="Enter ville">
  </div>
  <div class="form-group">
    <label for="code_postal">Code Postal</label>
    <input type="text" class="form-control" id="code_postal" name="code_postal" aria-describedby="emailHelp" placeholder="Enter code_postal">
  </div>
  <div class="form-group">
    <label for="pays">Pays</label>
    <input type="text" class="form-control" id="pays" name="pays" aria-describedby="emailHelp" placeholder="Enter pays">
  </div>

  <button type="submit" name="formulaire1" value="valid_form" class="btn btn-dark col-md-12">Connexion</button>
</form> 


<?php
require_once('include/footer.php');
?>