<?php
require('inc/function.php');

// TRAITEMENT PHP
    // gestion des request => $variables
    // gestion des formulaire
$title = 'ici la page home';

include('inc/header.php'); ?>
    <h1>page home</h1>
    <?php
    maPremierFonction();
    bonjourATous('michel');
    bonjourATous('bernard');
    bonjourATous();

    $chiffre = division(12,2);
    echo $chiffre;
    $chiffre2 = division($chiffre, 5468);
    $fruits = array('kiwi','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye','banane','papaye');
    debug($fruits);
    debug($GLOBALS);
    ?>
<?php include('inc/footer.php');