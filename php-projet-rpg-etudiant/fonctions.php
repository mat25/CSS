<?php
require "constantes.php";

// Fonction permettant d'effacer l'écran
function effacerEcran() : void {
    echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
}


function creerGrille(int $largeur, int $hauteur) : array {
    $grille = [];

    for($i=0; $i<$hauteur; $i++) {
        // Parcours de chaque colonne
        for($j=0; $j<$largeur; $j++) {
            $grille[$i][$j] = POSITION_VIDE;
        }
    }
    return $grille;
}

function getGrille(array $grille, int $largeur) : string {
    $numerosColonne = str_repeat(' ',5) ;
    for ($i=0; $i < $largeur; $i++) {
        $numerosColonne .= BLUE . sprintf('%02d  ', $i) . RESET;
    }
    $numerosColonne .= PHP_EOL;


    $lignes = '';
    foreach ($grille  as $numero=>$ligne) {
        $uneLigne = BLUE . sprintf('%02d', $numero) . RESET;
        foreach ($ligne as $position) {
            $uneLigne .= ' | ' . YELLOW.POSITION_VIDE.RESET ;
        }
        $lignes .= $uneLigne . ' | ' . PHP_EOL;}


    return $numerosColonne + $lignes;
}