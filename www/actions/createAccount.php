<?php

require_once __DIR__ . "/../../src/init.php";

if (empty($_POST['createAccount'])) {
    error_die("Vérifier les champs", "/?page=accountPage");
}

$userManager->createAccount($_POST['user_id'], $_POST['currency'], $_POST['amount']);
header("Location: /?page=accountPage");

var_dump($_POST);