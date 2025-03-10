<?php

$_ENV = parse_ini_file('./.env');

require_once './vendor/autoload.php';

function twig()
{
    $loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
    $twig = new Twig\Environment($loader, [
        'debug' => true,
        'cache' => __DIR__ . '/temp' 
    ]);
    $twig->addExtension(new Twig\Extension\DebugExtension());

    return $twig;
}