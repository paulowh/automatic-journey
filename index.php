<?php
require './function.php';
require './classes/Unidade.php';

include './includes/header.php';

$unidade = new Unidade();

$ucs = $unidade->consultaUc();

$twig = twig();

?>


<main>
    <form action="#" class="mt-5 ui form">
        <div>

            <?= $twig->render('cadastrar-uc.twig', ['ucs' => $ucs]); ?>
            <textarea class="field" name="descricao" id="descricao"></textarea>


            <input type="submit">

        </div>
    </form>
</main>