<?php
require './function.php';
require './classes/Unidade.php';

include './includes/header.php';

$unidade = new Unidade();

$ucs = $unidade->consultaUc();

$twig = twig();

echo $twig->render('cadastrar-uc.twig', ['ucs' => $ucs]);

