<style>
h2{margin: 0; background: blueviolet; padding: 10px; text-align:center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;
}
body {margin: 0; padding: 5px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 15px;}
</style>

<h2> Ecriture et Affichage</h2>
<!-- Nous ne pouvons écrire de l'HTML dans un fichier PHP, l'inverse n'est PAS POSSIBLE
-->

    
<body>
<?php

echo 'bonjour'; // echo est intruction d'affichage que l'on peut tradouire par 'affiche moi'
echo '<br>';
echo '<br>';
echo 'test';
// une instruction se termine toujours par un point virgule
// Si l'on observe le code source, le code n'apparrait pas, puisque il est  traduit par l'interpreteur et renvoyé au format HTML

echo '<br>'; // nous pouvons également y mettre du HTML
echo '<br>';
echo 'Nous sommes Vendredi';
echo '<br>';
echo '<h2>Commentaires</h2>';
echo '<br>';
?>

<strong> Bonjour</strong>
<?= 'ALLO' ?>  <!-- le ? remplace la commande echo -->

<?php echo 'La Suite'; ?> 

<?php 
echo 'texte 1'; // un commentaire sur une ligne
echo '<br>';
echo '<br>';
echo 'texte 2';
echo '<br>';
echo '<br>';
/* 
Ceci est un commentaire sur plusieurs lignes 
*/
echo 'texte 2';
echo '<br>';
echo '<br>';
print 'texte 3';
echo '<br>';
echo '<br>';

echo '<h2>Variables : Types / Déclarations / Affectations </h2>';
// Une variable  est un espace nommé permettant de conserver une valeur 
// Une variable se déclare toujours avec le signe $ 
// $2a => incorrect, $a2 => Correct, on ne peux pas placer un chiffre juste après le $, ni d'accent ni d'espace
echo '<br>';
$a = 127; // affectation de la valeur 127 à la variable 127 nommée "a"

echo gettype($a); // il s'agit d'un entier de type INTeger
echo '<br>';
echo '<br>';

$b = 1.5;
echo gettype($b); // un nombre à virgule : DOUBLE
echo '<br>';
echo '<br>';

$c = "une chaine de caratères"; // Une chaine de caratères : STRING
echo gettype($c);
echo '<br>';
echo '<br>';

$d = "127"; // Une chaine de caratères : STRING
echo gettype($d); // il s'agit d'Une chaine de caratères de type STRING
echo '<br>';
echo '<br>';

$e = true; // Boolean
echo gettype($e); 
echo '<br>';
echo '<br>';

$f = false; // Boolean
echo gettype($e); 
echo '<br>';
echo '<br>';


echo '<h2> Concaténation </h2>';
$x = "Bonjour ";
$y = "tout le monde !!";

echo $x.$y.'<br>'; // Le point de concaténation que l'on peut traduire par 'suivi de... '
echo '<br>';

echo "$x $y <br>"; // Entre guillemets les variables sont évaluées (interprétées)
echo '<br>';

echo '$x $y <br>'; // entre simple quote c'est une chaine de caractères
echo '<br>';

echo "Hey :: !!! " .$x.$y.'<br>'; // concaténation avec du texte et variables
echo "Hey :: !!! " ,$x,$y,'<br>'; // concaténation avec une virgule (la virgule et le point de concaténation sont similaires)

echo '<h2>Concaténation lors de l\'effectation</h2>'; // Mettre un \ (antislash) permet d'échapper les apostrophes dans les chaine de caractères

$prenom1 = "Bruno" ;
$prenom1 = "Claire";

echo $prenom1.'<br>'; // affiche claire cela remplace bruno par claire

$prenom2  = "Nicolas" ;
$prenom2 .= "Marie";
echo $prenom2.'<br>'; // affiche claire cela remplace bruno par claire


$prenom2  = "Nicolas" ;
$prenom2 .= "Marie";
$prenom2 .= "Greg";

echo $prenom2.'<br>'; 

echo $prenom2.'<br>'; // affiche Nicolas Marie Greg, cdela ajoute sans remplacer les valeurs précendentes grace à l'operateur

echo '<h2> Constante et Constante Magique </h2>';
// une constant tout comme une variable permet ded conserver une valeur sauf comme son non l'indique elle est constante !! On ne porra pas changer sa valeur durant l'exécution du script

