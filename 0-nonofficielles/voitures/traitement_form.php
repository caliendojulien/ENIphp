<?php
// traitement_form.php
require_once 'Cnx.php';

if (isset($_POST["ajouter"])) {
    $id_modele = htmlspecialchars($_POST["id_modele"]);
    $modele = htmlspecialchars($_POST["modele"]);
    $marque = htmlspecialchars($_POST["marque"]);
    $carburant = htmlspecialchars($_POST["carburant"]);
    $pdo = new Cnx();
    $pdo->addModele($id_modele, $marque, $modele, $carburant);
}

require_once 'index.php';