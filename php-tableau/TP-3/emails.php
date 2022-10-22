<?php
$emails = ["durand.martin@free.fr","dupond.petit@free.fr","petit.bernard@laposte.net"];
$tableauNomAdresseMail = [];

//on recupere le nom est l'addresse mail de la personne pour le mettre dans un tableau associatif
foreach ($emails as $email) {
    $premierPoint = strpos($email,".");
    $arobase = strpos($email,"@");
    $nomPersonne = substr($email,$premierPoint+1,$arobase-$premierPoint-1);
    $tableauNomAdresseMail[$nomPersonne] = $email;
}

foreach ($tableauNomAdresseMail as $nom => $mail) {
    echo "$nom a $mail comme adresse mail";
    echo PHP_EOL;
}

$nomDeDomaineARechercher = readline("Veuillez indiquer un nom de domaine que vous voulez rechercher : ");

foreach ($tableauNomAdresseMail as $nom => $mail) {
    if ($nomDeDomaineARechercher == substr($mail,strpos($mail,"@")+1,strlen($mail))) {
        echo $nom;
        echo PHP_EOL;
    }
}

