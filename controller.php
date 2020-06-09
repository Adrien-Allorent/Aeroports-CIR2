<?php

if (isset($_GET['func'])) {
    if ($_GET['func'] == 'validSearch') {
        header ('Location: resultat.php');
    }
    if ($_GET['func'] == 'confirm') {
        header ('Location: recherche.php');
    }
}