<style>
h2{margin: 0; background: grey; padding: 10px; text-align: center;}
</style>
<h2>Ecriture et affichage</h2><!-- nous pouvons écrire de HTML dans un fichier PHP, l'inverse n'est pas possible -->

<?php
echo 'bonjour'; // echo est une instruction d'affiche que l'on peux traduire par 'affiche moi'
// Une instruction se termine toujours par un point virgule ';'
// si l'on observe le code source, le code n'appartait pas, puisque il est traduit par l'interpreteur et renvoyé au format 100% HTML
echo '<br>'; // nous pouvons également y mettre du HTML 
echo 'Nous sommes vendredi';

echo '<h2>Commentaires</h2>';
?>

<strong>Bonjour</strong>
<?= 'ALLO!!' ?><!-- le ? remplace le echo -->
<?php echo 'ALLO!!'; ?>

<?php
echo 'texte'; // un commentaire sur une seule ligne
echo 'texte'; /* 
ceci est un commentaire sur une plusieurs ligne
*/
echo 'texte'; # ceci est un commentaire sur une seule ligne
print 'texte'; // print est une instruction d'affichage, pas de différence entre print et echo

echo '<h2>Variables : Types / déclaration / Affectation</h2>';
// Une variable est un espace nommé permettant de conserver une valeur
// une variable se déclare toujours avec le signe $
// $2a -> incorrect, $a2 -> correct, on ne peux pas placer un chiffre juste aprés le $, pas d'accent, pas d'espace

$a = 127; // Affectation de la valeur 127 dans la variable nommé "a"
echo gettype($a); // il s'agit d'un entier : INTEGER
echo '<br>';

echo $a . ' : ' . gettype($a) . '<br>';

$b = 1.5;
echo gettype($b); // un nombre à virgule : DOUBLE
echo '<br>';

$c = "une chaine"; // une chaine de caractère : STRING
echo gettype($c); 
echo '<br>';

$d = "127"; // une chaine de caractère : STRING
echo gettype($d); 
echo '<br>';

$e = true; // boolean
echo gettype($e); 
echo '<br>';

$f = false; // boolean
echo gettype($f); 
echo '<br>';

echo '<h2>Concaténation</h2>';

$x = "Bonjour ";
$y = "tout le monde!!";
echo $x . $y . '<br>'; // point de concaténation que l'on peut traduire par 'suivi de' 
echo "$x $y <br>"; // entre guillemets les variables sont évaluées
echo '$x $y <br>'; // entre simple quote c'est une chaine de caractères
echo "Hey ! " . $x . $y . '<br>'; // concaténation avec du texte et variables
echo "Hey ! " , $x , $y , '<br>'; // concaténation avecv une virgule (la virgule et le point de concaténation sont similaires)

echo '<h2>Concaténation lors de l\'affectation</h2>'; // l'antislash permet d'echapper les apostrophes dans les chaines de caractères

$prenom1 = 'Bruno ';
$prenom1 = 'Claire';
echo $prenom1 . '<br>'; // affiche 'Claire' cela remplace 'Bruno' par 'Claire'

$prenom2 = 'Nicolas ';
$prenom2 .= 'Marie';
$prenom2 .= ' GREG';
echo $prenom2 . '<br>'; // Affiche Nicolas Marie GREG, cela ajoute sans remplacer les valeurs précédentes grace à l'opérateur '.=' 

echo '<h2>Constante et constante magique</h2>';
// une constante tout comme une variable permet de conserver une valeur sauf comme son nom l'indique elle est constante!! on ne pourra pas changer sa valeur durant l'execution du script
define("CAPITALE", "Paris"); // Par convention, une constante se déclare toujours en majuscule
echo CAPITALE . '<br>'; 

// Exemple :
// define("URL", "http://www.mon-site.fr");

// echo '<nav>';
//     echo '<a href="' . URL . '/boutique.php">BOUTIQUE</a>';
// echo '</nav>';

