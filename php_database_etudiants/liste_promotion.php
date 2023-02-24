<?php
require_once "./src/modele/promotiondb.php";
$promotions = selectAllpromotion();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>

<div class="container">
    <navigation class="navigation ">
        <div class="logo">
            <a href="index.php"><img src="image/logo.png" alt="logo de l'ecole"></a>
        </div>
        <div class="liste_etudiant">
            <p><a href="index.php">Listes etudiants</a></p>
        </div>
        <div class="liste_formation">
            <p><a href="liste_promotion.php">Listes formations</a></p>
        </div>
        <div class="nouvelle-etudiant">
            <p><a href="new_student.php">Nouvel Etudiant</a></p>
        </div>
        <div class="contact">
            <p><a href="contact.php">Contact</a></p>
        </div>
    </navigation>

    <header class="header">
        <h1>Listes des formations</h1>
    </header>
    <main class="contain">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="promotion">Promotion de l'etudiant</label>
            <select name="promotion" id="promotion">
                <option value="">Aucune promotion</option>
                <?php
                foreach ($promotions as $promotion) { ?>
                    <option value="<?= $promotion["id_promotion"]?>"><?= $promotion["intitule_promotion"]?></option>
                <?php } ?>

                <input type="submit" value="Chercher">
        </form>


        
        
    </main>
    <footer class="footer">
        <p>Copyright © 2000-2023 Best Students Inc. Tous droits réservés</p>
    </footer>
</div>
</body>
</html>
