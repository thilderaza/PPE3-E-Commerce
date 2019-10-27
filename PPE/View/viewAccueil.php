<?php

ob_start(); 


?>

<article>
    <p> Bienvenue sur notre site !</p>
    <br>
</article>

<?php 

	$contenu = ob_get_clean();
	require 'template.php';
?>