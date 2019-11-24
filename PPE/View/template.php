<!Doctype html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title ><?= $titre ?></title>
		<link rel="stylesheet" href="style.css">
        
        <div id="fond"> 
            <div class="ruban">     
                <h2> La tanière de l'Hermite !</h2>     
            </div>     
            <div class="ruban_gauche"></div>
            <div class="ruban_droit"></div>
        </div>
        <div>
				<nav class= "topnav">  
					<ul>
						<a class="active" href="index.php?action=Accueil">Accueil</a>
						<a href="index.php?action=livre">Livres</a>
						<a href="index.php?action=liseuses">Liseuses</a>
						<a href="index.php?action=ebook">E-Book</a>
						<a href="index.php?action=accessoire">Accessoires</a>
							<div class="subnav">
								<a class="subnavbtn">Compte</a>
								<div class="subnav-content">
								<a href="index.php?action=inscription">Inscription</a>
								<a href="index.php?action=Admin">Connexion</a>
								<a href="index.php?action=deconnexion">Déconnexion</a>
								</div>
							</div>		
                        <input type="text" placeholder="Search..">
					</ul>
				</nav>
			</div>
	</head>

	<body >
    <section>
			<div>				
			<h1><strong><?= $titre ?></strong></h1> 
			</div>
		</section>
		<section id="pageContent">
        	<?= $contenu ?>  <!-- Élément spécifique -->
    	</section>
	</body>
	
    <footer >
		<div class="footer">
			<p> BTS SIO | Lycée Pierre Poivre | Projet étudiant</p>
			<p> </p>
		</div>
	</footer>

</html>
