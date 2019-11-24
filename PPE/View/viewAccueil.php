<?php
$titre = "Accueil ";
ob_start(); 
?>
<article>
    <div class="center">
        <p> BIENVENUE SUR LE SITE DE L'HERMITE ! </p>
        <p> VENNEZ A LA DECOUVRIR NOS PRODUITS !</p>
    </div>
    
</article>
<article>
    <div class="row">
        <div class="column1">
            <img src="Produits/3.jpg" alt="Snow" style="width:100%">
            <p align="center"> La dernière liseuse Roobo édition blanc!</p>
            <p align="center"> Elle est equipé d'un écran permettant une meilleure vision la nuit.</p>
        </div>
        <div class="column1">
            <img src="Produits/2.jpg" alt="Forest" style="width:115%">
            <p align="center"> Le nouvel étui de Kobo est disponible !</p>
            <p align="center"> Vous pourrez le retrouver au prix de 20€</p>
        </div>
    </div>
    <article>
    <div class="center">
            <p>Vous pouvez dès à présent commander les 2 BD disponible</p>
            <p> Nombre d'exemplaire limité à 300 !</p>
        </div>
    </article>
    <div class="row">
        <div class="column2">
            <img src="Produits/7.jpg" alt="Snow" style="width:100%">
        </div>
        <div class="column2">
            <img src="Produits/9.jpg" alt="Forest" style="width:100%">
        </div>
    </div>
</article>
<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>