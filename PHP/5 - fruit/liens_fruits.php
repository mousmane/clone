<?php

/*
1 - Effectuer 4 lignes HTML pointant sur la même page avec le nom des fruits
2 - Faites en sorte d'envoyer "cerises" dans l'URL si l'on clique sur le lien cerises, faites la meme chose sur tous les fruits .
3 - Tenter d'afficher "cerises" sur la page WEB si l'on clique dessus (si "cerise" est passé dans l'URL par conséquent)
4 - Envoyer l'information à la fonction déclarée "calcul()"  afin d'afficher le prix pour 1 kg de tous les fruits
*/


require_once('fonction.php');

$content = '';
if (isset($_GET['choix']))
{
    $content .= "vous avez séléctionné les $_GET[choix]<br>";
    $content .= calcul($_GET['choix'],1000) ; // on transmet à la fonction le fruit cécupéré via l'URL, grace à la superglobale $_GET
}

?>

<h1>Bienvenue dans notre Boutique de Fruits</h1>

<!-- Si les liens pointent sur la même page, il n'est pas nécessaire d'appeler le fichier avant le ? -->
<a href="?choix=cerise">  Cerises</a> <br>
<a href="?choix=pommes">  Pommes</a> <br>
<a href="?choix=bananes"> Bananes</a> <br>
<a href="?choix=peches">  Pêches</a> <br>
<br>
<br>
<br>
<?php

   echo "<hr> <a href='boutique.php'>RETOUR A LA BOUTIQUE </a>"; 
?>


 <!-- <a href="fiche_produit.php?choix=peches">  Pêches</a> <br> -->

