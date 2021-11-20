<?php

include "../../app/config.php";

postMethod();

require APP_PATH . 'pdo.php';

if (!empty($_POST['title']) && !empty($_POST['year'])) {
    $newFilm = $bdd->prepare('INSERT INTO `films`(`title`, `year`) VALUES (?, ?)');
    $newFilm->execute([$_POST['title'], $_POST['year']]);

    $filmID = $bdd->lastInsertId();

    if (!empty($_POST['contacts'])) {
        $contactFilm = $bdd->prepare('INSERT INTO contact_film (contact_id, film_id, job) VALUES (?, ?, ?)');
        foreach ($_POST['contacts'] as $job => $contacts) {
            foreach ($contacts as $contact) {
                $contactFilm->execute([$contact, $filmID, $job]);
            }
        }

        $contactFilm->closeCursor();
    }
} else {
    $_SESSION['error'] = "Tous les champs sont obligatoires";
}

header('Location: ' . url() . 'films.php');
