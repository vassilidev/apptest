<?php

require '../app/config.php';
require APP_PATH . 'pdo.php';

//Début de la page
require PARTIALS_PATH . 'header.php';

?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">MovieChainerVanilla</h1>
            <p class="col-md-8 fs-4">Bienvenue sur le site, ajouter des contacts sur un film avec son métier</p>
            <a href="<?= url() . 'contacts.php' ?>" class="btn btn-primary btn-lg" type="button">Créer un contact</a>
            <a href="<?= url() . 'films.php' ?>" class="btn btn-primary btn-lg" type="button">Créer un film</a>
        </div>
    </div>

<?php
//Fin de la page
require PARTIALS_PATH . 'footer.php';
