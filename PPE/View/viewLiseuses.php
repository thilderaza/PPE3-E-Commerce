<?php
$titre = "Liseuses ";
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
				$tblLiseuses = (empty($tblLiseuses) ? $tblLiseuses=array() : $tblLiseuses);
				
				foreach ($tblLiseuses as $liseuses) {
					echo "<tr>";
					echo "<td>" .$liseuses['nom_prod'] ."</td>";
					echo "<td>" .$liseuses['prix'] ."</td>";
					echo "<td>" .$liseuses['type_prod'] ."</td>";
					echo "<td>" .$liseuses['descrip_prod']. "</td>";             
					echo "<td>" .$liseuses['img_prod']. "</td>";
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