define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscule

echo CAPITALE .'<br>'; 

// define("CAPITALE", "Rome"); /!!\ <ERREUR> /!!\ il n'est pas possible de redéfinir une constante durant l'éxécution du script

// CONSTANTES MAGIQUES
echo __FILE__ . '<br>'; // Chemin complet vers le fichier
echo __LINE__ . '<br>'; // affiche le numéro de la ligne
// il en existe d'autre __FUNCTION__, __ CLASS__, __METHODS__


define("URL", "http://www.mon-site.fr");

echo '<nav>';
    echo '<a href="' . URL . '/boutique.php" >BOUTIQUE</a>';
echo '</nav>';

// Exo : Les Variables

echo '<h2> Exercice Variables </h2>';

// Exo : Afficher vert-jaune-rouge les tirets en mettant chaque couleur dans une variable

$r = 'rouge';
$j = 'jaune';
$v = 'vert';
echo $v . '-' . $j .'-' . $r .'<br>';
echo "$v-$j-$r<br>";

$couleur  = 'vert-';
$couleur .= 'jaune-';
$couleur .= 'rouge<br>';
echo $couleur;

echo '';


// ==================================================================================
// Operateurs Arithmétiques
// ==================================================================================


echo '<h2> Operateurs Arithmétiques </h2>';

$a = 10; $b=2;

echo $a + $b.'<br>'; // Affiche 12
echo $a - $b.'<br>'; // Affiche  8
echo $a * $b.'<br>'; // Affiche 20
echo $a / $b.'<br>'; // Affiche 5

// opération  et Affectation
$a = 10; $b=2;

$a += $b; // equivaut à $a = $a + $b ,  Affiche 12
echo $a.'<br>';
$a -= $b; // equivaut à $a = $a + $b ,  Affiche  8
echo $a.'<br>';
$a *= $b; // equivaut à $a = $a + $b ,  Affiche 20
echo $a.'<br>';
$a /= $b; // equivaut à $a = $a + $b ,  Affiche 5
echo $a.'<br>';
echo '<br>';

// ==================================================================================
// Structures Conditionnelles
// ==================================================================================

echo '<h2> Structures Conditionnelles </h2>';

// isset et empty

$var1 = 0;
$var2 = '';
$var3 = 10;

// empty permet de tester une variable, si a 0 FALSE , vide ou non-défini
// si la condition est vérifiée, c'est le code entre accolades qui sera exécuté
// isset teste l'existance d'i=une variable si elle differente de NULL

if (empty($var1))
{
    echo  $var1 .' - ' .'0, vide ou non définie';
};
echo '<br>';
if (empty($var2))
{
    echo  $var2 .' - ' .'0, vide ou non définie';
};
echo '<br>';
if (empty($var3))
{
    echo  $var3 .' - ' .'0, vide ou non définie';
};
echo '<br>';
// echo 'Non vide';

if (empty($var1))
{
    echo  $var1 .' - ' .'0, vide ou non définie';
};
echo '<br>';

// isset teste l'existance de la variable :
if (isset($var2))
{
    echo  $var2 .' - ' .'var2 existe et est définie par rien';
};
echo '<br>';

// ==================================================================================
// Les Conditions
// ==================================================================================

echo '<h2> Les Conditions </h2>';
echo '<br>';

$a = 10 ; $b = 5 ; $c =2;

if ($a > $b) // si A est supérieur à B
{
    echo 'A est bien supérieur à B'; 
}
else // sinon... cas par défaut, dans tous les autres cas
{
    echo 'Non c\'est B qui est  supérieur à A';
}
echo '<br>';

// ==================================================================================
// OPERATEURS DE COMPARAISON
//
// =        affectation
// ==       comparaison de la valeur
// ===      comparaison de la valeur et du type
// >        strictement supérieur
// <        strictement inférieur
// >=       supérieur ou égal
// <=       inférieur ou égal
// !        n'est pas
// !=       different de 
// OR ||    OU
// XOR ou   exclusif
// AND &&   ET
// ==================================================================================

echo '<br>';


if ($a==8)
{
    echo '1 - A est égal à 8.'.'<br>';
    echo '<br>';
}
elseif ($a != 10)
{
    echo '1 - A est different de 10.';
    echo '<br>';
}
else
{
    echo '3 - tout le monde a faux.';
    echo '<br>';
}
// Grace au ifelse, si les conditions est respecté, toutes les autres conditions ne seront pas évaluées

