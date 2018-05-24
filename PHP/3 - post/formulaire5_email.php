<?php

/*
- Réaliser un formulaire HTML avec les champs suivants : Nom, Prénom, Socièté, Email, Sujet, Message + un bouton de validation 
- Contrôler en PHP que l'on récupère bien toutes les données saisoe dans le formulaire
*/

if(isset($_POST['formulaire_email'] ))
{
    $_POST['expediteur'] = "From: $_POST[expediteur] \r\n";
    $_POST['expediteur'] .= "MIME-Version: 1.0 \r\n"; 
    // protocole d'envoi de mail permettant d'étendre les possibilités d'envoi de texte d'images de sons

    $_POST['expediteur'] .= "Content-type: text/html; charset=utf8 \r\n"; 
    // Cette ligne permet d'envoyer du code HTML directement dans le corps du message, pratique pour l'envoi d'une newsletter
    
    $_POST['message'] = "Nom : " . $_POST['nom'] . '<br>Prénom : ' . $_POST['prenom'] . '<br>Société : ' .$_POST['societe'] . '<br>Email : ' .$_POST['email'] . '<br>Sujet : ' .$_POST['sujet'] . '<br>message : ' .$_POST['message'] ;

    $mail= 'pcantat@gmail.com';
    mail($mail, $_POST['sujet'], $_POST['message'], $_POST['expediteur']);
}
require_once('include/header1.php'); 

// glx78@free.fr
// La fonction mail() reçoit toujours 4 arguments et l'ordre est CRUCIAL. 
// Comme dans la plus part des fonctions il faut resêcter le NOMBRE et L'ORDRE des arguments.

?> 
    <h2 class="col-md-6 offset-md-3">Formulaire d'Email</h2>
    
    <form method="post" action="" class="col-md-6 offset-md-3">
       
   
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
                <label for="inputSociete">Socièté</label>
                <input type="text" class="form-control" id="inputSociete" name= "prenom" placeholder="Votre Socièté">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Votre Email</label>
                <input type="text" class="form-control" id="inputEmail4" name= "expediteur" placeholder="Votre Email">
            </div>
        </div> 
   
       

        <div class="form-group col-md-9">
                <label for="inputSujet">Sujet</label>
                <input type="text" class="form-control" id="inputSujet" name= "sujet" placeholder="Votre Sujet" >  
        </div> 



        <div class="form-group col-md-16">
                <label for="inputAddress">Message</label>
                <input type="text" class="form-control" id="inputMessage" name= "message" placeholder="Votre Message">
        </div>


        <div class="form-group col-md-16">
            <button type="submit" name="formulaire2" class="btn btn-outline-primary btn-lg">Envoi</button>
    
        </div>
        </form>


















<?php


require_once('include/footer.php'); 


?>   

