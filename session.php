<?php
session_start();
if (isset($_SESSION['nbVisite'])) {
    // On affiche le message
    $nbVisite = $_SESSION['nbVisite'] + 1;
    echo "Merci pour votre fidélité c'est votre $nbVisite éme visite.";
    $_SESSION['nbVisite'] = $nbVisite;
    // incrémenter le compteur
} else {
    // on crée la variable et on l'initialise
    $nbVisite = 1;
    echo "Merci pour votre première visite :)";
    $_SESSION['nbVisite'] = $nbVisite;
}