echo '<br>';

if($a == 10 XOR $b == 6)
{
    echo 'ok condition exclusive <br>'; // si les 2 conditions sont bonnes ou mauvaises, on ne rentre pas içi
}

// -------------------------------------------------------
// Forme contractée : 2ème possiblitée d'écriture des if
// -------------------------------------------------------

echo ($a == 10 ) ? "a est égal à 10" : "a n'est pas égal à 10";
// le ? remplace le if
echo '<br>';

// -------------------------------------------------------
// La Comparaison
// -------------------------------------------------------

$vara = 1 ;
$varb = '1';

if ($vara == $varb)
{
    echo ' il s\'agit de la meme chose';
}


// avec le double égal == le test fonctionne puisque la valeur est la même
// avec le triple égal === , le test ne fonctionne pas puisque la valeur est la même mais le type est différent
// == comparaison de la valeur
// === comparaison de la valeur et du type





// ==================================================================================
// La Condition Switch
// ==================================================================================

echo '<h2> Condition Switch </h2>';
// Les Case représentent les cas differents dans lesquels nous pouvons potentiellement tomber...

$couleur = 'jaune';

switch($couleur)
{
    case'bleu':
    echo 'Vous aimez le Bleu';
    break; // Permet de stopper le script si nous entrons dans un des cas

    case'vert':
    echo 'Vous aimez le Vert';
    break;

    case'rouge':
    echo 'Vous aimez le Rouge';
    break;

    default: // cas par defaut, si on ne rentre pas dans les cas précédents
    echo 'Vous n\'aimez rien <br>';
}


// Exo Pouvez vous faire la meme chose que le switch avec des if / else?
// Si oui, faites-le....

// if $couleur=='bleu' {
//     echo 'Vous aimez le Bleu';
// }
// else {
//     if $couleur=='vert' {
//         echo 'Vous aimez le Vert';
//         }
//         else { 
//             if $couleur=='rouge' {
//                 echo 'Vous aimez le Rouge';  
//         }
//         echo 'Vous n\'aimez rien <br>';    
//     }


if ($couleur == 'bleu')
    echo 'Vous aimez le Bleu';
    
elseif ($couleur == 'vert')
    echo 'Vous aimez le Vert';

elseif ($couleur == 'rouge')
    echo 'Vous aimez le Rouge';

else
    echo 'Vous n\'aimez rien <br>';

// Si dans la condition IF, il n'y a qu'une seule instruction d'affichage  les accolades ne sont pas nécessaires



// ==================================================================================
// Les Fonctions pré-définies
// ==================================================================================

echo '<h2> Les Fonctions pré-définies </h2>';

// Les Fonctions pré-définies permettent de réaliser un traitement spécifique, il existe une liste assez conséquente

echo 'Date du Jour : ' . date("d/m/Y") .'<br>';
// lorsque l'on utilise une fonction prédéfinie, il faut toujours se poser la question de quels sont les arguments
// on doit lui envoyer et surtout savoir ce qu'elle retourne, il est important de consulter la doc sur www.php.net


echo '<h2> Les Fonctions pré-définies : Traitement des chaînes (iconv_strlen, strpos, substr) </h2>';

echo '<br>';
$email_1 = 'pcantat@gmail.com'; 
echo strpos($email_1, '@'); // indique la position 7 du caractère '@' dans la chaine de (8  et non pas 7 car le décompte commence à 0)

// p c a n t a t @ g m a i l . c o m
// 0 1 2 3 4 5 6 7
// 1 2 3 4 5 6 7 8

// strpos() est fonction pré-définie qui retourne la position d'un caractère dans une chaine de caractère
// Contexte : nous pourrions l'utiliser pour savoir si le format d'une adresse email est valide

$email_2 = 'bonjour'; 
echo strpos($email_2, '@').'<br>'; // Cette ligne ne retourbe rien, pouant il y a bien quelque chose à l'intérieur : FALSE !!
var_dump(strpos($email_2, '@'));   // Gràce au var_dump() on aperçoit le FALSE  si le caractère @  n'est pas trouvé. 
                                   // var_dump est donc une instruction d'affichage améliorée que l'on utilise souvent en phase de développement.

