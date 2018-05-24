<?php

/*
1 - Déclarer un tableau ARRAY avec tous les fruits
2 - Déclarer un tableau ARRAY avec tous les poids suivants :

        -   100
        -   500
        -  1000
        -  1500
        -  2000
        -  3000
        -  5000
        - 10000

3 - Afficher les Tableaux
4 - Sortir le fruit "cerises" et le poids 500 en passant par vos tableaux pour les transmettre à la fonction "calcul" et obtenir le prix
5 - Sortir tous les prix pour les cerises avec tous les poids (indice : boucle)
6 - Sortir tous les prix pour tous les fruits avec les poids  (indice : boucle imbriquée)
*/

// require ('include/header.php');

require ('fonction.php');


$tab_fruits = array("cerises", "bananes", "pommes", "peches");
$tab_poids = array(100, 500, 1000, 1500, 2000, 3000, 5000, 10000);

echo '<pre>'; print_r($tab_fruits); echo '</pre>';
echo '<pre>'; print_r($tab_poids); echo '</pre>';

$position_fruit = array_search("cerises", $tab_fruits);
echo $position_fruit . '<br>';// retourne l'indice 0 du fruit = cerise

$position_poids= array_search("500", $tab_poids);
echo $position_poids . '<br>';// retourne l'indice 1 du poids = 500

echo calcul($tab_fruits[$position_fruit],$tab_poids[$position_poids]).'<hr>'; 

echo calcul($tab_fruits[0],$tab_poids[1]);
echo '<hr>';
echo '<h2> Sortir tous les prix pour les cerises avec tous les poids (indice : boucle) </h2>';
foreach ($tab_poids as $i  => $valeur )
{
    echo calcul($tab_fruits[0],$tab_poids[$i]); 
}
echo '<hr>';


// Correction : 
foreach ($tab_poids as $poids )
{
    echo calcul($tab_fruits[$position_fruit], $poids); 
}
echo '<hr>';

for ($i = 0 ; $i < count($tab_poids); $i++)
{
    echo calcul($tab_fruits[$position_fruit], $tab_poids[$i]);
}
echo '<hr>';


echo '<h1> Sortir tous les prix pour tous les fruits avec les poids  (indice : boucle imbriquée) </h1>';

echo '<h3> Avec la Boucle foreach </h3>';


foreach($tab_fruits as $fruits)
{
    foreach($tab_poids as $poids)
    {
        echo calcul($fruits, $poids);
    }
    echo '<hr>';
}

echo '<h3> Avec la Boucle for </h3>';

for ($i = 0 ; $i < count($tab_fruits); $i++)
{
    for ($j = 0 ; $j < count($tab_poids); $j++)
    {
        echo calcul($tab_fruits[$i], $tab_poids[$j]);
    }
    echo '<hr>';
}

// Exo : Faire un affichage sous forme de tableau HTML


echo '<h1> Faire un affichage sous forme de tableau HTML </h1>';


foreach($tab_fruits as $fruits)
{
    foreach($tab_poids as $poids)
    {
        echo calcul($fruits, $poids);
    }
    echo '<hr>';
}



echo '<br>';
echo '<br>';


?>






<?php

   echo "<hr> <a href='boutique.php'>RETOUR A LA BOUTIQUE </a>"; 
//    require_once 'include/footer.php';
// https://j-reaux.developpez.com/tutoriel/php/affichage-donnees-tableau-html/
   ?>


 <!-- <a href="fiche_produit.php?choix=peches">  Pêches</a> <br> -->

