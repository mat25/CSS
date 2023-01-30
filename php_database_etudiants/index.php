<?php
require_once './src/modele/etudiantDB.php';
$etudiants = selectAllStudents();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Best Student</title>
</head>
<body>
<div class="container">
    <header class="header">
        <h1>Best Student</h1>
    </header>
    <main class="contain">
        <div class="grille">
            <?php
            foreach ($etudiants as $etudiant) { ?>
            <div class="carte">
                <p>Nom : <?= strtoupper($etudiant["nom_etudiant"])?></p>
                <p>Prénom : <?= ucfirst($etudiant["prenom_etudiant"])?></p>
                <p><?php
                    $timestamp = strtotime($etudiant["date_naissance_etudiant"]);
                    $date = date("d\ m\ Y",$timestamp);
                    ?>
                    <i class="fa-solid fa-calendar-days"></i><?=$date?>
                    </p>
                <p class="bouton_detail"><a href="detail-etudiant.php?id=<?=$etudiant["id_etudiant"]?>">En savoir plus</a></p>
            </div>
            <?php } ?>
        </div>
    </main>
    <footer class="footer">
        <a href="tel:0685974585">Nous contacter</a>
    </footer>
</div>
</body>
</html>