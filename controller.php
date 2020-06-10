<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbn = 'pgsql:dbname=projet;host=localhost;port=5432';
$us = 'postgres';
$pw = 'Isen2018';
try{
    $db = new PDO($dbn, $us, $pw);
}
catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


if (isset($_GET['func'])) {
    if ($_GET['func'] == 'validSearch') {
        if (isset($_POST['originAirport']) && isset($_POST['destinationAirport']) && isset($_POST['dateDepart'])){// && isset($_POST['nom1']) && isset($_POST['prenom1']) && isset($_POST['dateNaissance1']) && isset($_POST['mail1'])) {
            //mettre de l'ajax ici
        }
        else {
            echo ("Il y a une erreur dans la saisie du formulaire");
        }
    }
    if ($_GET['func'] == 'confirm') {
        header ('Location: recherche.php');
    }
}