// define("CAPITALE", "Rome"); // /!\ erreur !!  il n'est pas possible de redéfinir une constante durant l'execution du script

// constante magique
echo __FILE__ . '<br>'; // chemin complet vers le fichier
echo __LINE__ . '<br>'; // affiche le numéro de la ligne
// il en existe d'autre __FUNCTION__ , __CLASS__ , __METHODS__

echo '<h2>Exercice variable</h2>';
//Exercice : Afficher vert-jaune-rouge (avec les tirets) en mettant chaque couleur dans une variable
$vert = 'vert';
$jaune = 'jaune';
$rouge = 'rouge';

echo $vert . '-' . $jaune . '-' . $rouge . '<br>';
echo "$vert-$jaune-$rouge<br>";

$couleur = 'vert-';
$couleur .= 'jaune-';
$couleur .= 'rouge<br>';

echo $couleur;

echo '<h2>Opérateurs aritmétiques</h2>';
$a = 10; $b = 2;
echo $a + $b . '<br>'; // affiche 12
echo $a - $b . '<br>'; // affiche 8 
echo $a * $b . '<br>'; // affiche 20
echo $a / $b . '<br><hr>'; // affiche 5

// opération/affectation
$a = 10; $b = 2;

$a += $b; // equivaut à $a = $a + $b , affiche 12
echo $a . '<br>';
$a -= $b; // equivaut à $a = $a - $b , affiche 10 
echo $a . '<br>';
$a *= $b; // equivaut à $a = $a * $b , affiche 20
echo $a . '<br>';
$a /= $b; // equivaut à $a = $a / $b , affiche 10
echo $a . '<br>';

echo '<h2>Structure conditionnelles (if/else) - opérateur de comparaison</h2>';

// Isset & empty
$var1 = 0;
$var2 = '';

// empty permet de tester une variable, si a 0, FALSE, vide ou non définie
// isset test l'existence d'une variable si elle est différente de NULL
// si la condition est vérifiée, c'est le code entre les accolades qui sera executée
if(empty($var1))
{
    echo '0, vide ou non définie<br>';
}

if(isset($var2))
{
    echo 'var2 existe et est définie par rien<br>';
}

//----------------------------------------------------------
$a = 10; $b = 5; $c = 2;
if($a > $b) // si A est supérieur à B
{
    echo 'A est bien supérieur à B<br>';
}
else // Sinon... cas par défaut, dans tout les autre cas
{
    echo 'Non c\'est B qui est supérieur à A<br>';
}

//-----------------------------------------------------------
/*
OPERATEUR DE COMPARAISON 
=     affecation
==    comparaison de la valeur
===   comparaison de la valeur et du type
<     strictement inférieur
>     strictement supérieur
<=    inférieur ou égal à
>=    supérieur ou égal à
!     n'est pas
!=    différent de
OR || OU
XOR   ou exclusif
AND && ET               
*/
$a = 10; $b = 5; $c = 2;

if($a == 10)
{
    echo '1 - A est égal à 10<br>';
}
elseif($b == 5)
{
    echo '2 - B est égal à 5<br>';
}
else
{
    echo '3 - tout le monde a faux<br>';
}

// Grace au ELSEIF, si la conditions est respectée, toute les autres conditions ne seront pas évaluées

//-------------------------------------------------
if($a == 10 XOR $b == 6)
{
    echo 'ok condition exclusive<br>'; // si les 2 conditions sont bonnes ou mauvaise, on ne rentre pas ici
}

//-------------------------------------------------
// Forme contractée : 2ème possibilité d'écriture des if
echo ($a == 10) ? "a est égal à 10<br>" : "a n'est pas égal à 10";
// le ? remplace le IF 

//-------------------------------------------------
// comparaison
$vara = 1;
$varb = '1';
if($vara === $varb)
{
    echo 'il s\'agit de la même chose';
}

