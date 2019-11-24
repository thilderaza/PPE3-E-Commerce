<?php
$titre = "Compte ";
ob_start(); 
?>
  <section id="pageContent">
    <article>
      <br><h1> Espace compte </h1>
    </article>
    <article>
     
      <form action='index.php?action=Login' method='POST'>
        <table class="table_annuaire">
          <tr> 
            <td> <label for="username">Pseudo</label></td>
            <td> <input name="user_name" id="user_name" type="text" required></td>
          </tr>
          <tr>
            <td> <label for="password">Mot de passe</label></td> 
            <td> <input name="password" id="password" type="password" required ></td> 
          </tr>
          <tr>
            <td colspan='2'> <input type='submit' name='action' value='Login'></td>
          </tr>
        </table>
      </form>
    </article>
     
  </section>

<?php 
	$contenu = ob_get_clean();
	require 'template.php';
?>