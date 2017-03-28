<?<?php
require_once("personne.php");
class Etudiant extends Personne
{
  private $_coefFam;
  private $_fraisIns;
  private $_ufrIns;
  private $_ville;
  private $_idEtu=0;
  private static $_nbEtu=0;
  private $_cours=array();

  public function __construct($nom,$prenom,$adresse,$age,$coefFam,$fraisIns,$ufrIns,$ville)
  {
    $this->set("nom",$nom);
    $this->set("prenom",$prenom);
    $this->set("adresse",$adresse);
    $this->set("age",$age);
    $this->_coefFam=$coefFam;
    $this->_fraisIns=$fraisIns;
    $this->_ufrIns=$ufrIns;
    $this->_ville=$ville;
    self::$_nbEtu=self::$_nbEtu+1;
    $this->_idEtu=self::$_nbEtu;
  }


  public function getCoord()
  {
    return "<b>Nom:</b> ".$this->nom.", <b>Prénom:</b> ".$this->prenom.", <b>Adresse:</b> ".$this->adresse.", <b>Age:</b> ".$this->age." ans, "." <b>Coefficient Familial:</b> ".$this->_coefFam.", <b>Frais d'nscription:</b> ".$this->_fraisIns." € </br>".", <b>UFR:</b> ".$this->_ufrIns.", <b>Ville:</b> ".$this->_ville.", <b>N° etudiant:</b> ".$this->_idEtu."<br><br>";
  }

  public function __toString()
  {
    return "<b>Nom:</b> ".$this->nom.", <b>Prénom:</b> ".$this->prenom.", <b>Adresse:</b> ".$this->adresse.", <b>Age:</b> ".$this->age." ans, "." <b>Coefficient Familial:</b> ".$this->_coefFam.", <b>Frais d'nscription:</b> ".$this->_fraisIns." €".", <b>N° etudiant:</b> ".$this->_idEtu."<br>";
  }


  static public function calculFrais($coefFam){
    // calcul des frais de scolarité d'après le quotient familial
    if (is_numeric($coefFam)){
      if($coefFam <= 12620)  return 0.00;
      if($coefFam <= 13190)  return 100.00;
      if($coefFam <= 15640)  return 125.50;
      if($coefFam <= 24740)  return 189.00;
      if($coefFam <= 31810)  return 233.25;
      if($coefFam <= 39970)  return 275.60;
      if($coefFam <= 48360)  return 432.15;
      if($coefFam <= 55790)  return 560.40;
      if($coefFam <= 92970)  return 789.60;
      if($coefFam <= 127860) return 1325.00;
      if($coefFam <= 151250) return 1698.50;
      if($coefFam <= 172040) return 2796.00;
      if($coefFam <= 195000) return 3845.90;
      else return 12589.00;
    }
    else return "erreur de coefficient familial";
  }

  public function listeCours()
    {
      for ($i=0; $i < count($this->_cours); $i++)
      {
        echo $this->_cours[$i]."<br>";
      }
    }
}
?>