// avec le double égal == le test fonctionne puisque la valeur est la même
// avec le triple égal === , le test ne fonctionne pas puisque la valeur est la même mais le type est différent
// == comparaison de la valeur
// === comparaison de la valeur et du type

echo '<h2>Condition Switch</h2>';
// les 'case' représente les cas différents dans lesquel nous pouvons potentiellement tomber

$couleur = 'jaune';

switch($couleur)
{
    case 'bleu':
    echo 'Vous aimez le bleu';
    break; // permet de stopper le script si nous entrons dans un des cas

    case 'vert':
    echo 'Vous aimez le vert';
    break;

    case 'rouge':
    echo 'Vous aimez le rouge';
    break;

    default: // cas par défaut, si on ne rentre pas dans les cas précédent
    echo 'Vous n\'aimez rien <br>';
}

// Exo : Pouvez vous faire la même chose que le switch avec des if/else ? Si oui, faites le.
$couleur = 'jaune';

if($couleur == 'bleu')
    echo 'Vous aimez le bleu';
elseif($couleur == 'vert')
    echo 'Vous aimez le vert';
elseif($couleur == 'rouge')
    echo 'Vous aimez le rouge';
else
    echo 'Vous n\'aimez rien <br>';
    
// si dans la condition IF, il n'y a qu'une seule instruction d'affichage, les accolades ne sont pas nécessaire

echo '<h2>Fonctions prédéfinies</h2>';

// Une fonction prédéfinie permet de réaliser un traitement spécifique, il en existe une liste assez consequente

echo 'Date : ' . date("d/m/Y") . '<br>';
// lorsqu'on utilise une fonction prédéfinie, il faut toujours se poser la question de savoir quels arguments on doit lui envoyer et surtout savoir ce qu'elle retourne, il est important de consulter la documentation www.php.net

echo '<h2>Fonctions prédéfinies : Traitement de chaines (iconv_strlen, strpos, substr) </h2>';

$email1 = 'glx78@free.fr';
echo strpos($email1, '@') . '<br>'; // indique la position 5 du caractère '@' dans la chaine (5 et non pas 6 car cela commence à 0).

// strpos() est une fonction prédéfinie qui retourne la position d'un caractère dans un chaine de caractères
// Contexte : nous pourrions l'utiliser pour savoir si une adresse email a un format conforme.

$email2 = 'bonjour';
echo strpos($email2, '@') . '<br>'; // cette ligne ne sort rien, pouratnt il y a bien quelque chose à l'intérieur : FALSE !
var_dump(strpos($email2, '@')) . '<br>'; // Grace au var_dump() on aperçoit le FALSE si le caractère @ n'est pas trouvé. var_dump est donc une instruction d'affichage améliorée que l'on utilise souvent en phase de développement
print_r(strpos($email2, '@')); // print_r est une autre instruction d'affichage améliorée, qui retourne moins d'informations
echo '<br>';
//--------------------------------------------------------------------
$phrase = "Nous sommes mardi et il j'ai faim!!";
echo iconv_strlen($phrase) . '<br>'; 
// il existe aussi la fonction strlen() qui calcul la taille d'une chaine en octet
var_dump(iconv_strlen($phrase)) . '<br>';
// iconv_strlen() est une fonction prédéfinie qui retourne la taille d'une chaine de caractères
// succés : INT
// echec : boolean FALSE
// Contexte : nous pourrons l'utiliser pour savoir si le pseudo et le mdp lors d'une sinscription ont des tailles conforme
echo '<br>';
//---------------------------------------------------------------------
$texte = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit lacinia est at tincidunt. Donec non massa velit. Duis accumsan dolor lacus, a maximus turpis bibendum aliquet. Donec scelerisque dignissim massa, ut sollicitudin nisl vestibulum vel. Curabitur aliquet dictum mi, efficitur dictum ipsum lacinia eget. ';

echo substr($texte, 0, 20) . " <a href='#'>...lire la suite</a><br>";

