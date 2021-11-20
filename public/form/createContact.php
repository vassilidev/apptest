<?php

include "../../app/config.php";

postMethod();

require APP_PATH . 'pdo.php';

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['gender'])) {
    $newContact = $bdd->prepare('INSERT INTO `contacts`(`gender`, `name`, `surname`) VALUES (?, ?, ?)');
    $newContact->execute([$_POST['gender'], $_POST['name'], $_POST['surname']]);
} else {
    $_SESSION['error'] = "Tous les champs sont obligatoires";
}

header('Location: ' . url() . 'contacts.php');
