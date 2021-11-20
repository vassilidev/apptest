<?php

//On inclus la configuration et les helpers
require_once '../app/config.php';

//On inclus la connexion à la base de donnée
require_once APP_PATH . 'pdo.php';

//On récupères toutes les entrées dans la table Films
$films = $bdd->query('
SELECT f.*, 
       (SELECT COUNT(*) 
       FROM contact_film 
       WHERE film_id = f.id) as contacts_count
FROM films as f');
$films->execute();

?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Année</th>
            <th scope="col">Contacts</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($film = $films->fetch()) { ?>
            <tr>
                <th scope="row"><?= $film['id'] ?></th>
                <td><?= htmlspecialchars($film['title']) ?></td>
                <td><?= htmlspecialchars($film['year']) ?></td>
                <td><?= htmlspecialchars($film['contacts_count']) ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

<?php

$films->closeCursor();
