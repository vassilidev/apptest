<?php

define('PATH', dirname(__DIR__));
const APP_PATH = PATH . '/app/';
const PUBLIC_PATH = PATH . '/public/';
const PARTIALS_PATH = PATH . '/partials/';

/*
 * Get the url of the website
 */
function url(): string
{
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'] . '/'
    );
}

/*
 * Dump better the variable
 */
function dd($array)
{
    echo "<pre>";
    die(print_r($array));
    echo "</pre>";
}

//Pas de traitement si la personne arrive en _GET
function postMethod()
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        die('Que fais-tu ici ? :D');
    }
}
