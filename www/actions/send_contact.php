<?php

require_once __DIR__ . "/../../src/init.php";

if (!isset($_POST['fullname'], $_POST['phone'], $_POST['email'], $_POST['message'])){
    error_die('Formulaire invalide', '/?page=contact');
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    error_die('Email invalide', '/?page=contact');
}

if(empty($_POST['fullname'])){
    error_die('Entrer votre nom', '/?page=contact');
}

if(empty($_POST['phone'])){
    error_die('Entrer votre téléphone', '/?page=contact');
}

if(empty($_POST['message'])){
    error_die('Entrer votre message', '/?page=contact');
}

if (strlen($_POST['message']) > 1000){
    error_die('Message de 1000 caractères max', '/?page=contact');
}

$_POST['fullname'] = htmlspecialchars($_POST['fullname']);
$_POST['phone'] = htmlspecialchars($_POST['phone']);
$_POST['message'] = htmlspecialchars($_POST['message']);

/* Prochianes étapes :
- Sanitize la donnée
- Gerer les erreurs/success sur la page
- Trasnformer l'enregistremnt de mesage + header + die en une fonction
*/

$contactFormManager -> save_contact_form($_POST['fullname'], $_POST['phone'], $_POST['email'], $_POST['message']);

$_SESSION['success_message'] = 'Message envoyé!';
header('Location: /?page=contact');

?>