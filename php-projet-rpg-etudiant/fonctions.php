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
            if ($position == POSITION_VIDE){
                $uneLigne .= ' | ' . YELLOW.POSITION_VIDE.RESET ;
            } elseif ($position == POSITION_HERO) {
                $uneLigne .= ' | ' . GREEN.POSITION_HERO.RESET ;
            } elseif ($position == POSITION_OBSTACLE) {
                $uneLigne .= ' | ' . RED.POSITION_OBSTACLE.RESET ;
            } elseif ($position == POSITION_ARRIVER) {
                $uneLigne .= ' | ' . BLUE.POSITION_ARRIVER.RESET ;
            }

        }
        $lignes .= $uneLigne . ' | ' . PHP_EOL;}

    $resultat = $numerosColonne.$lignes;

    return $resultat;
}

function placerHero(array& $grille,int $largeur, int $hauteur) : array {
    $heroLigne = mt_rand(0,$hauteur-1);
    $heroColonne = mt_rand(0,$largeur-1);

    while ($grille[$heroLigne][$heroColonne] <> '-'){
        $heroLigne = mt_rand(0,$hauteur-1);
        $heroColonne = mt_rand(0,$largeur-1);
    }
    $grille[$heroLigne][$heroColonne] = POSITION_HERO;

    $placementHero = [$heroLigne,$heroColonne];
    return $placementHero;
}


function placementObstacle(array& $grille,int $largeur, int $hauteur) : void {
    $nbObstaclesAPlacer = $largeur * $hauteur * 0.15;
    $nbObstaclesAPlacer = (int)$nbObstaclesAPlacer;

    for ($i=0;$i<$nbObstaclesAPlacer;$i++) {
        $obstacleLigne = mt_rand(0,$hauteur-1);
        $obstacleColonne = mt_rand(0,$largeur-1);

        while ($grille[$obstacleLigne][$obstacleColonne] <> '-'){
            $obstacleLigne = mt_rand(0,$hauteur-1);
            $obstacleColonne = mt_rand(0,$largeur-1);
        }

        $grille[$obstacleLigne][$obstacleColonne] = POSITION_OBSTACLE;
    }
}


function placementArriver(array& $grille,int $largeur, int $hauteur) :void {
    $arriverLigne = mt_rand(0,$hauteur-1);
    $arriverColonne = mt_rand(0,$largeur-1);

    while ($grille[$arriverLigne][$arriverColonne] <> '-'){
        $arriverLigne = mt_rand(0,$hauteur-1);
        $arriverColonne = mt_rand(0,$largeur-1);
    }

    $grille[$arriverLigne][$arriverColonne] = POSITION_ARRIVER ;

}


