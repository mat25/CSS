<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie
*/

$resultats = [];
foreach ($tableArticles as $id => $cle) {
    foreach ($tableCategories as $idCategorie => $libelle) {
        if ($idCategorie == $cle["id_categorie"]) {
            $nomCategorie = $libelle["libelle"];
            break;
        }
    }
    $resultats[] = ["id" => $id ,"titre" => $cle["titre"],"contenu" => $cle["contenu"],"date_creation" => $cle["date_creation"], "nomCategorie" => $nomCategorie];

}

// test
print_r($resultats);