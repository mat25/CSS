<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";

/* Requête 4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur
*/
$resultats = [];

$dateCreation = readline("Saisir une date (dd/mm/yyyy) : ");
$dateCreation = str_replace("/","-",$dateCreation);

foreach ($tableArticles as $id => $cle) {
    $dateCrea1 = strtotime($cle["date_creation"]);
    $dateCrea2 = strtotime($dateCreation);
    echo $dateCrea2;
    if ($dateCrea1 > $dateCrea2) {
        foreach ($tableAuteurs as $idAuteur => $cleAuteur) {
            if ($cle["id_auteur"] == $idAuteur) {
                $nom = $cleAuteur["nom"];
                $prenom = $cleAuteur["prenom"];
            }
        }


        $resultats[] = ["id" => $id ,"titre" => $cle["titre"],"contenu" => $cle["contenu"],"date_creation" => $cle["date_creation"],"nom" => $nom,"prenom" => $prenom ];
    }
}

// test
print_r($resultats);