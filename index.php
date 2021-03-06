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
  $ville_test=$tabVilles[rand(0,(count($tabVilles) - 1))];//récupération d'une ville au hasard
  $cp_test=$tabVilleCP[$ville_test][rand(0,nbCP($ville_test))];//récupération d'un code postal au hasard en fonction de la ville choisie
  $etudiant[$i]=new Etudiant(valTabSimpleAlea($tabNoms),valTabSimpleAlea($tabPrenoms)," ".rand(0,100)." ".valTabSimpleAlea($tabTypeVoies)." ".valTabSimpleAlea($tabNomsVoies)." ".$cp_test." ".$ville_test,rand(17,35),$coefFam=rand(5000,300000),Etudiant::calculFrais($coefFam),$tabUniversites[array_rand($tabUniversites,1)],$tabCodesVillesUFR[array_rand($tabCodesVillesUFR,1)]);
  echo $etudiant[$i]->getCoord();
}
//Génération de 10 professeurs aléatoirement puis affichage
echo "</br><b>Liste des Professeurs</b><br><br>";
for ($j=0;$j<10;$j++)
{
  $ville_test=$tabVilles[rand(0,(count($tabVilles) - 1))];//récupération d'une ville au hasard
  $cp_test=$tabVilleCP[$ville_test][rand(0,nbCP($ville_test))];//récupération d'un code postal au hasard en fonction de la ville choisie
  $professeur[$j]=new Professeur(valTabSimpleAlea($tabNoms),valTabSimpleAlea($tabPrenoms)," ".rand(0,100)." ".valTabSimpleAlea($tabTypeVoies)." ".valTabSimpleAlea($tabNomsVoies)." ".$cp_test." ".$ville_test,rand(25,62),rand(20000,45000),$tabUniversites[array_rand($tabUniversites,1)],$tabCodesVillesUFR[array_rand($tabCodesVillesUFR,1)]);
  echo $professeur[$j]->getCoord();
}


//Création de cours
echo "<br><br><b>Exemple de cours</b><br><br>";
//Instanciation Cours
$a=array_rand($tabUniversites,1);
$ufrHasard=$tabUniversites[$a];
$cours1= new Cours ($ufrHasard,$tabCoursUFR[$a][rand(0,4)]);

//Associer Professeur à un cours
$cours1->AjouterProfesseur($professeur[1]);
//Associer des étudiants à un cours
$nbEtud=rand(1,10);
for ($i=0;$i<$nbEtud;$i++)
{
  $cours1->AjouterEtudiant($etudiant[$i]);
}
//Afficher la liste des étudiants inscrits à un cours
$cours1->AfficherCours();
?>
