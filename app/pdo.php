<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=movie-chainer-vanilla', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage() . "<br/>");
}
