
<?php 

// AJOUT DU HEADER  + DEBUT DE SECTION

require_once('include/header.php'); 


$content ='';
$erreur ='';
if(isset($_POST['formulaire2']))
{
    foreach($_POST as $key => $value)
    {
        $content .=  $key . ' : ' . $value . '<br>';
    }
    // ----------------------------------------------
    // Exo 1 : Pseudo entre 2 et 20 caractères
    if(strlen($_POST['pseudo']) < 2 || strlen($_POST['pseudo']) > 20)
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3">Taille du Pseudo Non Conforme </div>';
    }
    // ----------------------------------------------
    // Exo 2 : Faites en sorte d'informer l'internaute qu'il faut saiir un nom dans le cas où le champs est laissé vide
    if(empty($_POST['nom']))
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3">Merci de Saisir un nom... </div>';
        
    }
    // ----------------------------------------------
    // Exo 3 : Faites en sorte d'informer l'internaute si le code postal n'est pas de type numérique et fait exactement 5 caractères
    if(!is_numeric($_POST['zip']) || strlen($_POST['zip'])!=5)
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3">Merci de Saisir un Code Postal Valide... </div>';
    }
    // ----------------------------------------------
    // Exo 4 : Faites en sorte d'informer l'internaute si l'email saisie n'est pas valide (indice: fonction prédéfinie filtre)
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $erreur .= '<div class="alert alert-danger col-md-6 offset-md-3">Merci de Saisir un Email Valide... </div>';
    }
    // ----------------------------------------------
    // Exo 5 : Faites en sorte d'informer l'internaute si le formulaire est bien rempli, donc qu'il n'y a pas d'erreur
    if (empty($_POST['erreur'] ))
    {
        $content .= '<div class="alert alert-success col-md-6 offset-md-3">Inscription Valide... </div>';
    }
    $content .= $erreur;
}


// -- Réaliser un formulaire HTML avec les champs suivants :
// - pseudo
// - nom
// - prenom
// - sexe
// - email
// - mot de passe
// - adresse
// - ville
// - Code Postal
// - Pays

// ================

// - Controler en PHP que l'on récupère bien des données saisies du formulaire

// - Afficher les données saisies en haut du formulaire avec un affichage 


// foreach($_POST as $indice => $valeur)
// {
//     if ($indice != 'formulaire2') 
//     {
//         echo $indice . ' : ' . $valeur . '<br>';
//     }
// }


?> 
    <h2 class="col-md-6 offset-md-3">Formulaire de Connexion</h2>
   
    <!-- Affichage de la variable $content -->
<!-- <?= $content ?>
<br>
<?= $erreur ?> -->

        <!-- Ajout pour le PHP : -->
        <!-- method : Comment vont circuler les données ? "post" -->
        <!-- action : URL de destination -->
        <!-- Ajout de name="mdp" SURTOUT NE PAS OUBLIER CES ATTRIBUTS-->

   
    
    <form method="post" action="" class="col-md-6 offset-md-3">
        <div class="form-row" >
            <div class="form-group col-md-6">
                <label for="inputEmail4">Votre Email</label>
                <input type="text" class="form-control" id="inputEmail4" name= "email" placeholder="Votre Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Mot de Passe</label>
                <input type="password" class="form-control" id="inputPassword4" name= "psd" placeholder="Mot de Passe">
            </div>
        </div>
        
   
        <div class="form-row" >
            <div class="form-group col-md-6">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" name= "nom" placeholder="Votre Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPrenom">Prenom</label>
                <input type="text" class="form-control" id="inputPrenom" name= "prenom" placeholder="Votre Prénom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputSexe">Sexe</label>
                    <select id="inputSexe" name= "sexe" class="form-control">
                        <option selected>Masculin</option>
                        <option>Féminin</option>
                    </select> 
                <br>    
                <label for="inputPrenom">Pseudo</label>
                <input type="text" class="form-control" id="inputPseudo" name= "pseudo" placeholder="Votre Pseudo" >  
            </div> 
        </div> 
   
       
        <div class="form-group">
            <label for="inputAddress">Adresse</label>
            <input type="text" class="form-control" id="inputAddress" name= "adresse" placeholder="10 rue de Paris">
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputZip">CP</label>
                <input type="text" class="form-control" id="inputZip" name= "zip" placeholder="75000">
            </div>
        <div class="form-group col-md-5">
                <label for="inputCity">Ville</label>
                <input type="text" class="form-control" id="inputCity" name= "ville" placeholder="Paris">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Pays</label>
                <select id="inputState" name= "pays" class="form-control">
                    <option selected>France</option>
                    <option>Italie</option>
                    <option>Espagne</option>
                    
                </select>
            </div>

        <div class="form-group col-md-6">
            <button type="submit" name="formulaire2" class="btn btn-primary">Envoi</button>
        </div>
        </form>


    <!-- AJOUT DU FOOTER + FIN DE SECTION-->
    <?php require_once('include/footer.php'); ?>   
