<?php
require_once("TableauxValeurs.php");
require_once("FonctionsAleatoires.php");
class Cours
{
  private $_theme;
  private $_ufr;
  private $_etudiants;//array();
  private $_professeur;
  public function __construct($ufr,$theme,$professeur,$etudiants)
  {
    $this->_theme=$theme;
    $this->_ufr=$ufr;
    $this->_professeur=$professeur;
    $this->_etudiants=$etudiants;
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
    return " <b>UFR:</b> ".$this->_ufr.", <b>Thème:</b> ".$this->_theme.", <b>Professeur:</b> ".$this->_professeur.", </br><b>Etudiants:</b> ".$this->_etudiants." .<br>";
  }
}
?>
