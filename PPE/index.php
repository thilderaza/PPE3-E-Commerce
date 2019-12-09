<?php      
 require "./Controler/controler.php";
  
  try {
    if (isset($_GET['action'])) 
    {
      require "./Controler/produits.php";
        $produit = new Produits();
      if ($_REQUEST['action'] == 'Supprimer') {
        
        $produit->setDelete(intval($_POST['ide']));
      } 

      if ($_REQUEST['action'] == 'Ajouter') {
        $produit->setAdd($_POST);
      } 

      if ($_REQUEST['action'] == 'Modifier') {
        $_POST['ide']=intval($_POST['ide']);
        $produit->setUpdate($_POST);
      } 

      /* Page d'accueil */
      if ($_GET['action'] == 'Accueil') {
        accueil() ; 
        exit;
      }
      /* Revoie à la page d'inscription */
      if ($_GET['action'] == 'inscription') {
        inscription();
        exit;
      }
      /* Inscription */
      if ($_GET['action'] == 'add') {
        require_once "./Controler/client.php";
        $client = new Client();
        $client->add($_POST);
        include "./view/viewInscription.php";
      }  
      /* Connexion */
      if ($_GET['action'] == 'Admin') {
        session_start();
        if(!empty($_SESSION["userId"])) {
          require_once "./Controler/controler.php";
          require_once "./Controler/produits.php";
          $produit = new Produits();
          $tblProd = $produit->Select();
          include "./view/viewCompte.php";
          exit();
        }
        else {
          include "./view/viewConnexion.php";
          exit();
        }
      }  
      /* Déconnexion */
      if ($_GET['action'] == 'deconnexion') {
        session_start();
        unset($_SESSION);
        session_destroy();
        include "./view/viewConnexion.php";  
      }
      /* L'identification */
      if ($_GET['action'] == 'Login') {
        session_start();
        if(empty($_SESSION["userId"])) {
          if (!empty($_POST["user_name"]) OR !empty($_POST["password"])) {
            $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
            require_once "./Controler/membre.php";
            $membre = new Membre();
            $estConnecte= $membre->verifLogin($username, $password);
          }

          if (!$estConnecte or empty($estConnecte)) {
              $_SESSION["erreurMessage"] = "Les informations d'identification sont invalides";      
              include "./view/viewConnexion.php";  
              echo "Informations incorrectes";
              exit();
          }         
        }   
        require_once "./Controler/controler.php";
        require_once "./Controler/produits.php";
        $produit = new Produits();
        $tblProd = $produit->Select();
        include "./view/viewCompte.php";
        exit();
      }   
      /* Page pour les livres */
      if ($_GET['action'] == 'livre') {
        require_once "./Controler/livres.php";
        require_once "./Controler/controler.php";
        $produit = new Livres();
        $tblLivre = $produit->getSelect();
        include "./view/viewLivres.php";
        exit;
      }
      /* Page pour les e-book */
      if ($_GET['action'] == 'ebook') {
        ebook() ; // Ebook présent sur le site
        exit;
      }
      /* Page pour les liseuses */
      if ($_GET['action'] == 'liseuses') {
        require_once "./Controler/liseuses.php";
        require_once "./Controler/controler.php";
        $liseuses = new Liseuses();
        $tblLiseuses = $liseuses->getSelect();
        include "./view/viewLiseuses.php";
        exit;
      }
      /* Page pour les accessoires */
      if ($_GET['action'] == 'accessoire') {
        require_once "./Controler/accessoires.php";
        require_once "./Controler/controler.php";
        $accessoire = new Accessoires();
        $tblAccessoires = $accessoire->getSelect();
        include "./view/viewAccessoires.php";
        exit;
      }
      if ($_GET['action'] == 'produit') {
        require_once "./Controler/produits.php";
        require_once "./Controler/controler.php";
        $produit = new Produits();
        $tblProd = $produit->Select();
        include "./view/viewCompte.php";
        exit;
      }
      if ($_GET['action'] == 'client') {
        require_once "./Controler/client.php";
        require_once "./Controler/controler.php";
        $client = new Client();
        $tblCli = $Cli->getSelect();
        include "./view/viewCompte.php";
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
