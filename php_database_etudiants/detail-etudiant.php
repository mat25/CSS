<?php

$id = null;
$erreur = null;
if (!empty($_GET["id"])) {
    // Le parametre existe
    $id=$_GET["id"];
} else {
    // Le paramettre n'existe pas ou ets vide
    $erreur = "L'URL n'est pas valide !";
}
require_once './src/modele/etudiantDB.php';
$etudiant = selectStudentByID($id);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Detail de l'etudiant</title>
</head>
<body>
<?php
if (isset($erreur) ) { ?>
    <div class="erreur">
        <h2>Erreur</h2>
        <p><?= $erreur?></p>
    </div>
<?php } else { ?>
    <div class="container_details">
        <h1 class="titre_details_etudiant"><?= ucfirst($etudiant["prenom_etudiant"])?> <?=strtoupper($etudiant["nom_etudiant"])?></h1>
        <div class="contain_details">
            <p>
                <i class="fa-regular fa-id-card"></i>
                <?= $etudiant["id_etudiant"]?>
            </p>
            <p>
                <?php
                $timestamp = strtotime($etudiant["date_naissance_etudiant"]);
                $date = date("d\ m\ Y",$timestamp);
                ?>
                <i class="fa-solid fa-calendar-days"></i><?=$date?>
            </p>
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <?= $etudiant["adresse_etudiant"]?>
            </p>
            <p>
                <i class="fa-solid fa-mobile"></i>
                <?= $etudiant["telephone"]?>
            </p>
            <p>
                <i class="fa-solid fa-envelope"></i>
                <?= $etudiant["email_etudiant"]?>
            </p>
        </div>
    </div>
<?php } ?>
</body>
</html>