echo '<br>';

print_r(strpos($email_2, '@'));    // print_r est une autre instruction d'affichage améliorée, qui retourne moins d'information

// ---------------------------------------------------------------------------------------------------
echo '<br>';

$phrase = 'Nous sommes mardi, il fait beau et j \'ai faim ';
echo iconv_strlen($phrase) . '<br>';
// il existe aussi strlen() qui calcul la taille d'une chaine de caractères comme iconv_strlen()
var_dump(iconv_strlen($phrase));
// iconv_strlen() est une fonction prédéfinie qui retourne la taille d'une chaine de caractères
// Succés : retourne un INT
// Echec : boulean FALSE
// Contexte : nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors d'une inscription, ont des tailles conformes

// ---------------------------------------------------------------------------------------------------
$texte = 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s\'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d\'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l\'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.';

echo substr($texte, 0 , 20) . " <a href=''>... Lire la suite </a> <br> ";

// substr() est une fonction prédéfinie permettant de retouner une partie de la chaine :
// - Succes : string
// - Echec Boolean : FALSE

// Arguments : 
// 1. la chaine que l'on souhaite couper
// 2. la position de début
// 3. la position de fin, le nombre de caractères souhaités

// Contexte : substr() est souvent utilisée pour afficher des actualitées avec une accroche


// ==================================================================================
// Les Fonctions Utilisateurs
// ==================================================================================

echo '<h2> Les Fonctions Utilisateurs </h2>';
// Les Fonctions Utilisateurs ne sont pas prédéfines dans le langage PHP 
// Elles sont déclarées puis exécutées par l'utilisateur


// Une fonction se déclare toujours avec le mot clé 'function' suivi du nom de la fonction entre parenthèse que nous définissons : pas d'accent et pas d'espace

function separation() // déclaration d'une fonction prévue pour ne pas recevoir des arguments
{
    echo '<hr><hr><hr>';
}

separation();

// ---------------------------------------------------------------------------------------------------
// fonction avec arguments
// ---------------------------------------------------------------------------------------------------

echo '<h2> Les Fonctions Utilisateurs : Les Fonctions avec arguments </h2>';

function bonjour($qui='Jean-Christophe') // $qui ne sort de nul part . Permet de recevoir l'argument
// La valeur par défaut est Jean-Christophe
{
    return "bonjour $qui <br>";
//  echo 'Allo';
}
$prenom = "Maxime";
echo bonjour('Greg');  // Si la fonction reçoit une argement, il faut lui envoyer un argument
echo bonjour($prenom); // Quand il y a un "return" dans la fonction, il faut faire un 'echo' avant

echo bonjour();        // Si l'argument a une valeur par défaut, il n'est pas nécessaire d'en envoyer un à l'exécution

echo bonjour('Julien');  // on écrase la valeur par défaut de la variable de réception


function appliqueTVA($nombre)
{
    return $nombre*1.2; // 1.2 est le coéfficient du taux de TVA de 20%
}

echo "500 Euros avec une TVA de 20% : ".appliqueTVA(500).'<br>';

// Exo : Pourriez vous amméliorer cette fonction afin que l'on puisse calculer avec un taux de de TVA de notre choix


$taux_brut=20;
$taux = ($taux_brut/100+1);
function appliqueTVA2($nombre)
{
    return $nombre*$taux; // 1.2 est le coéfficient du taux de TVA de 20%
}

echo "1200 Euros avec une TVA de 20% : ".appliqueTVA(1200).'<br>';

// Correction Exo :
function appliqueTVA3($nombre, $taux=20)
{
    return $nombre*(1+$taux/100); 
}

echo "500 Euros avec une TVA de 20%   : ".appliqueTVA3(500,19,6).'<br>';
echo "500 Euros avec une TVA de 5,5%  : ".appliqueTVA3(500,5,5). '<br>';
echo "500 Euros avec une TVA de 7%    : ".appliqueTVA3(500,7).   '<br>';
echo "500 Euros avec une TVA de 19,6% : ".appliqueTVA3(500,19,6).'<br>';


meteo('printemps',19);

function meteo($saison, $temperature)
{
    echo "Nous sommes au $saison et il fait $temperature degré(s) <br>";
}

// Exo : Gérer le S de degréS avec if / else

meteo2('printemps',1);

