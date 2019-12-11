<?php
$titre = "Livres ";
ob_start(); 
?>

<section id="pageContent2">
        <table>
           <tr>
				<th>Nom</th>
				<th>Prix</th>
				<th>Type de produit</th>
				<th>Categorie</th>
				<th>Description</th>
				<th>Produit</th>
			</tr>
		  <?php
        echo "<tbody>";
          	$tblLivre = (empty($tblLivre) ? $tblLivre=array() : $tblLivre);
          
			foreach ($tblLivre as $produit) {
				echo "<tr>";
				echo "<td>" .$produit['nom_prod'] ."</td>";
				echo "<td>" .$produit['prix'] ."</td>";
				echo "<td>" .$produit['type_prod'] ."</td>";
				echo "<td>" .$produit['categ_prod']. "</td>";
				echo "<td>" .$produit['descrip_prod']. "</td>";             
				echo "<td>" .$produit['img_prod']. "</td>";
				echo "</tr>";
			}
        echo "</tbody>";
        ?>  
	  	</table>
</section>

<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>
