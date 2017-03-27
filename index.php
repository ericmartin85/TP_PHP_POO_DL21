<?php
require_once("TableauxValeurs.php");
require_once("FonctionsAleatoires.php");
require_once("personne.php");
require_once("fonctions.php");
require_once("etudiant.php");
require_once("professeur.php");
require_once("cours.php");

//Génération de 10 élèves aléatoirement puis affichage
echo "</br><b>Liste des élèves</b><br><br>";
for ($i=0;$i<10;$i++)
{
  $ville_test=$tabVilles[rand(0,(count($tabVilles) - 1))];
  $cp_test=$tabVilleCP[$ville_test][rand(0,nbCP($ville_test))];

  $etudiant[$i]=new Etudiant(valTabSimpleAlea($tabNoms),valTabSimpleAlea($tabPrenoms)," ".rand(0,100)." ".valTabSimpleAlea($tabTypeVoies)." ".valTabSimpleAlea($tabNomsVoies)." ".$cp_test." ".$ville_test,rand(17,35),$coefFam=rand(5000,300000),Etudiant::calculFrais($coefFam),$tabUniversites[array_rand($tabUniversites,1)],$tabCodesVillesUFR[array_rand($tabCodesVillesUFR,1)]);

  echo $etudiant[$i];
}

//Génération de 10 professeurs aléatoirement puis affichage
echo "</br><b>Liste des Professeurs</b><br><br>";
for ($i=0;$i<10;$i++)
{
  $ville_test=$tabVilles[rand(0,(count($tabVilles) - 1))];
  $cp_test=$tabVilleCP[$ville_test][rand(0,nbCP($ville_test))];

  $professeur[$i]=new Professeur(valTabSimpleAlea($tabNoms),valTabSimpleAlea($tabPrenoms)," ".rand(0,100)." ".valTabSimpleAlea($tabTypeVoies)." ".valTabSimpleAlea($tabNomsVoies)." ".$cp_test." ".$ville_test,rand(25,62),rand(20000,45000),$tabUniversites[array_rand($tabUniversites,1)],$tabCodesVillesUFR[array_rand($tabCodesVillesUFR,1)]);

  echo $professeur[$i];
}
//Création de cours
echo "</br><b>Cours dispensés</b></br></br>";
$tabCours[1]=new Cours("DSP","Droit Général");

echo $tabCours[1];

?>
