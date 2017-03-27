<?php
/*require_once("Universite.php"               );
require_once("Personne.php"                 );
require_once("Professeur.php"               );
require_once("Etudiant.php"                 );
require_once("Livre.php"                    );
require_once("DateEmprunt.php"              );
require_once("BibliothequeUniversitaire.php");
require_once("TableauxValeurs.php"          );*/


// Fonction de génération d'une valeur aléatoire prise dans un tableau simple
// (indices numériques commençant à 0).
//
// Paramètres :
// - $tabVal : tableau depuis lequel une valeur est prise aléatoirement
//
// Retour :
// - Valeur (chaîne de caractères) aléatoire prise dans le paramètre tableau

function valTabSimpleAlea($tabVal)
{
  return $tabVal[rand(0,(count($tabVal) - 1))];
}
?>
