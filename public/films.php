<?php

require '../app/config.php';
require APP_PATH . 'pdo.php';

$title = "Création d'une fiche film";

//Début de la page
require PARTIALS_PATH . 'header.php';

?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <?php include PARTIALS_PATH . 'errors.php'; ?>
            <?php include PARTIALS_PATH . 'films/createFilmForm.php'; ?>
        </div>

        <?php include PARTIALS_PATH . 'films/filmsList.php'; ?>
    </div>


<?php
//Fin de la page
require PARTIALS_PATH . 'footer.php';
