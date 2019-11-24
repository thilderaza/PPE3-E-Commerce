<?php
require_once "./Model/model.php";

class Client extends DB {

  function getSelect(){
  
    $strSQL = "SELECT * FROM client ;";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){
   
    $strSQL = "DELETE FROM client WHERE num_cli = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }  
  
  function add($tblemp){
    
    $strSQL = "INSERT INTO client (nom_cli,pnom_cli,age_cli,mail_cli,mdp_cli) VALUES (UCASE(?),UCASE(?),UCASE(?),UCASE(?),md5(UCASE(?)))";
    $tblValeur = array(
      $tblemp['prenom'],
      $tblemp['nom'],
      $tblemp['age'],
      $tblemp['email'],
      $tblemp['mdp']
    );
    $ins = $this->Requete($strSQL, $tblValeur);
    return $ins;
  }
  }