function meteo2($saison, $temperature)
{
    if ($temperature > 1 OR $temperature < -1)
    {
        echo "Nous sommes au $saison et il fait $temperature degrés <br>";
    }
    else echo "Nous sommes au $saison et il fait $temperature degré <br>";
}




function meteo3($saison, $temperature)
   
    {
        echo "Nous sommes au $saison et il fait $temperature";
        if ($temperature > 1 || $temperature < -1)
        {
            echo " degrés <br>";
        }
        else {echo " degrés <br>";}
    }





    meteo3('Printemps', 0);
    echo '<hr>';
    meteo3('Printemps', 20);
    echo '<hr>';
    meteo3('Printemps', -1);
    echo '<hr>';
    meteo3('Printemps', -10);
    echo '<hr>';
    
// Avec la gestion de la saison :


// Exo : gérer le S de degréS avec des if/else
function exoMeteo($saison, $temperature)
{
    // gérer la phrase en fonction de la saison ex: au printemps, en hiver
    if($saison == 'printemps')
    {
        $texte = 'au';
    }
    else
    {
        $texte = 'en';
    }

    echo "Nous sommes $texte $saison et il fait $temperature";
    
    if($temperature > 1 || $temperature < -1)
    {
        echo " degrés<br>";    
    }
    else
    {
        echo " degré<br>";   
    }
}

exoMeteo('printemps', 0);
exoMeteo('hiver', 1);
exoMeteo('été', -1);
exoMeteo('printemps', 2);
exoMeteo('printemps', -2);



// ------------------------------------------------------------------------------------------
// Espace Global - Local
// ------------------------------------------------------------------------------------------

// Lorsque l'on travail à l'intérieur d'une fonction, on se trouve dans l'espace local, tout le reste, c'est à dire en dehors d'une fonction s'appelle l'espace global (espace par défaut)

function jourSemaine()
{
    $jour ='mardi'; // Variable déclarée en local
    return $jour;   // Une fonction peur retourner quelque chose, on retourne le résultat de la fonction (à ce moment là on quitte la fonction)
    echo 'Allo !!'; // Cette ligne ne sortira pas car il y a un return avant (qui fait quitter la fonction)
}
echo jourSemaine(); // Exécution de la fonction

// echo $jour; // /!\ Génére une ERREUR, ne fonctionne pas car cette variable n'est pas connue qu'à l'intérieur de la fonction

$recup = jourSemaine(); // On récupère
echo $recup;            // On affiche


// ----------------------------------------------------------------

$pays= 'France'; // Variable déclaré dans l'Espace Global

function affichagePays()
{
   global $pays; // Le echo qui suit fonctionnerai pas si nous n'avions pas mis ce mot*-clé "global" pour importer tout ce qui est déclaré de l'espace global dans l'espace local 
    echo $pays;
}

affichagePays();

echo '<hr>';
// ----------------------------------------------------------------
// /!\ PHP 7

function identite(string $prenom, int $age)
{
    return $prenom . ' a '.$age.' ans <br>';
}

echo identite('Pascal', 49);


echo '<hr>';



// ===========================================================================================
// Structure itérative
// ===========================================================================================

echo '<h2> Structure Itérative </h2>';

// Boucle While

$i = 0;
while ($i<3)
{
    echo "$i---";
    $i++; // incrémentation, équivaut à $i = $i + 1
}
// affiche : 0---1---2---

echo '<hr>'.'Faites en sorte de ne pas avoir les tirets à la fin de 0---1---2 <br>';
// Exo : Faites en sorte de ne pas avoir les tirets à la fin 0---1---2
$n = 3;
$i = 0;
while ($i<($n-1))
{
   // if ($i=3) {break};
    echo "$i---";
    $i++; // incrémentation, équivaut à $i = $i + 1
}
echo $i;

// exo - correction

while ($i<3)
{
    if($i==2)
    {
        echo "$i";
    }
    else {echo "$i---";}
    $i++;
}
echo '<hr>';

// -------------------------------------------------------------------------
// Boucle For

for ($i = 0 ; $i< 16 ; $i++) // Valeur de départ -- Condition d'entrée -- Sens d'Incrémentation
{
    echo $i .'<br>';
}

echo '<hr>';

// -------------------------------------------------------------------------
// Exo : afficher 30 options via une boucle For

