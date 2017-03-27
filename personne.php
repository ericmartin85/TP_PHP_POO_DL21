<?php
class Personne
{
  protected $nom;
  protected $prenom;
  protected $adresse;
  protected $age;

  public function __construct($nom,$prenom,$adresse,$age)
  {
    $this->set("nom",$nom);
    $this->set("prenom",$prenom);
    $this->set("adresse",$adresse);
    $this->set("age",$age);
  }

  public function get($nom)
  {
    return $this->$nom;
  }

  public function set($nom,$val)
  {
    $this->$nom=$val;
  }
}
?>
