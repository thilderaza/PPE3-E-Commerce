<?php
$titre = "Accessoires ";
ob_start(); 
?>
<article>
	<section id="pageContent2">

			<table>
			<tr>
					<th>Nom</th>
					<th>Prix</th>
					<th>Type de produit</th>
					<th>Description</th>
					<th>Produit</th>
				</tr>
			<?php
			echo "<tbody>";
			$tblAccessoires = (empty($tblAccessoires) ? $tblAccessoires=array() : $tblAccessoires);
			
			foreach ($tblAccessoires as $accessoire) {
				echo "<tr>";
				echo "<td>" .$accessoire['nom_prod'] ."</td>";
				echo "<td>" .$accessoire['prix'] ."</td>";
				echo "<td>" .$accessoire['type_prod'] ."</td>";
				echo "<td>" .$accessoire['descrip_prod']. "</td>";             
				echo "<td>" .$accessoire['img_prod']. "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			?>  
			</table>
	</section>
</article>
<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>

