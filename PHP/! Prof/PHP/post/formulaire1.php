<?php
require_once('include/header.php');

echo '<pre>'; print_r($_POST); echo '</pre>';

if(isset($_POST['formulaire1'])) // si je valide le formulaire, alors on entre dans les accolades
{
    echo 'Email : ' . $_POST['email'] . '<br>';
    echo 'MDP : ' . $_POST['mdp'] . '<br><hr>';
    // Exo : afficher les données saisie du formulaire à l'aide d'une boucle

    // faites en sorte d'exclure l'indice du bouton submit à l'affichage
    foreach($_POST as $indice => $valeur)
    {
        if($indice != 'formulaire1') // on exclu l'indice 'formulaire1' du tableau ARRAY
        {
            echo $indice . ' : ' . $valeur . '<br>'; // affiche tout sauf ce qui se trouve à l'indice 'formulaire1'  
        }   
    }
}

/*
La toute première fois quand on clic sur l'URL et qu'on fait 'entrer', nous ne rentrons pas dans le IF
Toutes les fois suivantes si nous cliquons sur le bouton "envoi", le code se ré_execute et nous rentrons dans le IF
Cliquez sur l'URL et faire 'entrer' = nous venons pour la 1ère fois
Faire F5 ou ctrl+r = nous répétons la dèrnière action

Dans le cas où nous avons plusieurs formulaires sur la même page, nous déclarons un attribut 'name' pour chaque bouton de validation et nous ajoutons aux conditions IF : isset($_POST[valeur_attribut_name_submit])
*/
?>

<!-- Réaliser un formulaire HTML avec les champs suivants : Email, mot de passe et un bouton de validation avec bootstrap -->
<h2 class="text-center">Formulaire de connexion</h2><hr>

<form method="post" action="" class="col-md-6 offset-md-3"><!-- method : comment vont circuler les données ? - action : URL de destination -->
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"><!-- il ne surtout pas oublier les attributs name dans le formulaire HTML -->
  </div>
  <div class="form-group">
    <label for="mdp">Password</label>
    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Password">
  </div>
  <button type="submit" name="formulaire1" value="valid_form" class="btn btn-dark col-md-12">Connexion</button>
</form>

<?php
require_once('include/footer.php');
?>

    