/* substr() est une fonction prédéfinie perettant de retourner une partie de la chaine
- Succés : string
- Echec : boolean FALSE
Arguments : 
1. la chaine que l'on souhaite couper
2. la position de début
3. la postion de fin, le nombre de caractères souhaités

Contexte : substr est souvent utilisé pour afficher des actualités avec une "accroche" . 
*/

echo '<h2>Fonctions utilisateur </h2>';
// les fonctions utilisateur ne sont pas prédéfinies dans le langage , elles sont déclarées puis executé par l'utilisateur
// Une fonction se déclarare toujours avec le mot clé 'function' suivi du nom de la fonction que nous définissons : pas d'accent, pas d'espace.

function separation() // décalration d'une fonction prévu pour ne pas recevoir d'arguments
{
    echo '<hr><hr><hr>'; 
}

separation(); // execution de la fonction

//--------------------------------------------------------------------
// fonction avec arguments : 
// on peut définir une valeur par défaut aux variables de réception
function bonjour($qui = 'Jean-christophe') // $ui ne sort pas de null part? Cela permet de recevoir un argument, il s'agit d'une variable de réception
{
    return "Bonjour $qui <br>"; // return retourne le résultat de la fonction
}

$prenom = 'Maxime';

echo bonjour('Greg'); // Si la fonction reçoit un argument, il faut lui envoyer un argument
echo bonjour($prenom); // Quand il y a un "return" dans la fonction, il faut faire un 'echo' avant, l'argument peut être une variable
echo bonjour(); // Si l'argument a une valeur par défaut, il n'est pas nécessaire d'en envoyer à l'execution
echo bonjour('Julien'); // on ecrase la valeur par défaut de la variable de réception $qui

//---------------------------------------------------------------------
function appliqueTva($nombre)
{
    return $nombre*1.2; // 1.2 est le coefficient du taux de TVA de 20%
}

echo "500 euros avec TVA de 20% : " . appliqueTva(500) . '<br>';

// Exo : Pourriez vous améliorer cette fonction afin que l'on puisse calculé un nombre avec les taux de notre choix ? si oui, faites le.

function appliqueTva2($nombre, $taux = 20)
{
    return $nombre*(1+$taux/100); 
}

echo "500 euros avec TVA de 19.6% : " . appliqueTva2(500,19.6) . '<br>';
echo "500 euros avec TVA de 5.5% : " . appliqueTva2(500,5.5) . '<br>';
echo "500 euros avec TVA de 7% : " . appliqueTva2(500,7) . '<br>';
echo "500 euros avec TVA de 20% : " . appliqueTva2(500) . '<br>';
// /!\ une fonction ne peut pas être déclarée 2 fois avec le même nom !

//-------------------------------------------------------------------
meteo('printemps', 19); // il est possible d'executer une fonction avant de l'avoir déclarée
function meteo($saison, $temperature)
{
    echo "Nous sommes au $saison et il fait $temperature degre(s) <br>";
}

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
echo '<hr>';
//-------------------------------------------------------------------
// Lorqu'on travail à l'intérieur d'une fonction, on se trouve dans l'espace local, tout le reste, c'est à dire en dehors d'une fonction s'appel l'espace global (espace par défaut)
function jourSemaine()
{
    $jour = 'mardi'; // variable déclarée en local
    return $jour; // une fonction peut retournée quelque chose, on retourne le résultat de la fonction (à ce moment là on quitte la fonction)
    echo 'ALLO!!'; // cette ligne ne sortira pas car il y a un return avant
}

echo jourSemaine() . '<br>'; // execution de la fonction

echo $jour; // /!\ génère une erreur, ne fonctionne pas car cette variable n'est connu qu'à l'intérieur de la fonction 

$recup = jourSemaine(); // on récupère 
echo $recup . '<br>'; // on affiche

//-----------------------------------------------------------------
$pays = 'France'; // variable déclarée dans l'espace global

