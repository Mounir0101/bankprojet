<?php

require_once __DIR__ . "/../../src/init.php";

if (!isset($_POST['password'])) {
	error_die('Erreur du formulaire', '/?page=depot_bdd');
}

// Verifier le mot de passe
if (!$user->verifyPassword($_POST['password'])) {
	error_die('Mot de passe incorrect', '/?page=depot_bdd');
}

// on verra pourquoi on ne stock que l'id
$_SESSION['user_id'] = $user->id;

header('Location: /?page=home');

//on regarde si