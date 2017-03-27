<?php
require_once("personne.php");
class Professeur extends Personne
{
  private $_salaire;
  private $_ufr;
  private $_ville;
  private $_idProf=0;
  private static $_nbProf=0;
  //private $_cours=array(); liste des cours

  public function __construct($nom,$prenom,$adresse,$age,$salaire,$ufr,$ville)
  {
    $this->set("nom",$nom);
    $this->set("prenom",$prenom);
    $this->set("adresse",$adresse);
    $this->set("age",$age);
    $this->_salaire=$salaire;
    $this->_ufr=$ufr;
    $this->_ville=$ville;
    self::$_nbProf=self::$_nbProf+1;
    $this->_idProf=self::$_nbProf;

  }

  public function __toString()
  {
      return " <b>Nom:</b> ".$this->nom.", <b>Prénom:</b> ".$this->prenom.", <b>Adresse:</b> ".$this->adresse.", <b>Age:</b> ".$this->age." ans".", <b>Salaire:</b> ".$this->_salaire." €/an ".", <b>UFR:</b> ".$this->_ufr.", <b>Ville:</b> ".$this->_ville.", <b>N° Professeur:</b> ".$this->_idProf." .<br>";
  }

  /*public function listeCoursProf()
  {
    for ($i=0; $i < count($this->_cours); $i++)
    {
      echo $this->_cours[$i]."<br>";
    }
  }*/
}
?>
