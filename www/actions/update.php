<?php

require_once __DIR__ . "/../../src/init.php";

if (empty($_POST['role'])) {
    error_die("Veuillez sélectionner un role", "/?page=adminPage");
}

$userManager->valideAccount($_POST['user_id'], $_POST['role']);
header("Location: /?page=adminPage");

var_dump($_POST);