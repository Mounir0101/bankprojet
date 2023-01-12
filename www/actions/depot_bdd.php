<?php

require_once __DIR__ . "/../../src/init.php";

if (!isset($_POST['email'], $_POST['password'])) {
	error_die('Erreur du formulaire', '/?page=retrait_bdd');
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	error_die('Email invalide.', '/?page=retrait_bdd');
}

// Verifier si utilisateur existe en DB
$user = $userManager->getByEmail($_POST['email']);
if ($user === false) {
	error_die('Email incorrect', '/?page=retrait_bdd');
}
//verifier le numéro de compte
if (!$account->verify_Account_User($_POST['id_account'])) {
	error_die('Numéro de compte', '/?page=retrait_bdd');
}
// Verifier le mot de passe
if (!$user->verifyPassword($_POST['password'])) {
	error_die('Mot de passe incorrect', '/?page=retrait_bdd');
}

// on verra pourquoi on ne stock que l'id
$_SESSION['user_id'] = $user->id;

header('Location: /?page=retrait_bdd');