<?php

//On inclus la configuration et les helpers
require_once '../app/config.php';

//On inclus la connexion à la base de donnée
require_once APP_PATH . 'pdo.php';

//On récupères toutes les entrées dans la table Contacts

$contacts = $bdd->query('SELECT * FROM contacts');
$contacts->execute();

?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Genre</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($contact = $contacts->fetch()) { ?>
        <tr>
            <th scope="row"><?= $contact['id'] ?></th>
            <td><?= $contact['gender'] ?></td>
            <td><?= $contact['name'] ?></td>
            <td><?= $contact['surname'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php

$contacts->closeCursor();
