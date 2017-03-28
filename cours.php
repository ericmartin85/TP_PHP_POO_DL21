<?php
require_once("TableauxValeurs.php");
require_once("FonctionsAleatoires.php");
class Cours
{
  private $_theme;
  private $_ufrCours;
  private $_etudiantsCours=array();//plusieurs étudiants possibles dans un cours
  private $_professeurCours;

  public function __construct($ufr,$theme)
  {
    $this->_theme=$theme;
    $this->_ufrCours=$ufr;
  }

  public function get($nom)
  {
    return $this->$nom;
  }

  public function set($nom,$val)
  {
    $this->$nom=$val;
  }

  public function __toString()
  {
    return " <b>UFR:</b> ".$this->_ufrCours.", Cours de ".$this->_theme." dispensé par le professeur : <br/>".$this->professeur."<br/>";
  }

  public function AjouterEtudiant(Etudiant $etudiantCours){ // Ajoute étudiant au cours
     $this->etudiant[]=$etudiantCours;
   }
   public function AjouterProfesseur(Professeur $professeurCours){ // ajoute prof au cours
     $this->professeur=$professeurCours;
   }

   //Affichage du cours, du professeur et des étudiants y participant
   public function AfficherCours()
   {
      echo $this->__toString();
      echo "Liste des étudiants participant à ce cours cours : <br/><br/>";
      foreach ($this->etudiant as &$value)
      {
        echo $value;
      }
   }
}
?>