function affichagePays()
{
    global $pays; // le echo qui suit ne fonctionnerait pas si nous n'avions pas mis le mot-clé 'global' pour importer tout ce qui est déclaré de l'espace global dans l'espace local
    echo $pays;
}

affichagePays();
echo '<br>';
//-----------------------------------------------------------------
// /!\ php 7 - on précise en amont le type obligatoire des valeurs entrantes dans les arguments
function identite(string $nom, int $age)
{
    return $nom . ' a ' . $age . ' ans<br>'; 
}

echo identite('Lacroix', 25);

echo '<h2>Structure itérative : boucles</h2>';

// Boucle WHILE
$i = 0;
       
while($i < 3)
{      
    echo "$i---";
    $i++; // incrémentation, equivaut à $i = $i + 1
}
// affiche : 0---1---2---
echo '<br>';
// Exo : faites en sorte de ne pas avoir les tirets à la fin : 0---1---2
$i = 0;

while($i < 3)
{
    if($i == 2) // on ne rentre qu'une seule fois ici
    {
        echo $i;
    }
    else
    {
        echo "$i---";
    }
    $i++;
}
echo '<br>';
//-----------------------------------------------------------------------
// Boucle FOR
for($i = 0; $i < 16; $i++) // valeur de départ ; condition d'entrée; sens (incrémentation)
{
    echo $i . '<br>'; 
}

// Exo : afficher 30 options via une boucle
echo '<select>';
    echo '<option>1</option>';
    echo '<option>2</option>';
    echo '<option>3</option>';
echo '<select><br>';

echo '<select>';
for($i = 1; $i <= 30; $i++)
{
    echo "<option>$i</option>";
    //echo '<option>' . $i . '</option>';
}
echo '<select><br>';

//---------------------------------------------------------------------
// Exo : faites une boucle qui affiche de 0 à 9 sur la même ligne (soit 10 tours) dans un tableau HTML

echo '<table>'; // déclaration du tableau
    echo '<tr>'; // déclaration d'une ligne
        echo '<td></td>'; // déclaration d'une cellule
    echo '</tr>';
echo '</table>';

//----------------------------------------------------------
echo '<table border=1><tr>';
for($i = 0; $i <= 9; $i++)
{
    echo "<td>$i</td>";
}
echo '</tr></table><br>';

//-----------------------------------------------------------
// Exo : faire la même chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles (indice : boucle imbriquée)
$z = 0;

echo '<table border=1>';
for($ligne = 0; $ligne < 10; $ligne++) 
{
    echo '<tr>';
    for($cellule = 0; $cellule < 10; $cellule++) // tant que ligen est à zéro, celleule s'incrémente 10 fois, ligne est à 1, cellule s'incrémente 10 fois
    {
        // echo "<td>$z</td>"; // compteur qui s'écremente à chaque tour de boucle et ne revient à zéro
        // $z++;

        echo "<td>" . (10 * $ligne + $cellule) . "</td>";
    }
    echo '</tr>';
}
echo '</table>';
// un tour de boucle for() entraine 10 tours de la 2ème

echo '<h2>Tableau de données ARRAY</h2>';
// un tableau est déclarée un peu à la manière d'une variable améliorée, car on ne conserve pas une valeur mais un ensemble de valeur

$liste = array("Grégory","maxime","julien","Jean-Christophe");

echo $liste . '<br>'; // /!\ attention erreur, il est impossible d'afficher un tableau ARRAY avec une instruction d'affichage

// les instructions d'affichage améliorée permettent de debuger et de contrôler les données, ce n'est pas un affichage conventionnel, l'internaute n'est pas censé voir le rendu du print_r ou var_dump
echo '<pre>';var_dump($liste); echo '</pre>';

echo '<pre>';print_r($liste); echo '</pre>'; // la balise <pre> permet de formater le texte, cela nous permet de mettre en forme la sortie du print_r ou var_dump

