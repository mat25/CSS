<?php


$largeur = readline("Saisir une largeur : ");
$hauteur = readline("Saisir une hauteur : ");

$grille = creerGrille($largeur,$hauteur);

echo getGrille($grille,$largeur);


