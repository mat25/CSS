<?php

$produits = [
    "P0001" => ["Désignation" => "Produit 1", "Prix" => 50.99, "Stock" => 10],
    "P0002" => ["Désignation" => "Produit 2", "Prix" => 99.99, "Stock" => 20],
    "P0003" => ["Désignation" => "Produit 3", "Prix" => 25.50, "Stock" => 6],
    "P0004" => ["Désignation" => "Produit 4", "Prix" => 130.99 , "Stock" => 4]

];


// Ex 1
/*
foreach ($produits as $reference => $cle) {
    echo "$reference : $cle[Désignation]";
    echo PHP_EOL;
}
*/
// Ex 2
/*
$valeurStock = 0;
foreach ($produits as $reference => $cle) {
    echo "$reference : $cle[Désignation]";
    echo PHP_EOL;
    $valeurStock += $cle["Prix"];
}


echo "La valeur du stock est de ".number_format($valeurStock, 2, ',', ' ');
*/

//Ex3
/*
$valeurStock = 0;
$produitsAReaprovisioner = [];
foreach ($produits as $reference => $cle) {
    echo "$reference : $cle[Désignation]";
    echo PHP_EOL;
    $valeurStock += $cle["Prix"];

    if($cle["Stock"] < 7) {
        $produitsAReaprovisioner[] = $reference;
    }
}


echo "La valeur du stock est de ".number_format($valeurStock, 2, ',', ' ');

print_r($produitsAReaprovisioner);
*/


// Ex4

$valeurStock = 0;
$referenceDemander = [];
foreach ($produits as $reference => $cle) {
    echo "$reference : $cle[Désignation]";
    echo PHP_EOL;
    $valeurStock += $cle["Prix"];

    if($cle["Stock"] < 7) {
        $produitsAReaprovisioner[] = $reference;
    }
}


echo "La valeur du stock est de ".number_format($valeurStock, 2, ',', ' ');



echo PHP_EOL;
$referenceDemander = readline("Saisir une référence : ");

if (in_array($referenceDemander,$produitsAReaprovisioner)){
    $quantitéRecu = readline("Saisir une quantité Recu : ");
    $produits[$referenceDemander]["Stock"] += $quantitéRecu ;
    echo "La quantité a bien été mise a jour";

} elseif (array_key_exists("P0003",$produits)) {
    echo "La référence n'existe pas";
} else {
    echo "test";
}