echo '<select>';
for ($option=1 ; $option <= 30; $option++)
{
        echo'<option>'. $option .'</option>';
}
echo '</select><br>';

echo '<hr>';

// -------------------------------------------------------------------------
// Exo : Faites une boucle qui affiche de 0 à 9 sur la même ligne (soit 10 tours) dans un tableau HTML

echo 'sans bordures';

echo '<table>';                         // déclaration du tableau 
    echo '<tr>';                        // déclaration d'une ligne
    for($tours = 0 ; $tours < 10 ; $tours++) 
    {
        echo '<td >'.$tours.'</td>';     // déclaration d'une cellule
    }
    echo '</tr>';
echo '</table>';

echo 'avec bordures';
// avec bordures :
echo '<table border=1><tr>';                        // déclaration d'une ligne
    for($tours = 0 ; $tours < 10 ; $tours++) 
    {
        echo '<td >'.$tours.'</td>';     // déclaration d'une cellule
    }
    echo '</tr>';
echo '</table>';


// -------------------------------------------------------------------------
// Exo : Faire la même chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles
// indice : boucle imbriquée

echo '<table border=1><tr>';                        // déclaration d'une ligne
    for($tours = 0 ; $tours < 99 ; $tours++) 
    {
        if ($tours==9 || $tours==19 || $tours==29  || $tours==39 || $tours==49 || $tours==59  || $tours==69 || $tours==79 || $tours==89 )
        {
            echo "<tr>$tours</tr>";
        }
        echo '<td >'.$tours.'</td>';     // déclaration d'une cellule
    }
    echo '</tr>';
echo '</table>';


echo '<hr>';
echo '<hr>';

// Correction 1 :

$z=0;

echo '<table border=1><tr>';                        // déclaration d'une ligne
    for($ligne = 0 ; $ligne < 10 ; $ligne++) 
    {
        echo '<tr>';
        for($cellule = 0 ; $cellule <10; $cellule++) // tant que $ligne est à Zéro, $cellule s'incémente 10 fois, $ligne est à 1, cellule s'incrémente 10 fois
        {
            echo "<td>$z</td>"; // compteur qui s'incrémente à chaque tours de bouclede boucleet ne revient à Zéro
            $z++;
        // Autre Solution :
        //  echo "<td>". (10 * $ligne + $cellule) . "</td>"
        }
        echo '</tr>';
    }
    echo '</table>';
// Un Tour de boucle for() entraîne 10 tours de la 2ème

echo '<hr>';
echo '<br>';
echo '<br>';
echo '<br>';

// ===========================================================================================
// Tableau de données ARRAY
// ===========================================================================================


echo '<h2> Tableau de données ARRAY </h2>';
// un Tablea u est déclaré un peu à la manière d'une variable amélioréee, car on ne conservera pas une valeur mais un ensemble de valeurs

$liste = array("Greg", "Maxime", "Julien", "JC");

echo $liste; // /!\ ATTENTION ERREUR, il est impossible d'afficher un tableau ARRAY avec une instruction d'affichage

// les instructions d'affichage améliorée permettent de debuger et de contrôler les données, ce n'est pas un affichage conventionnel, l'internaute n'est pas censé voir le rendu du print_r ou var_dump
echo '<pre>' ; var_dump($liste); '</pre>';

// la balise <pre> permet de formater le texte, cela nous permet de mettre en forme la sortie du print_r ou var_dump
echo '<pre>' ; print_r($liste); '</pre>';



echo '<h2> Boucle FOREACH pour les tableaux de Données ARRAY </h2>';

// Autre Moyen de créer et d'affecter une valeur à un tableau array. Nous ne mettons pas le mot ARRAY mais les crochets [] qui permettent de générer des indices numériques
$tab[]= "France";
$tab[]= "Brésil";
$tab[]= "Espagne";
$tab[]= "Argentine";
$tab[]= "Portugal";


echo '<pre>'; print_r($tab); echo '</pre>';

// Exo : tenter de sortir "Argentine" en passant par le tableau ARRAY  sans faire un echo Argentine
// if 
// echo $tab[3].'<br>';


// 1er Argument : le tableau à parcourir
foreach($tab as $info) // Le mot AS fait partie du langage et est obligatoire. $info est une variable de réception qui vient parcourir la colonne des valeurs du tableau de données ARRAY
{
    echo $info.'<br>';
}

