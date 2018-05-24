
<?php 

require_once('include/header1.php'); 

if ($_POST)
{

    foreach ($_POST as $key => $value)
    {
        echo $key.' : '.$value.'<br>';
    }

// Exo : Enregistrer dynamyquement dans un fichier texte, le pseudo l'email du formulaire 4

/* 
fopen()
fwrite()
fclose()
*/

    $liste = fopen("liste.txt", 'a'); // fopen en mode "a" permet de créer le fichier s'il n'est pas trové, sinon de l'ouvrir
        fwrite($liste, $_POST['pseudo'] . ' - ' . $_POST['email']. "\r\n"); 
        // fwrite permet d'écrire dans le fichier représenté par $liste 
        fclose($liste);
        // fclose qui n'est pas indispensable , permet de fermer le fichier et de libérer de la ressource
        // Contexte : si l'on souhaite enregistrer des menbres à une newsletter et que le'on posséde pas de BDD, il serait interressant de le faire via un fichier texte
}
else 
    {
        echo 'Dégage....................';
    }





require_once('include/footer.php'); 


// https://wooster.checkmy.ws/2015/04/css-frameworks-bootstrap-alternatives/
// https://www.google.com/search?q=frameworks+CSS&ie=utf-8&oe=utf-8&client=firefox-b
?>   

