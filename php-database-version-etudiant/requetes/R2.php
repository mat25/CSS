<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création
*/

$resultats = [];
$categorieId = readline("Saisir l'id d'une catégorie : ");

foreach ($tableArticles as $id => $cle) {
    if ($cle["id_categorie"] == $categorieId) {
        $resultats[] = ["id" => $id ,"titre" => $cle["titre"],"contenu" => $cle["contenu"],"date_creation" => $cle["date_creation"]];
    }
}

// test
print_r($resultats);