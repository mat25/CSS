<?php

$tableau = [12,15,16,55,44];
$tableau2 = ["tit","gergr","fsqfz"];

//tableau qui affiche les elements du tableau

function afficherTableau(array $tab) : void {
    foreach ($tab as $nombre) {
        echo $nombre." ";
    }
    echo PHP_EOL;
}


//appel
afficherTableau($tableau);
afficherTableau($tableau2);