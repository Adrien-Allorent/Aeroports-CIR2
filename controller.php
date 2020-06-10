<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbn = 'pgsql:dbname=projet;host=127.0.0.1,port=5432';
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
        if (isset($_POST['originAirport']) && isset($_POST['destinationAirport']) && isset($_POST['dateDepart']) && isset($_POST['nom1']) && isset($_POST['prenom1']) && isset($_POST['dateNaissance1']) && isset($_POST['mail1'])) {
            recupForm();
        }
    }
    if ($_GET['func'] == 'confirm') {
        header ('Location: recherche.php');
    }
}


function recupForm(){

    $_SESSION['originAirport'] = $_POST['originAirport'];
    $_SESSION['destinationAirport'] = $_POST['destinationAirport'];
    $_SESSION['dateDepart'] = $_POST['dateDepart'];
    for ($i=1; $i<=$_SESSION['nbrePassagers'];$i++){
        $_SESSION['nom'.strval($i)] =$_POST['nom'.strval($i)];
        $_SESSION['prenom'.strval($i)] =$_POST['prenom'.strval($i)];
        $_SESSION['dateNaissance'.strval($i)] =$_POST['dateNaissance'.strval($i)];
        $_SESSION['mail'.strval($i)] =$_POST['mail'.strval($i)];
    }
}
