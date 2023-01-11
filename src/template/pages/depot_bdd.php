<?php

$page_title = "Dêpot - MonSite.com";

// ob_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaine de caracteres.
ob_start();
?>
<h1>Dêpot</h1>

<form action="/actions/depot_bdd.php" method="post">
    <div>
		<label for="id_user">Identifiant de l'utilisateur</label>
		<input type="text" id="id_user" name="id_user">
	</div>
	<div>
		<label for="password">Mot de passe</label>
		<input type="password" id="password" name="password">
	</div>
    <div>
		<label for="Valeur_retirer">Montant du dêpot</label>
		<input type="text" id="Valeur_ajouter" name="Valeur_ajouter">
	</div>
	<button type="submit">Envoyer demande</button>
</form>

<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();