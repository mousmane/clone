<?php 
 /***

 Différence entre Include et Require :
    Il n'y a pas de différence entre les 2
    SAUF en cas d'erreursur le nom du fichier, il ne peut pas être pris en compte :
        - include fait une erreur et continue l'éxécution du script
        - require fait une erreur et stop l'éxécution du script

  Le "ONCE vérifie si le fichier a déjà été inclus, si c'est le cas, il ne le ré-inclue pas.

  */


    
    // include_once ("include/header.php");
    // include_once ("include/nav.php");

    require_once ("include/header.php");
    require_once ("include/nav.php");
?>

<section>
    Voici le contenu de la page d'acceuil <br>
    Voici le contenu de la page d'acceuil <br>
    Voici le contenu de la page d'acceuil <br>
    Voici le contenu de la page d'acceuil <br>
    Voici le contenu de la page d'acceuil <br>
</section>

<?php
include_once ("include/footer.php");
?> 

        