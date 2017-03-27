<?php
class Cours
{
  private $_theme;
  private $_ufr;
  private $_idEtu=array();
  private $_professeur;

  public function __construct($ufr, $theme)
  {
    $this->_theme= $theme;
    $this->_ufr= $ufr;
  }

  public function __toString()
  {
    return $this->__get("_ufr")." ".$this->__get("_theme");
  }

//afficher les paticipants au cours (étudiants et professeur)
  public function afficherParticipants()
  {
    if (!empty($this->_professeur) || !empty($this->_idEtu))
    {
      echo "<b>Prof: </b>".$this->_professeur."<br><br><b>Eleves: </b>";

      for ($i=0; $i < count($this->_idEtu); $i++)
      {
        echo $this->_idEtu[$i]->__get("_prenom")." ";
        echo $this->_idEtu[$i]->__get("_nom")."<br><br>";
      }
    }

  }
  public function __get($nom)
  {
     return $this->$nom;
  }
  public function __set($nom, $value)
  {
    $this->$nom=$value;
  }
}
?>
