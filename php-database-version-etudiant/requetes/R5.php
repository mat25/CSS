<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie
*/

$resultats = [];
foreach ($tableArticles as $id=> $cle) {

    foreach ($tableCategories as $index => $lib){
        if ($cle["id_categorie"] == $index) {
            $libeller = $lib["libelle"];
        }
    }
    $resultats[] = ["id" => $id, "titre" => $cle["titre"],"date_creation" => $cle["date_creation"],"libelle" => $libeller ];
}

sort($resultats);



// test
print_r($resultats);
