<?php

require_once("./Model/model.php");

class Produits extends DB {

  function Select(){

    $strSQL = "SELECT * FROM produit ;";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){

    $strSQL = "DELETE FROM produit WHERE num_prod = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblprod){

    $strSQL = "INSERT INTO produit (num_prod,nom_prod,prix,type_prod,categ_prod,descrip_prod) VALUES (UCASE(?),UCASE(?), UCASE(?), UCASE(?), UCASE(?), UCASE(?) )";
    $tabValeur = array(
      $tblemp['num'],
      $tblemp['nom'],
      $tblemp['prix'],
      $tblemp['type'],
      $tblemp['categ'],
      $tblemp['descrip']
    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;

  }

  function setUpdate($tblemp){

    $strSQL = "UPDATE produit SET nom_prod, prix , type_prod,
               categ_prod,descrip_prod WHERE num_prod = ? ;";

    $tabValeur = array(
      'nom_prod'  => $tblemp['nom_prod'], 
      'prix'   => $tblemp['prix'], 
      'type_prod'   => $tblemp['type_prod'],
      'categ_prod'   => $tblemp['categ_prod'],
      'descrip_prod'   => $tblemp['descrip_prod'],
      'num_prod'   => $tblemp['ide'],
    );
    
    $upd = $this->Requete($strSQL, $tabValeur);
    return $upd;
  }
}
?>
