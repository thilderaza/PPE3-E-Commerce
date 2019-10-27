<?php      
  require('./controleur/Controleur.php');
  
  try {
    if (isset($_GET['action'])) 
    {
      if ($_GET['action'] == 'Accueil') {
        accueil() ; // Acceuil du site
        exit;
      }
    }
    else {
      accueil();  // action par défaut
    }
  }
  catch (Exception $e) {
      erreur($e->getMessage());
  }  
?>