<?php

require __DIR__.'/config.php';

// connexion à la base de donnée et message d'erreur :
try {
    $database = new PDO($DBdataSourceName, $DBuser, $DBpassword);
} catch (Exception $e) {
    die('Error : '.$e->getMessage());
}