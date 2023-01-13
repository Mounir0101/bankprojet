<?php

$page_title = "Transactions - MonSite.com";

// ob_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaine de caracteres.
ob_start();
?>
<h1>Retrait</h1>

<form action="/actions/retrait_bdd.php" method="post">
    <div>
		<label for="id_user1">Identifiant de l'utilisateur donneur</label>
		<input type="text" id="id_user1" name="id_user1">
	</div>
    <div>
        <label for="id_account1">Numéro d'id'entification du compte</label>
        <input type="text" id="id_account1" name="id_account1">
    </div>
    <div>
		<label for="id_user2">Identifiant de l'utilisateur donneur</label>
		<input type="text" id="id_user2" name="id_user2">
	</div>
    <div>
        <label for="id_account2">Numéro d'id'entification du compte</label>
        <input type="text" id="id_account2" name="id_account2">
    </div>
	<div>
		<label for="passwordtransac">Mot de passe</label>
		<input type="password" id="passwordtransac" name="passwordtransac">
	</div>
    <div>
		<label for="Valeur_retirer">Montant de retrait</label>
		<input type="text" id="Valeur_retirer" name="Valeur_retirer">
	</div>
	<button type="submit">Envoyer demande</button>
</form>

<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();