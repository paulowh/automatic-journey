<?php 
require './function.php';
require_once './classes/Indicador.php';

$indicador = new Indicador();

$id = $_POST['id'];

$dados = $indicador->consultarIndicadorByUc($id);

$twig = twig();

if (!empty($dados)) {
    echo $twig->render('indicadores.twig', ['indicador' => $dados]);
}