echo '<h2>Boucle FOREACH pour les tableaux de données ARRAY</h2>';

$tab[] = "France"; // autre moyen de créer et d'affecter une valeur à un tableau ARRAY, Nous ne mettons pas le mot ARRAY mais les crochets [] qui permettent de générer des indices numériques
$tab[] = "Bresil";
$tab[] = "Espagne";
$tab[] = "Argentine";
$tab[] = "Portugal";
echo '<pre>';print_r($tab); echo '</pre>';

// Exo : tenter de sortir "Argentine" en passant par le tableau ARRAY sans faire un 'echo Argentine'
echo $tab[3] . '<hr>';

// foreach est un moyen simple de passer en revue un tableau. Foreach fonctionne uniquement avec les tableaux et les objets.

// 1er argument : le tableau a prcourir
foreach($tab as $info) // le mot AS fait partie du langage et est obligatoire. $info est une variable de réception qui vient parcourir la colonne des valeurs du tableau de données ARRAY
{
    echo $info . '<br>';
}

echo '<hr>';

foreach($tab as $indice => $info) // quand il y a 2 variables, la 1ère parcours la colonne des indices et la seconde la colonne des valeurs
{
    echo $indice . ' => ' . $info . '<br>'; // on affiche successivement les éléments du tableau
}

echo '<hr>';

// il est possible de délimiter foreach, ou même if avec un double point ':' et "endforeach" ou "endif"
foreach($tab as $indice => $info):
    echo $indice . ' => ' . $info . '<br>';
endforeach;

// nous pouvons définr les indices : 
$couleur = array("j" => "jaune", "v" => "vert", "b" => "bleu", "o" => "orange");
echo '<pre>';print_r($couleur); echo '</pre>';

// count et sizeof retourne le nombre d'élément présent dans le tableau de donnée, il n'y a pas de différence entre les deux
echo 'Taille du tableau : ' . count($couleur) . '<br>';
echo 'Taille du tableau : ' . sizeof($couleur) . '<br>';

echo implode(" - ", $couleur) . '<br>'; // implode() est une fonction prédéfinie qui rassemble les éléments d'un tableau en une chaine (séparé par un symbole)

echo '<h2>Tableau mutlidimensionnel</h2>';
// on parle de tableau multidimensionnel quand un tableau est contenu dans un autre tableau
$tab_multi = array(
    0 => array("prenom" => "Grégory", "nom" => "Lacroix"),
    1 => array("prenom" => "Emmanuel", "nom" => "Macron")
);

echo '<pre>'; print_r($tab_multi); echo '</pre>'; 

// Exo : tenter de sortir "macron" en passant par le tableau multi sans faire de 'echo Macron'
echo $tab_multi[1]["nom"] . '<hr>';

// Exo : afficher successivement les éléments du tableau avec des boucles foreach
foreach($tab_multi as $indice => $tableau) // pour chaque tour de boucle, $tableau possède un tableau ARRAY
{
    foreach($tableau as $key => $value) // la 2ème boucle permet de passer en revue chaque tableau ARRAY
    {
        echo $key . ' => ' . $value . '<br>'; // on affiche successivement les données
    }
    echo '<hr>';
}

echo '<h2>Les superglobales</h2>';
// Les superglobales sont des variables de types ARRAY qui sont prédéfinies dans le code PHP, elles sont accesibles de partout, dans l'espace local et global
// Elle s'ecrivent toujours avec le sign $ suivi d'un '_' et du nom de la superglobale en majuscule
// Elles permettent de vehivler un certain nombre de donéées

echo '<pre>'; print_r($_SERVER); echo '</pre>';

/*
$_SERVER : contient les informations liés au serveur
$_GET : contient les données envoyé dans l'URL
$_POST : contient les données saisie d'un formulaire
$_FILES : contient les données d'un fichier uploader
$_COOKIE 
$_SESSION
*/






                    























































































































































