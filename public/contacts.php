<?php

require '../app/config.php';
require APP_PATH . 'pdo.php';

$title = "Création d'un contact";

//Début de la page
require PARTIALS_PATH . 'header.php';

?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <?php include PARTIALS_PATH . 'errors.php'; ?>
            <?php include PARTIALS_PATH . 'contacts/createContactForm.php'; ?>
        </div>

        <?php include PARTIALS_PATH . 'contacts/contactsList.php'; ?>
    </div>


<?php
//Fin de la page
require PARTIALS_PATH . 'footer.php';
