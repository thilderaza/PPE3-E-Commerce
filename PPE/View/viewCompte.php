

<?php
if (!empty($_SESSION["userId"])) {
    require_once "./controler/membre.php";
    $membre = new Membre();
    $membreResultat = $membre->getMemberById($_SESSION["userId"]);
    if(!empty($membreResultat[0]["nom_mbr"])) {
        $afficherNom = ucwords($membreResultat[0]["nom_mbr"]);
    } else {
        $afficherNom = $membreResultat[0]["nom_mbr"];
    }
}

?>
<?php
$titre = "Compte ";
ob_start(); 
?>
<h1> Liste des produits </h1>
<section id="pageContent">
        <table>
           <tr>
                <th> # </th>
				<th>Nom</th>
				<th>Prix</th>
				<th>Type de produit</th>
				<th>Categorie</th>
				<th>Description</th>
				<th> Suppression</th>
				<th> Modification</th>
			</tr>
		  <?php		
		echo "<tbody>";
          $tblProd = (empty($tblProd) ? $tblProd=array() : $tblProd);
          foreach ($tblProd as $produit) {
            echo "<form action='index.php?action=produit' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='text' name='num_prod' id='num_prod' value=".$produit['num_prod']."></td>" 
                ."<td>"."<input type='text' name='nom_prod' id='nom_prod' value=".$produit['nom_prod']."></td>" 
                ."<td>"."<input type='text' name='prix' id='prix' value='".$produit['prix'] . "'></td>" 
                ."<td>"."<input type='text' name='type_prod' id='type_prod' value='".$produit['type_prod'] . "'></td>" 
                ."<td>"."<input type='text' name='categ_prod' id='categ_prod' maxlength='10' value='".$produit['categ_prod'] . "'></td>"
                ."<td>"."<input type='text' name='descrip_prod' id='descrip_prod' value='".$produit['descrip_prod'] . "'></td>" 
                ."<td>"."<input type='submit' name='action' value='Supprimer'></td>"
                ."<td>"."<input type='submit' name='action' value='Modifier'></td>".
            "</tr>";
            echo "</form>";
          }
        echo "</tbody>";
        ?>
	  	</table>
</section>

<article>
        <h1>Ajouter un produit</h1>
        <form action="index.php?action=Ajouter" method="post">
          <input type="text" name="nom_prod" id="nom_prod" placeholder="Nom du produit"> <br><br>
          <input type="numeric" name="prix" id="prix" placeholder="Prix du produit"><br><br>
          <input type="text" name="type_prod" id="type_prod" placeholder="Type du produit"> <br><br>
          <input type="text" name="categ_prod" id="categ_prod" placeholder="Catégorie produit"> <br><br>
          <input type="text" name="descrip_prod" id="descrip_prod" placeholder="Description produit"> <br><br>
          <input type="submit" name="action" value="Ajouter">
          <br><br>
          <br><br>
        </form>
</article>


<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>
