<?php

require_once("./Model/model.php");

class Liseuses extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM produit WHERE type_prod LIKE 'liseuses'";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }
}
?>