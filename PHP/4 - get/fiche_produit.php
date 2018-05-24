<?php

// echo '<pre>' ; print_r($_GET); echo '</pre>' ;

// Exo : afficher les données dans l'URL à l'aide d'un affichage conventionnel (boucle ou crocheté d'indices)

if (isset($_GET['id_produit'])) // On entre dans la condition IF seulement dans le cas où nous avons cliqué sur le lien 'produit', donc que nous avons envoyé l'indice 'id_produit dans l'URL
{
    echo "<h2> Voici le détail du produit n° $_GET['id_produit'] </h2><hr>";
    // la superglobale $_GET permet d'exploiter les données transmises dans l'URL, c'est une variable ARRAY, on peut donc la parcourir avec la boucle foreach
}

foreach($_GET as $indice => $valeur)
{
    if ($indice!='id_produit')
    {
        echo  $indice.' : '.$valeur.'<br>';
    }
}
    echo 'Dégage...';


echo "<hr> <a href='boutique.php'>RETOUR A LA BOUTIQUE </a>";