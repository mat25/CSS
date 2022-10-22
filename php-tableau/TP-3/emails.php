<?php
$emails = ["durand.martin@free.fr","dupond.martin@gmail.com","petit.bernard@laposte.net"];
foreach ($emails as $email) {
    $nom = substr(strpos($email,"."),strpos($email,"@"));
    echo $nom;

}

