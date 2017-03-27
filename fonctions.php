<?php

function nbCP($ville_test)
{
    $nbCP=0;

    if (($ville_test=="Rezé")||($ville_test=="Saint Sébastien sur Loire")||($ville_test=="Bouguenais")||($ville_test=="Villeurbanne")||($ville_test=="Ecully")||($ville_test=="Le Bouscat")||($ville_test=="Cenon")||($ville_test=="Talence")||($ville_test=="Bègles"))
    {
        $nbCP=0;
    }
    else if ($ville_test=="Nantes")
    {
        $nbCP=3;
    }
    else if ($ville_test=="Bordeaux")
    {
      $nbCP=4;
    }
    else if ($ville_test=="Lyon")
    {
      $nbCP=8;
    }
    return $nbCP;
  }

?>