/**
 *  -------------------------
 *  | Indices  |  Valeurs   |
 *  -------------------------
 *  |    0     | France     |
 *  |    1     | Brésil     |
 *  |    2     | Espagne    |
 *  |    3     | Argentine  |
 *  |    4     | Portugal   |
 *  -------------------------
 * 
 */
echo "<br>";
echo "<br>";

echo "  -------------------------"."<br>";
echo "  | Indices  |  Valeurs   |"."<br>";
echo "  -------------------------"."<br>";
echo "  |    0     | France     |"."<br>";
echo "  |    1     | Brésil     |"."<br>";
echo "  |    2     | Espagne    |"."<br>";
echo "  |    3     | Argentine  |"."<br>";
echo "  |    4     | Portugal   |"."<br>";
echo "  -------------------------"."<br>";
  
echo "<br>";
echo "<br>";
 


 echo '<hr>';
 foreach($tab as $indice=>$info)
 {
    echo $indice.' = > '. $info. '<br>'; // on affiche sucessivement les éléments du tableau
}

echo '<hr>';

// Autre Manière de l'écrire
// Il esr possible de délimiter le foreach, ou même if avec  un double point ':' et un "endforeach" ou un "endif"

foreach($tab as $indice=>$info):
   echo $indice.' = > '. $info. '<br>'; 
endforeach;

echo '<hr>';
echo '<br>';


// Autre Exemple : 

$couleur = array( "j" => "Jaune", "v"=>"Vert", "b" => "Bleu", "o" => "Orange");
echo '<pre>'; print_r($couleur) ; echo '</pre>';

// count et sizeof retourne le nombre d'éléments présents dans le tableau de donnée, il n'y a pas de différence entre les deux
echo 'Taille du Tableau (count)  : '.count ($couleur).'<br>';
echo 'Taille du Tableau (sizeof) : '.sizeof ($couleur).'<br>';

echo  implode(" - ", $couleur). '<br>'; // implode() est une fonction prédifine qui rassemble les éléments d'un tableau en une chaine (séparé par un symbole)


echo '<hr>';
echo '<br>';


// ===========================================================================================
// Tableaux Multi-Dimensionnels
// ===========================================================================================

echo '<h2> Tableaux Multi-Dimensionnels </h2>';

// On parle de Tableaux Multi-Dimensionnel quand le tableau est contenu dans un autre tableau :


$tab_multi = array(
    0 => array("prenom" => "Grégory", "nom" => "Lacroix"),
    1 => array("prenom" => "Pascal", "nom" => "Cantat")
);

echo '<pre>'; print_r($tab_multi); echo '</pre>'; 

// Exo : Tenter de sortir "Cantat" en passant par le tableau multi sans faire un echo "Cantat"

echo $tab_multi[1]["nom"]. '<br>';

echo '<hr>';

// echo $tab_multi[1][1];

// Exo : Afficher successivement les éléments du tableau avec des boucles foreach

foreach ($tab_multi as $indice => $tableau) // pour chaque tour de boucle, $tableau possède  un tableau ARRAY
{
    foreach ($tableau as $key => $value) // La 2ème boucle permet de passer en revue chaque tableau ARRAY
    {
        echo $key . ' => ' . $value . '<br>'; // On affiche sucessivement les données
    }
    echo '<hr>';
}

// ================================================================================
// ================================================================================


// ===========================================================================================
// Les Superglobales (variables internes)
// ===========================================================================================
echo '<br>';

echo '<h2> Les Superglobales (variables internes)</h2>';

echo '<br>';

// Les Superglobales sont des variables de type ARRAY qui sont prédéfinies dans le code PHP, elles sont accessibles de partout, dans l'espace local et global
// Elle s'écrivent toujours avec le signe $ suivi d'un '_' et du nom de la superglobale en majuscule
// Elles permettent de véhiculer un certain nombre de données

echo '<pre>'; print_r($_SERVER); echo '</pre>';

/*

Les variables superglobales sont :

$GLOBALS    : contient les informations liées au serveur
$_SERVER    : contient les données envoyé dans l'URL  
$_GET       : contient les données saisie dans le formulaire
$_POST      : contient les données d'un fichier uploadé
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV

*/











// https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Grid_Layout
?>
</body>