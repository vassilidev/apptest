<?php

require_once '../../app/config.php';
require_once APP_PATH . 'pdo.php';

$contacts = $bdd->query('SELECT * FROM contacts');
$contacts->execute();

$data = [];

while ($contact = $contacts->fetch()) {
    $data[] = [
        'id' => $contact['id'],
        'text' => ucfirst($contact['gender']) . ' ' . ucfirst($contact['name']) . ' ' . mb_strtoupper($contact['surname'])
    ];
}

$contacts->closeCursor();

echo json_encode($data);
