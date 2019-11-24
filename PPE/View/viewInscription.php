<?php
$titre = "Inscription ";
ob_start(); 
?>
<article class="form">
<h1>Remplissez le formulaire</h1>
        <form action="index.php?action=add" method="post">
          <input type="text" name="prenom" id="prenom" placeholder="Prénom"> <br><br>
          <input type="text" name="nom" id="nom" placeholder="Nom"><br><br>
          <input type="text" name="age" id="age" placeholder="Age"> <br><br>
          <input type="text" name="email" id="email" placeholder="Email"> <br><br>
          <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"> <br><br>        
          <input type="text" name="tel" id="tel" placeholder="Télephone"> <br><br>
          <input type="submit" name="submit" value="Ajouter">
          <br><br>
          <br><br>
        </form>
</article>
<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>
