
 <!-- Réaliser un formulaire HTML avec les champs suivants :

 - pseudo
 - email
 - un bouton submit 
 
 et en affichant les données dans la page formulaire4.php
 
 -->


<?php 

// AJOUT DU HEADER  + DEBUT DE SECTION

require_once('include/header.php'); 




?> 
    <h2 class="col-md-6 offset-md-3">Formulaire de Connexion</h2>
   
    <!-- Affichage de la variable $content -->


   
    <form method="post" action="" class="col-md-6 offset-md-3">
        <div class="form-row" >
            <div class="form-group col-md-6">
                <label for="inputEmail4">Votre Email</label>
                <input type="text" class="form-control" id="inputEmail4" name= "email" placeholder="Votre Email">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPseudo">Pseudo</label>
                <input type="text" class="form-control" id="inputPseudo" name= "pseudo" placeholder="Votre Pseudo">  
            </div>
  
            <div class="form-group col-md-9">
                <button type="submit" name="formulaire3" class="btn btn-primary">Envoi</button>
            </div>
        </div>
    </form>




    <!-- AJOUT DU FOOTER + FIN DE SECTION-->
    <?php require_once('include/footer.php'); ?>   
