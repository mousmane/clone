<?php
$nom_fichier = 'liste.txt';

$fichier = file($nom_fichier); // la fonction file() fait tout le travail, elle retourne chaque ligne d'un fichier à des indices différents d'un tableau array

echo '<pre>'; print_r($fichier); echo '</pre>';

foreach($fichier as $value) // parcours du tableau ARRAY pour un affichage plus conventionnel
{
   echo $value . '<br>';
}

echo '<hr>';

echo implode($fichier, "<br>"); // Affichage du tableau ARRAY avec un passage à lal ligne

unlink($fichier); // supprime un fichier