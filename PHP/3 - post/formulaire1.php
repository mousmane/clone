
<?php 
// AJOUT DU HEADER  + DEBUT DE SECTION 
require_once('include/header.php');

echo '<pre>'; print_r($_POST); echo'</pre>';

echo '<br>';
 
if(isset($_POST['formulaire1'])) // Si je valide alors on entre dans les accolades
{
    echo 'Email: ' . $_POST['email'] . '<br>';
    echo 'MDP: '   . $_POST['mdp']   . '<br>';
}
echo '<br>';

// EXO : Afficher les données saisies du formulaire à l'aide d'une boucle
foreach($_POST as $indice => $valeur)
{
    echo $indice . ' : ' . $valeur . '<br>';
}
echo '<br>';
// faites en sorte d'exclure l'indice du bouton submit à l'affichage :
foreach($_POST as $indice => $valeur)
{
    if ($indice != 'formulaire1') // On exlu l'indice 'formulaire1' du tableau ARRAY
    // Tant que $indice est different de 'formulaire1' on affiche : $indice . ' : ' . $valeur
    {
        echo $indice . ' : ' . $valeur . '<br>';
    }
}

?> 
 
<!-- La Toute première fois quand on clic sur l'URL et que l'on fait 'Entrez', nous ne rentrons pas dans le IF -->
<!-- Toutes les fois suivantes si nous cliquons sur le bonton 'Envoyer', le code se ré-execute et nous rentrons dans le IF -->
<!-- Cliquez sur l'URL et faire 'Enter' = nous venons pour la 1ère fois faire F5 ou CTLR + R = Nous répétons la dernière action -->
<!-- Dans le Cas où nous avons plusieurs formulaires sur la même page, nous déclarons un attribut 'name pour chaque bouton de validation et nous ajoutons aux conditions IF : (isset($_POST['Valeur de l'attribut name submit'])) -->


<!-- Réaliser un formulaire HTML avec les champs suivant email, mot de passe et un bouton de validation  -->

    <h2 class="col-md-6 offset-md-3" >Formulaire de PC</h2>
    
    <form method="post" action="" class="col-md-6 offset-md-3">
        <!-- Ajout pour le PHP : -->
        <!-- method : Comment vont circuler les données ? "post" -->
        <!-- action : URL de destination -->
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse Email Requise</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name= "email" aria-describedby="emailHelp" placeholder="Votre Email">
            <!-- Ajout de name="email" SURTOUT NE PAS OUBLIER CES ATTRIBUTS -->
            <small id="emailHelp" class="form-text text-muted">Ne Partagez Pas Votre Email</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Votre Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="mdp" placeholder="Votre Mot de Passe">
            <!-- Ajout de name="mdp" SURTOUT NE PAS OUBLIER CES ATTRIBUTS-->
        </div>
        
        <button type="submit" name="formulaire1" value="valid_form" class="btn btn-primary">Envoyer</button>

    </form>
   
    
    <!-- AJOUT DU FOOTER + FIN DE SECTION-->
    <?php require_once('include/footer.php'); ?>   
