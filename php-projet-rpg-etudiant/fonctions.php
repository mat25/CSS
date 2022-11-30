<?php

// Fonction permettant d'effacer l'écran
function effacerEcran() : void {
    echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
}


function creerGrille(int $largeur, int $hauteur) : array {
    $grille = [];
    const POSITION_VIDE = '-';

    for($i=0; $i<$hauteur; $i++) {
        // Parcours de chaque colonne
        for($j=0; $j<$largeur; $j++) {
            $grille[$i][$j] = POSITION_VIDE;
        }
    }
    return $grille;
}