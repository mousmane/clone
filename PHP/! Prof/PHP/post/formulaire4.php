<?php
require_once('include/header.php');

//echo '<pre>'; print_r($_POST); echo '</pre>';

if($_POST)
{
    foreach($_POST as $key => $value)
    {
        echo $key . ' : ' . $value . '<br>'; 
    }

    // Exo : Enregistrer dynamiquement dans un fichier .txt, le pseudo et l'email du formulaire3.php garce au fonctions suivantes : 
    /*
        fopen()
        fwrite()
        fclose()
    */

    $liste = fopen('liste.txt','a'); // fopen() en mode "a" permet de créer le fichier s'il n'est pas trouvé, sinon de l'ouvrir
        fwrite($liste, $_POST['pseudo'] . ' - ' . $_POST['email'] . "\r\n"); // fwrite() permet d'écrire dans le fichier représenté par $liste
        fclose($liste); // fclose() qui n'est pas indispensable, permet de fermer le fichier et de libérer de la ressource
        // Contexte: si l'on souhaite enregister des membres à une newsletter et que l'on ne possède pas de BDD, il serait interessant de le faire via un fichier texte
}
else
{
    echo 't as rien à foutre la , dégage !!';
}

require_once('include/footer.php');
