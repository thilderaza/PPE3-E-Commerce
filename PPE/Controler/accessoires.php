<?php

require_once("./Model/model.php");

class Accessoires extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM produit WHERE type_prod LIKE 'accessoire'";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }
}
?>