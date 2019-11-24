<?php

require_once("./Model/model.php");

class Livres extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM produit WHERE type_prod LIKE 'livre'";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){

    $strSQL = "DELETE FROM livres WHERE id_liv = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblemp){

    $strSQL = "INSERT INTO livres (titre_liv,genre_liv,auteur_liv,date_liv,format_liv) VALUES (UCASE(?), UCASE(?),UCASE(?),UCASE(?),UCASE(?), )";
    $tabValeur = array(
      $tblemp['titre'],
      $tblemp['genre'],
      $tblemp['auteur'],
      $tblemp['date'],
      $tblemp['format'],
    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;
  }
}