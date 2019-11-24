<?php
$titre = "E Book ";
ob_start(); 
?>
<article>
	<h1 align="center"> En cours de production !</h1>
	<div align="center"> <img src="Produits/travaux.jpg" alt="travaux" style="width:30%"> </div>
</article>
<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>