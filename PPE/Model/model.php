<?php
// Connexion à la BASE DE DONNÉES
class DB {
  protected $cnx=null;
  protected $resultat=null;

	public function __construct() {
    $this->cnx = new PDO("mysql:host=localhost;dbname=e-livre;charset=utf8", "root", "" );
	}

  function __destruct(){
    if ($this->resultat!==null) { $this->resultat = null; }
    if ($this->cnx!==null) { $this->cnx = null; }
  }

  // Exécution de la requête préparée
  // La fonction peut être appelée plusieurs fois.
  function Requete($strSQL, $tblValeur){
    $this->resultat = $this->cnx->prepare($strSQL);
    $this->resultat->execute($tblValeur);
    return $this->resultat->fetchAll();
  }
}
?>