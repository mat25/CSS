<?php
require_once "connexiondb.php";

//SELECT * FROM etudiant
function selectAllStudents() : array {
    $connexion = createConnection();
    $requete = $connexion->prepare("SELECT * FROM etudiant");
    $requete->execute();
    $etudiants = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $etudiants;
}

//SELECT * FROM etudiant WHERE id_etudiant = ?
function selectStudentByID($id) : array|bool {
    $connexion = createConnection();
    $requeteSQL = "SELECT * FROM etudiant WHERE id_etudiant = :id";
    $requete = $connexion->prepare($requeteSQL);
    $requete->bindValue(":id",$id);
    $requete->execute();
    $etudiant = $requete ->fetch(PDO::FETCH_ASSOC);
    return $etudiant;
}